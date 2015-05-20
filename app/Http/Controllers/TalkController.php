<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Talk;
use Illuminate\Http\Request;

class TalkController extends Controller {

    public function index()
    {
        $talks = Talk::all();

        return response()->json($talks);
    }

}
