@extends('layouts.app')

@section('title-block') заголовок страницы @endsection

@section('content')
    <h1>Главная страница</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aliquam dolorem quis porro debitis eum fugiat nostrum dolore ullam itaque, ducimus ipsum eius repellat. Dolorum maiores perspiciatis unde dolor odio.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aliquam dolorem quis porro debitis eum fugiat nostrum dolore ullam itaque, ducimus ipsum eius repellat. Dolorum maiores perspiciatis unde dolor odio.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aliquam dolorem quis porro debitis eum fugiat nostrum dolore ullam itaque, ducimus ipsum eius repellat. Dolorum maiores perspiciatis unde dolor odio.
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст только на главной странице</p>
@endsection