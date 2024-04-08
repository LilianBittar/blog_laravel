<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{
  
    public function render(): View|Closure|string
    {
        return view('components.category-dropdown' , [
            'categories' => \App\Models\Category::all(),
            'currentCategory' => \App\Models\Category::firstWhere('slug', request('category'))
        ]);
    }
}
