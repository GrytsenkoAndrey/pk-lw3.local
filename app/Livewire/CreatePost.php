<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePost extends Component
{
    #[Validate('required|min:5|max:255')]
    public string $title = '';

    #[Validate('required|min:5')]
    public string $body = '';

    public function render(): View
    {
        return view('livewire.create-post');
    }

    public function save(): void
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
    }
}
