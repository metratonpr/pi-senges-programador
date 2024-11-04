<!-- Breaking News Area -->
<div class="col-12 col-md-6">
    <div class="breaking-news-area">
        <h5 class="breaking-news-title">Últimas Notícias</h5>
        <div id="breakingNewsTicker" class="ticker">
            <ul>
                @foreach ($ultimasNoticias as $ultima)
                    <li>
                        <a href="#">{{ $ultima->titulo }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
