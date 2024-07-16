<?php

namespace App\View\Components\User\NewCase;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class painMedications extends Component
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
        return view('components.user.new-case.pain-medications')->with([
            'medications' => [
                "Acetaminophen 1000 mg PO",
                "Acetaminophen 1000 mg IV",
                "Celebrex 200 mg PO",
                "Celebrex 400 mg PO"
            ],
        ]);
    }
}
