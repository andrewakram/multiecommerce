@extends('layouts.app')
@push('style')
<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
@endpush
@section('head')
@include('layouts.partials.headersection',['title'=>trans('Create Page')])
@endsection
@section('content')


<div class="row">
	<div class="col-lg-12">
		<form method="post" action="{{ route('seller.page.store') }}" id="productform">
			@csrf

			<div class="card">
				<div class="card-body">

					<div class="row">

						<div class="col-sm-12">
                        @if(app()->getLocale() == 'en'){
							{{ input((array('title'=>'Page Title (arabic)','name'=>'title_ar','is_required'=>true))) }}
							{{ input((array('title'=>'Page Title (english)','name'=>'title_en','is_required'=>true))) }}

							{{ textarea(array('title'=>'Page Excerpt (arabic)','name'=>'excerpt_ar','is_required'=>true)) }}
							{{ textarea(array('title'=>'Page Excerpt (english)','name'=>'excerpt_en','is_required'=>true)) }}

							{{ editor(array('title'=>'Page Content (arabic)','name'=>'content_ar','class'=>'content')) }}
							{{ editor(array('title'=>'Page Content (english)','name'=>'content_en','class'=>'content')) }}
                        @else
                                {{ input((array('title'=>'عنوان الصفحة (عربي)','name'=>'title_ar','is_required'=>true))) }}
                                {{ input((array('title'=>'عنوان الصفحة (انجليزي)','name'=>'title_en','is_required'=>true))) }}

                                {{ textarea(array('title'=>'Page Excerpt (عربي)','name'=>'excerpt_ar','is_required'=>true)) }}
                                {{ textarea(array('title'=>'Page Excerpt (انجليزي)','name'=>'excerpt_en','is_required'=>true)) }}

                                {{ editor(array('title'=>'محتوي الصفحة (عربي)','name'=>'content_ar','class'=>'content')) }}
                                {{ editor(array('title'=>'محتوي الصفحة (انجليزي)','name'=>'content_en','class'=>'content')) }}
                        @endif

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
<script type="text/javascript" src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/form.js?v=1.0') }}"></script>
@endpush
