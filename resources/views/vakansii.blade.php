@extends('layouts.app')

@section('title-block') заголовок страницы @endsection

@section('content')
    <h1>Главная страница</h1>
@endsection

@section('aside')
    @parent
    <p>вакансии</p>
@endsection