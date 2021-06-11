@extends('frontend.bigbag.account.layout.app')
@section('user_content')
  <p>{{ __('Hello') }} <strong>{{ Auth::user()->name }} (not <strong>{{ Auth::user()->name  }}</strong>?
  <a href="{{ url('/ogout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>)</p>
  
  <p>{{ __('From your account dashboard you can view your') }} <a href="{{ url('/user/orders') }}">{{ __('recent orders') }}</a> and <a href="{{ url('/user/settings') }}">{{ __('edit your password and account details') }} </a>.</p>
@endsection