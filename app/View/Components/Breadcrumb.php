<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    //свойство хранит массив хлебных крошек, который будет передан компоненту.
    public $breadcrumbs;

    public function __construct($breadcrumbs)
    {
        $this->breadcrumbs = $breadcrumbs;
    }

    //определяет, какой шаблон будет использоваться для отображения компонента
    public function render()
    {
        // dump($this->breadcrumbs);
        return view('components.breadcrumb', [
            'breadcrumbs' => $this->breadcrumbs,
        ]);
    }
}
