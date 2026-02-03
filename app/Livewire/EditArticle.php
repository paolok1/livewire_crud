<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class EditArticle extends Component
{

    #[Validate('required', message: 'Inserire un nome per il prodotto.')]

    public $name;
    #[Validate('min:5', message: 'Il testo è troppo breve, inserisci almeno 5 parole.')]
    public $body;

        public $article;

            public function mount()
    {
        $this->name = $this->article->name;
 
        $this->body = $this->article->body;
    }

        public function updateArticle()
    {
        $this->validate();

        $this->article->update(
            [ 'name' => $this->name, 
              'body' => $this->body,
            ]);

        $this->reset(['name', 'body']);


       session()->flash('message', 'Articolo aggiornato correttamente.'); 
 
       
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
