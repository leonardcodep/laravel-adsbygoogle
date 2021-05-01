<?php

namespace Leonardcodep\Adsbygoogle;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Html\HtmlBuilder
 */
class AdsbygoogleFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return AdsbygoogleBuilder::class; }

}
