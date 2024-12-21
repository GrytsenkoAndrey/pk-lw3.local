<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required|min:5|max:255')]
    public string $title = '';

    #[Validate('required|min:5')]
    public string $body = '';
}
