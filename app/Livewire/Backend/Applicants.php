<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class Applicants extends Component
{
    public function render()
    {
        return view('livewire.backend.applicants')->extends('components.layouts.backend');
    }
}
