<div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome Articolo</th>
                  <th scope="col">Descrizione</th>
                  <th scope="col">Gestisci</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($articles as $article )
                <tr>
                  <th scope="row">{{$article->id}}</th>
                  <td>{{$article->name}}</td>
                  <td>{{$article->body}}</td>
                  <td>
                    <a class="btn btn-warning" href="{{ route('articles.show', compact('article')) }}">Mostra</a>
                    <a class="btn btn-info" href="{{ route('articles.edit', compact('article')) }}">Modifica</a>
                    <button wire:click="destroy({{$article}})" class="btn btn-danger">Elimina</button>
                  </td>
                </tr>
                    
                @endforeach
              </tbody>
            </table>
            </div>

        </div>
    </div>
</div>
</div>

