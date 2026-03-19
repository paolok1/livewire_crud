<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Article; // Assicurati di importare il modello Article

class CardArticle extends Component
{
    public $articles;

    public function mount()
    {
        // Recuperiamo tutti gli articoli dal database
        $this->articles = Article::all();
    }

    public function render()
    {
        return view('livewire.card-article');
    }
}
