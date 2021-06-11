@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-9">
		<div class="card">
			<div class="card-body">
				<h4>{{ __('Add new Page') }}</h4>
				<form method="post" action="{{ route('admin.page.store') }}" >
					@csrf
					<div class="custom-form pt-20">
						@php

                            if(app()->getLocale() == 'ar'){

                            $arr['title']= 'عنوان الصفحة عربي';
                            $arr['id']= 'name_ar';
                            $arr['type']= 'text';
                            $arr['placeholder']= 'عنوان الصفحة عربي';
                            $arr['name']= 'title_ar';
                            $arr['is_required'] = true;

                            echo  input($arr);

                            $arr2['title']= 'عنوان الصفحة انجليزي';
                            $arr2['id']= 'name_en';
                            $arr2['type']= 'text';
                            $arr2['placeholder']= 'عنوان الصفحة انجليزي';
                            $arr2['name']= 'title_en';
                            $arr2['is_required'] = true;

                            echo  input( $arr2);



                            $arrn['title']= 'محتوي الصفحة عربي';
                            $arrn['name']= 'content_ar';
                            $arr['class']= 'content';
                            echo  editor($arrn);

                            $arrn2['title']= 'محتوي الصفحة انجليزي';
                            $arrn2['name']= 'content en';
                            $arr2['class']= 'content';
                            echo  editor($arrn2);


                            $arr['title']= 'Meta Description انجليزي';
                            $arr['id']= 'excerpt';
                            $arr['placeholder']= 'Meta description';
                            $arr['name']= 'excerpt_en';
                            $arr['is_required'] = true;

                            echo  textarea($arr);

                            $arr2['title']= 'Meta Description عربي';
                            $arr2['id']= 'excerpt';
                            $arr2['placeholder']= 'Meta description';
                            $arr2['name']= 'excerpt_ar';
                            $arr2['is_required'] = true;

                            echo  textarea($arr2);
                            }else{
                                $arr['title']= 'Page Title arabic';
                            $arr['id']= 'name_ar';
                            $arr['type']= 'text';
                            $arr['placeholder']= 'Page Title';
                            $arr['name']= 'title_ar';
                            $arr['is_required'] = true;

                            echo  input($arr);

                            $arr2['title']= 'Page Title english';
                            $arr2['id']= 'name_en';
                            $arr2['type']= 'text';
                            $arr2['placeholder']= 'Page Title';
                            $arr2['name']= 'title_en';
                            $arr2['is_required'] = true;

                            echo  input( $arr2);



                            $arrn['title']= 'Page Content arabic';
                            $arrn['name']= 'content_ar';
                            $arr['class']= 'content';
                            echo  editor($arrn);

                            $arrn2['title']= 'Page Content english';
                            $arrn2['name']= 'content en';
                            $arr2['class']= 'content';
                            echo  editor($arrn2);


                            $arr['title']= 'Meta Description arabic';
                            $arr['id']= 'excerpt';
                            $arr['placeholder']= 'Meta description';
                            $arr['name']= 'excerpt_en';
                            $arr['is_required'] = true;

                            echo  textarea($arr);

                            $arr2['title']= 'Meta Description english';
                            $arr2['id']= 'excerpt';
                            $arr2['placeholder']= 'Meta description';
                            $arr2['name']= 'excerpt_ar';
                            $arr2['is_required'] = true;

                            echo  textarea($arr2);
                            }

						@endphp

					</div>
				</div>
			</div>

		</div>
		<div class="col-lg-3">
			<div class="single-area">
				<div class="card">
					<div class="card-body">


						<div class="btn-publish">
							<button type="submit" class="btn btn-primary col-12"><i class="fa fa-save"></i> {{ __('Save') }}</button>
						</div>
					</div>
				</div>
			</div>
		<div class="single-area">
				<div class="card sub">
					<div class="card-body">
						<h5>{{ __('Status') }}</h5>
						<hr>
						<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status">
							<option value="1">{{ __('Published') }}</option>
							<option value="2">{{ __('Draft') }}</option>

						</select>
					</div>
				</div>
			</div>
		</div>



	<input type="hidden" name="type" value="1">
	<input type="hidden"  name="post_type" value="page">
</form>
@endsection
@push('js')
<script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/form.js?v=1.0') }}"></script>
@endpush
