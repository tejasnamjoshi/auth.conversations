@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
        @forelse ($conversations as $conversation)
        <li>
            <a href="/conversations/{{ $conversation->id }}">
                {{ $conversation->title }}
            </a>
        </li>
        @empty
        <li> No Conversations found </li>
        @endforelse
    </ul>
</div>
@endsection