<?php

namespace App\View\Components\User\NewCase;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class antibiotics extends Component
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
        return view('components.user.new-case.antibiotics')->with([
            'antibiotics' => [
                "Cefazolin 2gm IV",
                "Cefazolin 3gm IV",
                "Cefazolin Weight Based Dosing (2g or 3g IV)",
                "Vancomycin 15mg/kg IV",
                "Vancomycin 15mg/kg IV If penicillin Allergic or MRSA+",
                "Clindamycin 600mg IV",
                "Clindamycin 900mg IV",
                "Clindamycin Weight Based Dosing (900mg or 1200mg IV)",
            ],
        ]);
    }
}
