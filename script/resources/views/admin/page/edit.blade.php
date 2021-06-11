@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-9">
		<div class="card">
			<div class="card-body">
				<h4>{{ __('Edit Page') }}</h4>
				<form method="post" action="{{ route('admin.page.update',$info->id) }}">
					@csrf
					@method('PUT')

					<div class="custom-form pt-20">

						@php
                            if(app()->getLocale() == 'ar'){

                            $arr['title']= 'عنوان الصفحة عربي';
                            $arr['id']= 'name';
                            $arr['type']= 'text';
                            $arr['placeholder']= 'عنوان الصفحة عربي';
                            $arr['name']= 'title_ar';
                            $arr['is_required'] = true;
                            $arr['value'] = $info->title_ar;

                            echo  input($arr);

                            $arr2['title']= 'عنوان الصفحة انجليزي';
                            $arr2['id']= 'name';
                            $arr2['type']= 'text';
                            $arr2['placeholder']= 'عنوان الصفحة انجليزي';
                            $arr2['name']= 'title_en';
                            $arr2['is_required'] = true;
                            $arr2['value'] = $info->title_en;

                            echo  input($arr2);




                            $arr['title']= 'محتوي الصفحة عربي';
                            $arr['name']= 'content_ar';
                            $arr['id']= 'content';
                            $arr['value'] = $info->content->value;

                            echo  editor($arr);

                            $arr2['title']= 'محتوي الصفحة انجليزي';
                            $arr2['name']= 'content_en';
                            $arr2['id']= 'content';
                            $arr2['value'] = $info->content->value;

                            echo  editor($arr2);


                            $arr['title']= 'Meta Description انجليزي';
                            $arr['id']= 'excerpt';
                            $arr['placeholder']= 'short description';
                            $arr['name']= 'excerpt_ar';
                            $arr['is_required'] = false;
                            $arr['value'] = $info->excerpt->value_en;

                            $arr['title']= 'Meta Description عربي';
                            $arr['id']= 'excerpt';
                            $arr['placeholder']= 'short description';
                            $arr['name']= 'excerpt_ar';
                            $arr['is_required'] = false;
                            $arr['value'] = $info->excerpt->value_ar;

                            echo  textarea($arr);

                            }else{

                            $arr['title']= 'Page Title arabic';
                            $arr['id']= 'name';
                            $arr['type']= 'text';
                            $arr['placeholder']= 'Page Title';
                            $arr['name']= 'title_ar';
                            $arr['is_required'] = true;
                            $arr['value'] = $info->title_ar;

                            echo  input($arr);

                            $arr2['title']= 'Page Title english';
                            $arr2['id']= 'name';
                            $arr2['type']= 'text';
                            $arr2['placeholder']= 'Page Title';
                            $arr2['name']= 'title_en';
                            $arr2['is_required'] = true;
                            $arr2['value'] = $info->title_en;

                            echo  input($arr2);




                            $arr['title']= 'Page Content arabic';
                            $arr['name']= 'content_ar';
                            $arr['id']= 'content';
                            $arr['value'] = $info->content->value_ar;

                            echo  editor($arr);

                            $arr2['title']= 'Page Content english';
                            $arr2['name']= 'content_en';
                            $arr2['id']= 'content';
                            $arr2['value'] = $info->content->value_en;

                            echo  editor($arr2);


                            $arr['title']= 'Meta Description arabic';
                            $arr['id']= 'excerpt';
                            $arr['placeholder']= 'short description';
                            $arr['name']= 'excerpt_ar';
                            $arr['is_required'] = false;
                            $arr['value'] = $info->excerpt->value_en;

                            $arr['title']= 'Meta Description english';
                            $arr['id']= 'excerpt';
                            $arr['placeholder']= 'short description';
                            $arr['name']= 'excerpt_ar';
                            $arr['is_required'] = false;
                            $arr['value'] = $info->excerpt->value_ar;
                            }


						@endphp


					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h4>{{ __('Search Engine Optimization') }}</h4>
					<div class="search-engine">
						<h6 class="pt-15 page-title-seo" id="seotitle">{{ $info->title }}</h6>
						<a href="#" class="text-success" id="seourl">{{ url('/').'/page/'.$info->slug }}</a>
						<p id="seodescription">{{ $info->excerpt->content }}</p>
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
							<option value="1" @if($info->status==1) selected="" @endif>{{ __('Published') }}</option>
							<option value="2" @if($info->status==2) selected="" @endif>{{ __('Draft') }}</option>

						</select>
					</div>
				</div>
			</div>
	</div>

</form>
@endsection

@push('js')
<script src="{{ asset('assets/js/form.js?v=1.0') }}"></script>
<script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
@endpush
