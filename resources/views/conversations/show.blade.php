@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/conversations">Back</a>
    <hr>

    <h1>{{ $conversation->title }}</h1>
    <p class="text-muted"> Posted by {{ $conversation->user->name }}</p>

    <div class="pt-4">
        {{ $conversation->body }}
    </div>

    <hr>
    @include('conversations.replies')
</div>
@endsection