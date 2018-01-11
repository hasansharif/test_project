<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;

class ProfileComposer
{
  
    public function compose(View $view)
    {
        $view->with('test', 'hello buddy');
    }
}