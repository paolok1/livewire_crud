
<div>
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 col md-6">

               @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif 

              @if (session('message'))
              <div class="alert alert-success">
                {{ session('message') }}
              </div>
              @endif
            <form class="mt-5" enctype="multipart/form-data"
            class="shadow p-5 rounded-2 bg-secondary"
            wire:submit.prevent="store">
                @csrf
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
                    <label for="img">Inserisci un immagine:</label>
                    <input type="file" wire:model="img" class="form-control">
                    {{-- Anteprima immagine --}}
                    @if ($img)
                        <div class="mt-2">
                            <span>Anteprima caricamento:</span>
                            <img src="{{ $img->temporaryUrl() }}" style="width: 100px;" class="d-block img-thumbnail">
                        </div>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-primary">Crea Articolo</button>
            </form>
        </div>
    </div>
</div>
</div>

