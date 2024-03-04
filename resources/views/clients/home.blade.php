@extends('layouts.client')
@section('title')
{{$title}}
@endsection

@section('content')
    <h1>TRANG CHU</h1>
    @datetime('2022-12-16 15:00 30')
    @include('clients.slide.content')
    @include('clients.contents.about')


@endsection

@section('css')
@endsection
@section('js')
@endsection
    
