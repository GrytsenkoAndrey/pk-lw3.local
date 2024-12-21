<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class CreatePost extends Component
{
    public string $title = '';

    public string $body = '';

    public function render(): View
    {
        return view('livewire.create-post');
    }

    public function save(): void
    {
        dd('save');
    }
}
