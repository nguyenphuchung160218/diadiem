<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Response;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function json()
    {	
    	$a=file_get_contents('http://www.diadiemtaynguyen.cf/json');
    	$json = json_encode(file_get_contents('http://www.diadiemtaynguyen.cf/json'), true);
		return ($a);
    }
}
