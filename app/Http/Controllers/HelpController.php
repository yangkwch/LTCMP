<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelpController extends Controller
{
    /**
     * Show the application about page.
     *
     * @return \Illuminate\Http\Response
     */

    public function lonton()
    {
        return view('help.lonton');
    }

    public function ltcmp()
    {
        return view('help.ltcmp');
    }

    public function help()
    {
        return view('help.help');
    }
}
