<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

use function PHPSTORM_META\map;

class TestController extends Controller
{
    public function index()
    {
        $values = Test::all();

        //dd($values);

        return view('tests.test', compact('values'));
    }
}
