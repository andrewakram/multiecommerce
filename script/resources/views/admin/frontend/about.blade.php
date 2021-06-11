@extends('admin.frontend.app')
@section('append')
<form method="post" action="{{ route('admin.appearance.update',$type) }}" class="basicform" enctype="multipart/form-data">
	@csrf
	@method('PUT')

	<div class="form-group">
		<label>{{ __('Title') }} ({{ __('Arabic') }})</label>
		<input type="text" required class="form-control" name="title_ar" value="{{ json_decode($info->title,true)["ar"] ?? '' }}">
	</div>
    <div class="form-group">
        <label>{{ __('Title') }} ({{ __('English') }})</label>
        <input type="text" required class="form-control" name="title_en" value="{{ json_decode($info->title,true)["en"] ?? '' }}">
    </div>

    <div class="form-group">
        <label>{{ __('Enter') }} <a href="https://icofont.com/icons" target="_blank">icofont</a> {{ __('class name') }}</label>
        <input type="text" value="{{ $info->preview ?? '' }}"  name="icon_name" required="" placeholder="Enter icofont class name" value="" class="form-control">
    </div>
    <div class="form-group">
        <label>{{ __('Area Content') }} ({{ __('Arabic') }})</label>
        <textarea class="form-control" name="description_ar">{{ json_decode($info->description,true)["ar"] ?? '' }}</textarea>
    </div>
    <div class="form-group">
        <label>{{ __('Area Content') }} ({{ __('English') }})</label>
        <textarea class="form-control" name="description_en">{{ json_decode($info->description,true)["en"] ?? '' }}</textarea>
    </div>
    <div class="form-group">
        <label>{{ __('Button Link') }}</label>
        <input type="text"  class="form-control" name="btn_link" value="{{ $info->btn_link ?? '' }}">
    </div>
    <div class="form-group">
        <label>{{ __('Button Text') }} ({{ __('Arabic') }})</label>
        <input type="text"  class="form-control" name="btn_text_ar" value="{{ json_decode($info->btn_text,true)["ar"] ?? '' }}">
    </div>
    <div class="form-group">
        <label>{{ __('Button Text') }} ({{ __('English') }})</label>
        <input type="text"  class="form-control" name="btn_text_en" value="{{ json_decode($info->btn_text,true)["en"] ?? '' }}">
    </div>

	<div class="form-group">
		<button class="btn btn-primary basicbtn" type="submit">{{ __('Save Changes') }}</button>
	</div>
	@endsection
	@push('js')
</form>
<script src="{{ asset('assets/js/form.js?v=1.0') }}"></script>

@endpush
