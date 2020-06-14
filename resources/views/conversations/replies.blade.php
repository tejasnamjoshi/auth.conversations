@forelse ($conversation->replies as $reply)
<div>
    <header class="d-flex justify-content-between">
        <p class="m-0">
            <strong>
                {{ $reply->user->name }} said...
            </strong>
        </p>
        @if ($reply->isBest())
        <span class="text-success">Best reply!!</span>
        @endif
    </header>

    {{ $reply->body }}

    @can('update', $conversation)
    <form action="/best-replies/{{ $reply->id }}" method="POST">
        @csrf
        <button type="submit" class="btn text-muted p-0">Best Reply</button>
    </form>
    @endcan
    <hr>
</div>
@empty
<p>No replies</p>
@endforelse