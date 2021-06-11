@extends('admin.frontend.app')
@section('append')
<form method="post" action="{{ route('admin.appearance.update','header') }}" class="basicform">
	@csrf
	@method('PUT')
	<div class="form-group">
		<label>{{ __('Header Small Title') }} ({{ __('Arabic') }})</label>
		<input type="text" name="title_ar"  class="form-control" required="" value="{{ json_decode($info->title,true)["ar"] ?? '' }}">
	</div>
    <div class="form-group">
        <label>{{ __('Header Small Title') }} ({{ __('English') }})</label>
        <input type="text" name="title_en"  class="form-control" required="" value="{{ json_decode($info->title,true)["en"] ?? '' }}">
    </div>

	<div class="form-group">
		<label>{{ __('Header Highlight Title') }} ({{ __('Arabic') }})</label>
		<input type="text" name="highlight_title_ar"  class="form-control" required="" value="{{ json_decode($info->highlight_title,true)["ar"] ?? '' }}">
	</div>
    <div class="form-group">
        <label>{{ __('Header Highlight Title') }} ({{ __('English') }})</label>
        <input type="text" name="highlight_title_en"  class="form-control" required="" value="{{ json_decode($info->highlight_title,true)["en"] ?? '' }}">
    </div>

	<div class="form-group">
		<label>{{ __('Header Description') }} ({{ __('Arabic') }})</label>
		<textarea class="form-control" name="description_ar">{{ json_decode($info->description,true)["ar"] ?? '' }}</textarea>
	</div>
    <div class="form-group">
        <label>{{ __('Header Description') }} ({{ __('English') }})</label>
        <textarea class="form-control" name="description_en">{{ json_decode($info->description,true)["en"] ?? '' }}</textarea>
    </div>

	<div class="form-group">
		<label>{{ __('Header Image') }}</label>
		<input type="file" name="file" value="" class="form-control" accept="image/*">
	</div>
	<div class="form-group">
		<button class="btn btn-primary basicbtn" type="submit">{{ __('Save Changes') }}</button>
	</div>
</form>
@endsection
@push('js')
<script src="{{ asset('assets/js/form.js') }}"></script>
@endpush
