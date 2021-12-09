<x-layout>
    

    <h2 class="title">
        みんなの卵かけごはん
    </h2>
    <ul>
        @forelse ($posts as $post)
            <div class="list">
                <div class="list-photo">
                    <li>
                        <img src="{{ asset('storage/abc/'.$post->image_file_name) }}" width="240">
                    </li>
                </div>
                <div class="list-article">
                    <li class="list-article-title">
                        {{ $post->title }}
                    </li>
                    <li class="list-article-body">
                        {!! nl2br(e($post->body)) !!}
                    </li>
                </div>
            </div>
                @empty
                    <li>No posts yet!</li>
        @endforelse
    </ul>
</x-layout>