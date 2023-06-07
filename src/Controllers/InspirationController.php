<?php

namespace Sagni\Inspire\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sagni\Inspire\Inspire;


class InspirationController extends Controller
{
  private $inspire;
  
  public function __construct(Inspire $inspire){
     
     $this->inspire = $inspire;
  }
    
    public function __invoke(Request $request)
    {
         $quote = $this->inspire->justDoIt();
         
         return view('inspire::index', compact('quote'));

    }
}
