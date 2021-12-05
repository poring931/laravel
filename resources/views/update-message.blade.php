@extends('layouts.app')

@section('title-block') Обновление записи@endsection

@section('content')
    <h1>Обновление записи</h1>


    <form action="{{ route('contact-data-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input value="{{ $data->name }}" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="email">Email</label>
            <input value="{{ $data->email }}" type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="phone">Номер телефона</label>
            <input value="{{ $data->phone }}" type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="message">Сообщение</label>
            <textarea  type="text" name="message" id="message" class="form-control">{{ $data->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-success mt-2">Обновить</button>
    </form>
@endsection

