<?php

namespace Fhsinchy\Inspire\Controllers;


use Illuminate\Http\Request;
use Fhsinchy\Inspire\Inspire;


class InspirationController
{
    protected $ins = "";

    public function __construct(Inspire $inspire)
    {
        $this->ins = $inspire;
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quote = $this->ins->justDoIt();

        return view('inspire::index', compact('quote'));
    }

    
}
