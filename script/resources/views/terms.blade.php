@extends('main.app')
@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        {{--          <span class="text-white">{{ __('terms') }}</span>--}}
                        <h1 class="text-capitalize mb-5 text-lg">{{ __('terms') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {!!  $termsValue->$locale !!}
                </div>
            </div>
        </div>
    </section>



@endsection
