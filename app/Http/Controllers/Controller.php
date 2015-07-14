<?php

namespace Ue\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    /**
     *
     * @var \Doctrine\ODM\MongoDB\DocumentManager
     */
    protected $dm;

    use DispatchesJobs, ValidatesRequests;
    
    
}
