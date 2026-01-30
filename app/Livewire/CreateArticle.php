<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required', message: 'Inserire un nome per il prodotto.')]

    public $name;
    #[Validate('min:5', message: 'Il testo è troppo breve, inserisci almeno 5 parole.')]
    public $body;
    
    public function store()
    {
        $this->validate();

        Article::create([
            'name'=>$this->name,
            'body'=>$this->body,
        ]);

        $this->restore();

       session()->flash('message', 'Articolo inserito correttamente.'); 
 
       
    }

    protected function restore(){
            $this->name ="";
            $this->body ="";
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
