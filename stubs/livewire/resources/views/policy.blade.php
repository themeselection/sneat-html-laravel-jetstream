@extends('layouts/blankLayout')

@section('title', 'Login')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-basic px-4">
  <div class="authentication-inner py-4">
    <!-- Logo -->
    <div class="app-brand justify-content-center mb-5">
      <a href="{{url('/')}}" class="app-brand-link gap-2">
        <span class="app-brand-logo demo">@include('_partials.macros',['width'=>25,'withbg' => "#696cff"])</span>
        <span class="app-brand-text demo text-body fw-bolder">{{ config('variables.templateName') }}</span>
      </a>
    </div>
    <!-- /Logo -->
    <div class="card">
      <div class="card-body">
        {!! $policy !!}
      </div>
    </div>
  </div>
</div>
@endsection
