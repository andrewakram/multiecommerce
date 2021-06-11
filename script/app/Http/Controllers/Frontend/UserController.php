<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Userplanmeta;
use Hash;
use App\Order;
use Cache;
use App\Useroption;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;
use Session;
class UserController extends Controller
{
    public function __construct()
    {
       if(env('MULTILEVEL_CUSTOMER_REGISTER') != true){
        abort(404);
       }
    }

   public function login(){
   	if(Auth::check()){

   		return redirect('/user/dashboard');
   	}
       if(Cache::has(domain_info('user_id').'seo')){
        $seo=json_decode(Cache::get(domain_info('user_id').'seo'));
       }
       else{
        $data=Useroption::where('user_id',domain_info('user_id'))->where('key','seo')->first();
        $seo=json_decode($data->value ?? '');
       }
       if(!empty($seo)){
         JsonLdMulti::setTitle('Login - '.$seo->title ?? env('APP_NAME'));
       JsonLdMulti::setDescription($seo->description ?? null);
       JsonLdMulti::addImage(asset('uploads/'.domain_info('user_id').'/logo.png'));

       SEOMeta::setTitle('Login - '.$seo->title ?? env('APP_NAME'));
       SEOMeta::setDescription($seo->description ?? null);
       SEOMeta::addKeyword($seo->tags ?? null);

       SEOTools::setTitle('Login - '.$seo->title ?? env('APP_NAME'));
       SEOTools::setDescription($seo->description ?? null);
       SEOTools::setCanonical($seo->canonical ?? url('/'));
       SEOTools::opengraph()->addProperty('keywords', $seo->tags ?? null);
       SEOTools::opengraph()->addProperty('image', asset('uploads/'.domain_info('user_id').'/logo.png'));
       SEOTools::twitter()->setTitle('Login - '.$seo->title ?? env('APP_NAME'));
       SEOTools::twitter()->setSite($seo->twitterTitle ?? null);
       SEOTools::jsonLd()->addImage(asset('uploads/'.domain_info('user_id').'/logo.png'));
       }
       
   	return view(base_view().'.account.login');
   }

   public function register(){
   	if(Auth::check()){

   		return redirect('/user/dashboard');
   	}

       if(Cache::has(domain_info('user_id').'seo')){
          $seo=json_decode(Cache::get(domain_info('user_id').'seo'));
       }
       else{
          $data=Useroption::where('user_id',domain_info('user_id'))->where('key','seo')->first();
          $seo=json_decode($data->value ?? '');
       }
       if(!empty($seo)){
       JsonLdMulti::setTitle('Register - '.$seo->title ?? env('APP_NAME'));
       JsonLdMulti::setDescription($seo->description ?? null);
       JsonLdMulti::addImage(asset('uploads/'.domain_info('user_id').'/logo.png'));

       SEOMeta::setTitle('Register - '.$seo->title ?? env('APP_NAME'));
       SEOMeta::setDescription($seo->description ?? null);
       SEOMeta::addKeyword($seo->tags ?? null);

       SEOTools::setTitle('Register - '.$seo->title ?? env('APP_NAME'));
       SEOTools::setDescription($seo->description ?? null);
       SEOTools::setCanonical($seo->canonical ?? url('/'));
       SEOTools::opengraph()->addProperty('keywords', $seo->tags ?? null);
       SEOTools::opengraph()->addProperty('image', asset('uploads/'.domain_info('user_id').'/logo.png'));
       SEOTools::twitter()->setTitle('Register - '.$seo->title ?? env('APP_NAME'));
       SEOTools::twitter()->setSite($seo->twitterTitle ?? null);
       SEOTools::jsonLd()->addImage(asset('uploads/'.domain_info('user_id').'/logo.png'));
       }
   	return view(base_view().'.account.register');
   }

   public function settings(){
      SEOTools::setTitle('Settings');
      return view(base_view().'.account.account');
   }

   public function settings_update(Request $request){
       $validatedData = $request->validate([
         'name' => 'required|max:255',
         'email'  =>  'required|email|unique:users,email,'.Auth::id()

      ]);

       if ($request->password) {
         $validatedData = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
         ]);         
      }

      $user=User::find(Auth::id());
      $user->name=$request->name;
      $user->email=$request->email;
      if ($request->password) {
         $check=Hash::check($request->password_current,auth()->user()->password);

         if ($check==true) {
            $user->password= Hash::make($request->password);
         }
         else{

            $returnData['errors']['password']=array(0=>"Enter Valid Password");
            $returnData['message']="given data was invalid.";
            
            return response()->json($returnData, 401);

         }
      }
      $user->save();

      return response()->json(['Profile Updated Successfully']);  
   }

   public function orders(){
      SEOTools::setTitle('Orders');
      $orders=Order::where('customer_id',Auth::id())->where('user_id',domain_info('user_id'))->with('payment_method')->latest()->paginate(20);
      return view(base_view().'.account.orders',compact('orders'));
   }

   public function order_view($id){

      $id=request()->route()->parameter('id');
      $info=Order::where('customer_id',Auth::id())->where('user_id',domain_info('user_id'))->with('order_item_with_file','order_content','shipping_info','payment_method')->findorFail($id);
      $order_content=json_decode($info->order_content->value);
       SEOTools::setTitle('Order No '.$info->order_no);
      return view(base_view().'.account.order_view',compact('info','order_content'));
   }


   public function register_user(Request $request){
      
	   	$validated = $request->validate([
	   		'email' => 'required|email|unique:users|max:100',
	   		'name' => 'required|max:100',
	   		'password' => 'required|confirmed|min:8|max:50',
	   	]);
	   	$domain_id=domain_info('domain_id');
       $user_id=domain_info('user_id');

       $plan=Userplanmeta::where('user_id',$user_id)->first();
      $user_limit=$plan->customer_limit ?? 0;
       $total_customers=User::where('created_by',$user_id)->count();
       
      if($user_limit <= $total_customers){
        \Session::flash('user_limit','Opps something wrong please contact with us..!!');
        return back();
        
      }
      

	   	$user= new User();
	   	$user->email=$request->email;
	   	$user->name=$request->name;
	   	$user->password=Hash::make($request->password);
	   	$user->domain_id=$domain_id;
	   	$user->created_by=$user_id;
	   	$user->role_id=2;
	   	$user->save();
	   	Auth::loginUsingId($user->id);

	   	return redirect('/user/dashboard');

   }

   public function dashboard(){
   	if(Auth::check()){
       SEOTools::setTitle('Dashboard');
   	  return view(base_view().'.account.dashboard');
   	}
    return redirect('/user/login');
   	
   }
}
