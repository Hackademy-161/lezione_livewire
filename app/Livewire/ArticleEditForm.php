<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEditForm extends Component
{

    public $title;
    public $subtitle;
    public $description;
    public $article;

    public function mount($articleId){
        $article = Article::find($articleId);
        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->description = $article->description;
        $this->article = $article;
    }

    public function updateArticle(){
        $this->article->update(
            [
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'description' => $this->description 
            ]
        );

        return redirect(route('article.index'));
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
