<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;
use Faker\Factory;
use Badcow\LoremIpsum;

class HomeController extends Controller
{
    public $restful = true;

    public function getHome()
    {

        return view('home');


    }
    public function getUser()
    {

        return view('layout');

    }


    public function postUser(Request $request)
    {
        $this->validate($request, [
            'numUser'=> 'required|integer|min:1|max:3'
        ]);

        $faker = Factory::create();
        $number = $request->input('numUser');

        // $faker->name;
        // $faker->address;
        //$faker->phoneNumber;
        // $faker->email;
       // if (!isset($users))

        for($i=0; $i< $number; $i++) {
            $users = array('name' => $faker->name, 'address' => $faker->address, 'phoneNumber' => $faker->phoneNumber, 'email' => $faker->email);

            //$lessons = ['my first', 'my second', 'my third'];


        }
            return view('layout', compact('users'));
    }


}