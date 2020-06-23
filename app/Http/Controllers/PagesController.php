<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Can create functions or methods in here
    public function index()
    {
        $title = "Welcome to Duc blog";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = "About";
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => "Services",
            'services' => ['Web Design', 'Game Developer', 'App Developer']
        );
        return view('pages.services')->with($data);
    }
}
