<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Schema;

class Datatable extends Component
{
    public $model;
    public $columns;

    public function mount($model)
    {
        $this->model = $model;
        $this->columns = $this->columns();
    }

    public function columns()
    {
        return Schema::getColumnListing($this->builder()->getQuery()->from);
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
