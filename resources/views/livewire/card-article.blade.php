<div>
<div class="container mt-5">
    <div class="row justify-content-center">
      @foreach ($articles as $article )
        <div class="col-12 col-md-4">
            <div class="mt-5 card text-center bg-warning" style="width: 18rem;">
              <img src="{{ !$article->img ? 'https://picsum.photos/200/300' : Storage::url($article->img) }}"class="card-img-top cardImg" alt="immagine dell'articolo {{ $article->name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $article->name }}</h5>
                <p class="card-text">{{$article->body}}</p>
                <a href="{{route('articles.index')}}" class="card-link">Torna indietro</a>
              </div>
            </div>
        </div>

      @endforeach  
    </div>
</div>
</div>
