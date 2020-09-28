<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Schema;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $model;
    public $columns;
    public $paginate;
    public $exclude;

    public function mount($model, $exclude = '', $paginate = 25)
    {
        $this->model = $model;
        $this->exclude = explode(',', $exclude);
        $this->paginate = $paginate;
        $this->columns = $this->columns();
    }

    public function columns()
    {
        return collect(Schema::getColumnListing($this->builder()->getQuery()->from))
            ->reject(function($column) {
                return in_array($column, $this->exclude);
            })
            ->toArray();
    }

    public function builder()
    {
        return $this->model::query();
    }

    public function records()
    {
        return $this->builder()->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.datatable');
    }
}
