@extends('layouts.app')

@section('title-block') Все сообщения @endsection

@section('content')

    <h1>Все сообщения</h1>

    @foreach ($data as $item)
        <div class="alert alert-info">
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->email }}</p>
            <p>{{ $item->created_at }}</p>
            <p>{{ $item->message }}</p>
            <a href="{{ route('contact-data-single', $item->id) }}"><button class="btn btn-warning">детальнее</button></a>
        </div>
    @endforeach

@endsection

