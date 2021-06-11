@extends('layouts.app')
@push('style')
<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
@endpush
@section('head')
@include('layouts.partials.headersection',['title'=>trans('Pages')])
@endsection
@section('content')


<div class="row">
	<div class="col-lg-12">
		<form method="post" action="{{ route('seller.page.update',$info->id) }}" id="productform">
			@csrf
			@method('PUT')
			<div class="card">
				<div class="card-body">

					<div class="row">

						<div class="col-sm-12">

{{--							{{ input((array('title'=>'Page Title','name'=>'title','is_required'=>true,'value'=>$info->title))) }}--}}
{{--							{{ input((array('title'=>'Page Slug','name'=>'slug','is_required'=>true,'value'=>$info->slug))) }}--}}

{{--							{{ textarea(array('title'=>'Page Excerpt','name'=>'excerpt','is_required'=>true,'value'=>$info->excerpt->value)) }}--}}

{{--							{{ editor(array('title'=>'Page Content','name'=>'content','class'=>'content','value'=>$info->content->value)) }}--}}

                            @if(app()->getLocale() == 'en'){
                            {{ input((array('title'=>'Page Title (arabic)','name'=>'title_ar','is_required'=>true,'value'=>$info->title_ar))) }}
                            {{ input((array('title'=>'Page Title (english)','name'=>'title_en','is_required'=>true,'value'=>$info->title_en))) }}

                            {{ input((array('title'=>'Page Slug (arabic)','name'=>'slug_ar','is_required'=>true,'value'=>$info->slug_ar))) }}
                            {{ input((array('title'=>'Page Slug (english)','name'=>'slug_en','is_required'=>true,'value'=>$info->slug_en))) }}

                            {{ textarea(array('title'=>'Page Excerpt (arabic)','name'=>'excerpt_ar','is_required'=>true,'value'=>$info->excerpt->value_ar)) }}
                            {{ textarea(array('title'=>'Page Excerpt (english)','name'=>'excerpt_en','is_required'=>true,'value'=>$info->excerpt->value_en)) }}

                            {{ editor(array('title'=>'Page Content (arabic)','name'=>'content_ar','class'=>'content','value'=>$info->content->value_ar)) }}
                            {{ editor(array('title'=>'Page Content (english)','name'=>'content_en','class'=>'content','value'=>$info->content->value_en)) }}
                            @else
                                {{ input((array('title'=>'عنوان الصفحة (عربي)','name'=>'title_ar','is_required'=>true,'value'=>$info->title_ar))) }}
                                {{ input((array('title'=>'عنوان الصفحة (انجليزي)','name'=>'title_en','is_required'=>true,'value'=>$info->title_en))) }}

                                {{ input((array('title'=>'عنوان الصفحة (عربي)','name'=>'slug_ar','is_required'=>true,'value'=>$info->slug_ar))) }}
                                {{ input((array('title'=>'عنوان الصفحة (انجليزي)','name'=>'slug_en','is_required'=>true,'value'=>$info->slug_en))) }}

                                {{ textarea(array('title'=>'Page Excerpt (عربي)','name'=>'excerpt_ar','is_required'=>true,'value'=>$info->excerpt->value_ar)) }}
                                {{ textarea(array('title'=>'Page Excerpt (انجليزي)','name'=>'excerpt_en','is_required'=>true,'value'=>$info->excerpt->value_en)) }}

                                {{ editor(array('title'=>'محتوي الصفحة (عربي)','name'=>'content_ar','class'=>'content','value'=>$info->content->value_ar)) }}
                                {{ editor(array('title'=>'محتوي الصفحة (انجليزي)','name'=>'content_en','class'=>'content','value'=>$info->content->value_en)) }}
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
