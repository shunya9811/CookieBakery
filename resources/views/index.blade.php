@extends('layouts.app')

@section('title','Home')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @include('layouts.home')
    @include('layouts.promotion')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection