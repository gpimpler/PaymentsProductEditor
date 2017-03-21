<?php

namespace App\Http\Controllers;

use App\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function styles()
    {
        return Style::get();
    }

    public function style($style)
    {
        return Style::where('style', $style)->firstOrFail();
    }
}
