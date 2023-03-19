@extends('service_fa.layouts.html')

@section('content')
    {{-- TOOLS --}}
    @include('service_fa.components.header')
    {{-- NAVBAR --}}
    @include('service_fa.components.navbar')

    {{-- HOME PAGE --}}
    @include('service_fa.components.home')
@endsection
