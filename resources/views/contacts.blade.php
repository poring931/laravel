@extends('layouts.app')

@section('title-block') заголовок страницы @endsection

@section('content')
    <h1>Страница контактов</h1>


    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="phone">Номер телефона</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="message">Сообщение</label>
            <textarea type="text" name="message" id="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-2">Отправить</button>
    </form>
@endsection

@section('aside')
    @parent
    <p>контакты</p>
@endsection