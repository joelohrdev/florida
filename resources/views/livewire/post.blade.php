<div wire:init="loadPosts">
    @foreach ($posts as $post)
        <div class="card">
            <img class="responsive card-img-top" src="https://res.cloudinary.com/jldev/image/upload/{{ $post->image }}" alt="">
            <div class="card-header">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="text-grey">{{ \Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}</p>
            </div>
            @if(!$post->body == '')
            <div class="card-content collapse show" aria-expanded="true">
                <div class="card-body">
                    <p class="card-text">{!! $post->body !!}</p>
                </div>
            </div>
                @endif
        </div>
    @endforeach
</div>
