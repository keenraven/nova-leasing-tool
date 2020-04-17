<?php

namespace Variantgroup\NovaLeaseTool;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaLeaseTool extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     */
    public function boot(): void
    {
        Nova::script('nova-leasing-tool', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-leasing-tool', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-leasing-tool::navigation');
    }
}
