<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ArticleForm extends Component
{
    #[Validate([
        'title' => 'required|min:5',
    ], message: [
        'required' => 'manca il titolo',
        'min' => 'e troppo corto',
    ])] 
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required')]
    public $description;
    // wire:model serve per comunicare con l'attributo

    public function save(){
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-form');
    }
}
