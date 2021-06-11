<?php 
namespace Amcoders\Check;
use Illuminate\Support\Facades\Http;
use Amcoders\Lpress\Lphelper;

class Everify 
{
	public static $massage;
	
	public static function Check($key)
	{
		$url= url('/');
		$response = Http::post('http://api.lpress.xyz/api/verify', [
				'p' => $key,
				't' => 'i',
				'u' => $url,
				'i' => id(),
			]);
		$data= $response->json();
		if ($response->ok()) {
			$token=Lphelper::decode($data['token']);
			put($token,base_path().'/web.txt');
			return true;
		}
		else{
			Everify::$massage=$data['error'];
			return false;
		}
		
	}

}





?>