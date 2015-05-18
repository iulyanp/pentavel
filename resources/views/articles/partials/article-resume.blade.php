<div class="post-preview">
    <a href="{{ route('articles.show', ['id' => $article->id]) }}">
        <h2 class="post-title">
             {{ $article->title }}
        </h2>
        <h3 class="post-subtitle">
             {!! $article->excerpt !!}
        </h3>
    </a>
    <p class="post-meta">Posted by {{ $article->user->username }}, {{ $article->published_at->diffForHumans() }}</p>
</div>
<hr>