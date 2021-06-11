@extends('layouts.app')
@push('style')
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
@endpush
@section('head')
@include('layouts.partials.headersection',['title'=> trans('admin')])
@endsection
@section('content')

<div class="row">
	<div class="col-lg-9">
		<div class="card">
			<div class="card-body">
				<h4>{{ __('Add Admin') }}</h4>
				<form method="post" action="{{ route('admin.users.store') }}" class="basicform_with_reload">
					@csrf
					<div class="pt-20">
						@php

                        if(app()->getLocale() == 'ar'){

                        $arr['title']= 'الاسم';
                           $arr['id']= 'name';
                           $arr['type']= 'text';
                           $arr['placeholder']= 'الاسم';
                           $arr['name']= 'name';
                           $arr['is_required'] = true;
                           echo  input($arr);

                           $arr['title']= 'البريد الالكتروني';
                           $arr['id']= 'email';
                           $arr['type']= 'email';
                           $arr['placeholder']= 'البريد الالكتروني';
                           $arr['name']= 'email';
                           $arr['is_required'] = true;
                           echo  input($arr);

                           $arr['title']= 'كلمة المرور';
                           $arr['id']= 'password';
                           $arr['type']= 'password';
                           $arr['placeholder']= 'كلمة المرور';
                           $arr['name']= 'password';
                           $arr['is_required'] = true;
                           echo  input($arr);

                           $arr['title']= 'تاكيد كلمة المرور';
                           $arr['id']= 'password_confirmation';
                           $arr['type']= 'password';
                           $arr['placeholder']= 'تاكيد كلمة المرور';
                           $arr['name']= 'password_confirmation';
                           $arr['is_required'] = true;
                           echo  input($arr);

                        }else{

                            $arr['title']= 'Name';
                           $arr['id']= 'name';
                           $arr['type']= 'text';
                           $arr['placeholder']= 'Enter Name';
                           $arr['name']= 'name';
                           $arr['is_required'] = true;
                           echo  input($arr);

                           $arr['title']= 'Email';
                           $arr['id']= 'email';
                           $arr['type']= 'email';
                           $arr['placeholder']= 'Enter Email';
                           $arr['name']= 'email';
                           $arr['is_required'] = true;
                           echo  input($arr);

                           $arr['title']= 'Password';
                           $arr['id']= 'password';
                           $arr['type']= 'password';
                           $arr['placeholder']= 'Enter password';
                           $arr['name']= 'password';
                           $arr['is_required'] = true;
                           echo  input($arr);

                           $arr['title']= 'Password';
                           $arr['id']= 'password_confirmation';
                           $arr['type']= 'password';
                           $arr['placeholder']= 'Confirm Password';
                           $arr['name']= 'password_confirmation';
                           $arr['is_required'] = true;
                           echo  input($arr);

                        }

						@endphp
                        @if(app()->getLocale() == "ar")
                        <div class="form-group">
                            <label >{{__('Assign Roles')}}</label>
                            <select required name="roles[]" id="roles" class="form-control select2" multiple>
                                @foreach ($roles as $role)
                                    <option value="{{ json_decode($role->name)->ar }}">{{ json_decode($role->name)->ar }}</option>
                                @endforeach
                            </select>
                        </div>
                        @else
                            <div class="form-group">
                                <label >{{__('Assign Roles')}}</label>
                                <select required name="roles[]" id="roles" class="form-control select2" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ json_decode($role->name)->en }}">{{ json_decode($role->name)->en }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

					</div>
				</div>
			</div>

		</div>
		<div class="col-lg-3">
			<div class="single-area">
				<div class="card">
					<div class="card-body">
						<h5>{{ __('Publish') }}</h5>
						<hr>
						<div class="btn-publish">
							<button type="submit" class="btn btn-primary col-12 basicbtn"><i class="fa fa-save"></i> {{ __('Save') }}</button>
						</div>
					</div>
				</div>
			</div>
	    </div>
</form>
@endsection
@push('js')
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/form.js') }}"></script>
@endpush
