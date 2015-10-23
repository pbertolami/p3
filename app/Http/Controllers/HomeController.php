<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;
use Faker\Factory;
use Badcow\LoremIpsum;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    public $restful = true;

    public function getHome()
    {

        return view('home');


    }
    public function getUser()
    {

        return view('home');

    }


    public function postUser(Request $request)
    {

        $this->validate($request, [
            'numUser'=> 'required|integer|min:1|max:3'
        ]);

        $faker = Factory::create();
        $number = $request->input('numUser');


        //$users=array();
        for($i=0; $i<$number; $i++) {

            $users[$i] = array('name' => $faker->name, 'address' => $faker->address, 'phoneNumber' => $faker->phoneNumber,);

        };

        return view('home', compact('users','number'));

    }


}