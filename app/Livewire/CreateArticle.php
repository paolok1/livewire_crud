<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateArticle extends Component
{
    use WithFileUploads;
    #[Validate('required', message: 'Inserire un nome per il prodotto.')]

    public $name;
    #[Validate('min:5', message: 'Il testo è troppo breve, inserisci almeno 5 parole.')]
    public $body;
    public $img;
    public function store()
    {
        if($this->img){
            $this->validate(['img' => 'image']);
        }else{
            $this->validate();
            }


        Article::create([
            'name'=>$this->name,
            'body'=>$this->body,
            'img'=> !$this->img ? null : $this->img->store('img', 'public')
        ]);

        $this->reset();

       session()->flash('message', 'Articolo inserito correttamente.'); 
 
       
    }

    protected function restore(){
            $this->name ="";
            $this->body ="";
            $this->img="";
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
