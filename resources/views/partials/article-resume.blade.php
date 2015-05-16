<article>
    <h3>
        <a href="{{ route('article', ['id' => $article->id]) }}">{{ $article->title }}</a>
    </h3>
    <p>{{ $article->body }}</p>
</article>