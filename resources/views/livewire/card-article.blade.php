<div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card text-center bg-warning" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{ $article->name }}</h5>
                <p class="card-text">{{$article->body}}</p>
                <a href="{{route('articles.index')}}" class="card-link">Torna indietro</a>
              </div>
            </div>

        </div>
    </div>
</div>
</div>
