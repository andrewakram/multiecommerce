@extends('layouts.app')
@push('style')
<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
@endpush
@section('head')
@include('layouts.partials.headersection',['title'=> trans('Edit Product')])
@endsection
@section('content')


<div class="row">
	<div class="col-lg-12">
		<form method="post" action="{{ route('seller.product.update',$info->id) }}" id="productform">
			@csrf
			@method('PUT')
			<div class="card">
				<div class="card-body">
					@if (session()->has('flash_notification.message'))
					<div class="alert alert-{{ session()->get('flash_notification.level') }}">
						<button type="button" class="close text-white" data-dismiss="alert" aria-hidden="true">×</button>
						{!! session()->get('flash_notification.message') !!}
					</div>
					@endif
					<div class="row">
						<div class="col-sm-3">
							<ul class="nav nav-pills flex-column">
								<li class="nav-item">
									<a class="nav-link active" href="{{ route('seller.product.edit',$info->id) }}"><i class="fas fa-cogs"></i> {{ __('Item') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ url('seller/product/'.$info->id.'/price') }}"><i class="fas fa-money-bill-alt"></i> {{ __('Price') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="{{ url('seller/product/'.$info->id.'/option') }}"><i class="fas fa-tags"></i> {{ __('Options') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ url('seller/product/'.$info->id.'/varient') }}"><i class="fas fa-expand-arrows-alt"></i> {{ __('Variants') }}</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{ url('seller/product/'.$info->id.'/image') }}"><i class="far fa-images"></i> {{ __('Images') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ url('seller/product/'.$info->id.'/inventory') }}"><i class="fa fa-cubes"></i> {{ __('Inventory') }}</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{ url('seller/product/'.$info->id.'/files') }}"><i class="fas fa-file"></i> {{ __('Files') }}</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{ url('seller/product/'.$info->id.'/seo') }}"><i class="fas fa-chart-line"></i> {{ __('SEO') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ url('seller/product/'.$info->id.'/express-checkout') }}"><i class="fas fa-cart-arrow-down"></i> {{ __('Express checkout') }}</a>
								</li>
							</ul>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<label>{{ __('Product Name') }} {{__('Arabic')}}</label>
								<input type="text" name="title_ar" class="form-control" required="" value="{{ $info->title_ar }}">
							</div>
                            <div class="form-group">
                                <label>{{ __('Product Name') }} {{__('English')}}</label>
                                <input type="text" name="title_en" class="form-control" required="" value="{{ $info->title_en }}">
                            </div>
{{--							<div class="form-group">--}}
{{--								<label>{{ __('Slug') }} {{__('Arabic')}}</label>--}}
{{--								<input type="text" name="slug_ar" class="form-control" required="" value="{{ $info->slug_ar }}">--}}
{{--							</div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>{{ __('Slug') }} {{__('English')}}</label>--}}
{{--                                <input type="text" name="slug_en" class="form-control" required="" value="{{ $info->slug_en }}">--}}
{{--                            </div>--}}


							<div class="form-group">
								<label>{{ __('Short Description') }} {{__('Arabic')}}</label>
								<textarea class="form-control" name="excerpt_ar">{{ $content->excerpt->ar ?? '' }}</textarea>
							</div>
                            <div class="form-group">
                                <label>{{ __('Short Description') }} {{__('English')}}</label>
                                <textarea class="form-control" name="excerpt_en">{{ $content->excerpt->en ?? '' }}</textarea>
                            </div>
                            @if($content != null)
							{{ editor(array('title'=>trans('Product Content in arabic'),'name'=>'content_ar','class'=>'content','value'=> $content->content->ar ?? '')) }}
							{{ editor(array('title'=>trans('Product Content in english'),'name'=>'content_en','class'=>'content','value'=> $content->content->en ?? '')) }}

                            @endif
							<div class="form-group">
								<label>{{ __('Brand') }}</label>
								<select  class="form-control" name="brand">
									<option value="">-</option>
									{{ ConfigCategoryMulti('brand',$cats) }}
								</select>
							</div>

							<div class="form-group">
								<label>{{ __('Category') }}</label>
								<select multiple class="form-control select2" name="cats[]">
									<option value="">-</option>
									{{ ConfigCategoryMulti('category',$cats) }}
								</select>
							</div>
							<div class="form-group">
								<label>{{ __('Featured') }}</label>
								<select class="form-control" name="featured">
									<option value="0" @if($info->featured==0) selected="" @endif>{{ __('None') }}</option>
									<option value="1" @if($info->featured==1) selected="" @endif>{{ __('Trending products') }}</option>
									<option value="2" @if($info->featured==2) selected="" @endif>{{ __('Best selling products') }}</option>

								</select>
							</div>



							<div class="form-group">

								<label>
									<input type="checkbox" name="status" @if($info->status==1) checked="" @endif class="custom-switch-input sm" value="1">
									<span class="custom-switch-indicator"></span>
									{{ __('Published') }}
								</label>

							</div>
							<div class="form-group">
								<button class="btn btn-primary basicbtn" type="submit">{{ __('Save') }}</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
</form>

@endsection
@push('js')
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/form.js?v=1.0') }}"></script>
@endpush
