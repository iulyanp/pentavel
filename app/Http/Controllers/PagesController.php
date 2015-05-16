<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        $name = 'Enzo';

        # return view('pages.about')->with(['name' => $name]);
        # return view('pages.about', ['name' => $name]);
        # return view('pages.about')->with('name', $name);
        return view('pages.about', compact('name'));
    }

}
