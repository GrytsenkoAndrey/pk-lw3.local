<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\View\View;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $form;

    public bool $success = false;

    public function render(): View
    {
        return view('livewire.create-post');
    }

    public function save(): void
    {
        $this->validate();

        Post::create([
            'title' => $this->form->title,
            'body' => $this->form->body,
        ]);

        $this->success = true;
        $this->reset(['form.title', 'form.body']);
    }
}
