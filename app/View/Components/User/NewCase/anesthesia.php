<?php

namespace App\View\Components\user\NewCase;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class anesthesia extends Component
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
        return view('components.user.new-case.anesthesia')->with([
            'anesthesia' => [
                "General",
                "Total Intravenous Anesthesia (TIVA)",
                "Monitored Anesthesia Care (MAC)",
                "Defer to Anesthesia",
                "Transexamic Acid",
                "Regional Block Per Anesthesia",
                "Local Analgesia",
                "No Block"
            ],
        ]);
    }
}
