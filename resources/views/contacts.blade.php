@extends('layouts.app')

@section('title-block') заголовок страницы @endsection

@section('content')
    <h1>Страница контактов</h1>
@endsection

@section('aside')
    @parent
    <p>контакты</p>
@endsection