<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    
    public array $tableData;
    public string $type;

    public function __construct(array $tableData, string $type)
    {
        $this->tableData = $tableData;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
