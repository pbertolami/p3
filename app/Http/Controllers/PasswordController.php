<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function getPassword()
    {
        return view('home');
    }


    public function postPassword(Request $request)
    {

        //validate
        $this->validate($request, [
            'numWords' => 'required|integer|min:1|max:20'
        ]);


        $numWords = $request->input('numWords');

        //$passphrase = ""; //an empty variable to hold the passphrase
        $words = file_get_contents(base_path() . '/database/verbs.txt');  //get the contents of verb text file and put into variable


        $wordsArray = explode("\n", $words);  //create array of $words deliminated using each new line as deliminator


            $countWords = count($wordsArray);
            $popWords = $countWords - $numWords;
            for ($i = 0; $i < $popWords; $i++) {

                $randWords = array_pop($wordsArray);
            }


        return view('home', compact('wordsArray', 'numWords'));

    }

}
