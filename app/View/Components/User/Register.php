<?php

namespace App\View\Components\User;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Register extends Component
{
    public function __construct()
    {
        //
    }
    public function render(): View|Closure|string
    {
        return view('components.user.register');
    }
}
