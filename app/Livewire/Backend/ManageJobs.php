<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class ManageJobs extends Component
{
    public function render()
    {
        return view('livewire.backend.manage-jobs')->extends('components.layouts.backend');
    }
}
