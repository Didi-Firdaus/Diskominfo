@extends('web.main_layout')

@section('title', 'Beranda')

@section('content')
    @include('web.pages.beranda.sambutan')
    @include('web.pages.beranda.card')
@endsection
