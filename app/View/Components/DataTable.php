<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    public $data;
    public $columns;
    Public $name;
    Public $create;
    Public $route;

    public function __construct($data, $columns , $name , $create , $route)
    {
        $this->data = $data;
        $this->columns = $columns;
        $this->name = $name;
        $this->create = $create;
        $this->route = $route;
    }

    public function render()
    {
        return view('components.data-table');
    }
}
