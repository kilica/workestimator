<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display the FAQ page.
     */
    public function index()
    {
        return view('faq');
    }

    /**
     * Display the second FAQ page (政策).
     */
    public function faq2()
    {
        return view('faq-2');
    }
}
