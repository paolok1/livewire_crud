<?php

namespace App\Livewire;

// use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArticle extends Component
{
    use WithFileUploads;
    #[Validate('required', message: 'Inserire un nome per il prodotto.')]

    public $name;
    #[Validate('min:5', message: 'Il testo è troppo breve, inserisci almeno 5 parole.')]
    public $body;

    public $article;
    public $img;
    public $old_img;


        
        public function updateArticle()
        {
            $this->validate();
            
            $this->article->update(
                [ 'name' => $this->name, 
                'body' => $this->body,
                ]);


                if ($this->img) {
                    $this->article->update([
                    'img'=>$this->img->store('public/img')
                    ]);

                if ($this->old_img) {
                    Storage::delete($this->old_img);
                }  
                $this->reset('img');  
                }
                return redirect()->route('welcome')->with('message', 'Articolo aggiornato');                $this->reset(['name', 'body']);
                
                
                session()->flash('message', 'Articolo aggiornato correttamente.'); 
                
                
        }

            public function mount()
        {
            $this->name = $this->article->name;
        
            $this->body = $this->article->body;
        }


    public function render()
    {
        return view('livewire.edit-article');
    }
}
