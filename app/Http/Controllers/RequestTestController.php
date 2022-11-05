<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestTestController extends Controller
{
    public function testRequset(Request $request)
    {
        $firstName = $request->input('first_name', 'No name');
        $lastName = $request->input('last_name', 'No name');

        echo $firstName . ' ' . $lastName;
    }
}
