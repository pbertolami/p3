<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;
use Badcow\LoremIpsum;


class IpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIpsum()
    {
        return view ('layout');
    }


    public function postIpsum(Request $request)
    {

        //dd($request->all());
        //if (!isset($numparagraphs)) {

        //validate
        $this->validate($request, [
            'numParagraphs' => 'required|integer|min:1|max:20'
        ]);
        //create generator
        $generator = new LoremIpsum\Generator();
        //pass number from form into variable $number
        $number = $request->input('numParagraphs');
        //pass the variable $number into the generator
        $paragraphs = $generator->getParagraphs($number);

        return view('layout', compact('paragraphs'));

    }


}