<?php

namespace App\Http\Controllers\Api;

use App\Quote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
{
    public function random(Quote $quote){
    	return Quote::all()->random(1);
    }
}
