@extends('layouts.app')

@section('title','Contact')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @include('layouts.contact')
    @include('layouts.location')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection