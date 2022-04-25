<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public string $themeColor = '';

    /**
     * Create a new component instance.
     */
    public function __construct(string $themeColor = '')
    {
        $this->themeColor = $themeColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layout.app');
    }
}
