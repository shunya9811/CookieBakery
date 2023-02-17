@extends('layouts.app')

@section('title','Menu')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @include('layouts.menu')
    @include('layouts.promotion')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection