<?php

namespace Ue\Http\Controllers;

use UeDehua\MongoDB\Facades\Mongo;
use Ue\Http\Controllers\Controller;
use Ue\Http\Requests;
use ODM;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        echo ODM::flush();
    }
}
