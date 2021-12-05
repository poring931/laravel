@extends('layouts.app')

@section('title-block') Все сообщения @endsection

@section('content')

    <h1>{{ $data->name }}</h1>

        <div class="alert alert-info">
            <p>{{ $data->email }}</p>
            <p>{{ $data->created_at }}</p>
            <p>{{ $data->message }}</p>
            <a href="{{ route('contact-data-update', $data->id) }}"><button class="btn btn-warning">Изменить</button></a>
            <a href="{{ route('contact-data-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
        </div>

@endsection

