<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class TableArticles extends Component
{

    public function destroy(Article $article){
        $article->delete();
    }

    public function render()
    {
        $articles = Article::all();
        return view('livewire.table-articles', compact('articles'));
    }
}
