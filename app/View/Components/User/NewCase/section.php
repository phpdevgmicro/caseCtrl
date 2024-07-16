<?php

namespace App\View\Components\User\NewCase;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class section extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {       
        return view('components.user.new-case.section')->with([
            'sections' => [
                ["id"=>"surgeon", "title"=>"Surgeon Information", "icon"=> '<i class="las la-user-md text-gray-400 fs-1"></i>'],
                ["id"=>"patient", "title"=>"Patient Information", "icon"=> '<i class="las la-user-circle text-gray-400 fs-1"></i>'],
                ["id"=>"scheduling", "title"=>"Scheduling Details", "icon"=> '<i class="las la-calendar text-gray-400 fs-1"></i>'],
                ["id"=>"surgical-case", "title"=>"Surgical Case Details", "icon"=> '<i class="las la-briefcase-medical text-gray-400 fs-1"></i>'],
                ["id"=>"case-preference", "title"=>"Case Preferences", "icon"=> '<i class="las la-clipboard-list text-gray-400 fs-1"></i>']

            ],
        ]);
    }
}
