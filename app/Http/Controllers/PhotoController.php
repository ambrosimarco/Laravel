<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();

        return view('photo.index', compact('photos'));
    }
}
