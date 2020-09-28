<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Datatable extends Component
{
    public $model;

    public function mount($model)
    {
        $this->model = $model;
    }

    public function builder()
    {
        return $this->model::query();
    }

    public function records()
    {
        return $this->builder()->get();
    }
    
    public function render()
    {
        return view('livewire.datatable');
    }
}
