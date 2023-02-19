<?php
namespace Fhsinchy\Inspire\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Fhsinchy\Inspire\Inspire;

class InspirationController extends Controller
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}