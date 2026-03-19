<div>

<div>
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 col md-6">
             @if (session('message'))
              <div class="alert alert-success">
                {{ session('message') }}
              </div>
              @endif
                <form
                  class="shadow p-5 rounded-2 bg-secondary" enctype="multipart/form-data"
                  wire:submit.prevent="updateArticle">
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input wire:model="name" type="text" class="form-control" id="name">
                <div class="text-warning">@error('name') {{ $message }} @enderror</div>
              </div>
              <div class="mb-3">
                <label for="body" class="form-label">Descrizione</label>
                <textarea wire:model="body" name="body" class="form-control" cols="30" row="10" id="body"></textarea>
                <div class="text-warning">@error('body') {{ $message }} @enderror</div>
              </div>
              <div class="mb-3">
                @if ($article->img)
                  <p class="h5">Vecchia immagine:</p>
                  <img src="{{ Storage::url($article->img) }}" alt="immagine di {{ $article->name }}">
                @else
                  <p class="text-center fw-bold fst-italic">L'articolo non ha immagini associate</p>
                @endif
              </div>

              <div class="mb-3">
                <label for="img" class="form-label">Inserisci un immagine</label>
               <input type="file"wire:model="img" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Crea Articolo</button>
            </form>
        </div>
    </div>
</div>
</div>

</div>
