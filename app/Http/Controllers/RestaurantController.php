<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class RestaurantController extends Controller
{
    public function apiRestaurants($key){

     //   if($key == "laravel_api_key"){
            $cafes = Restaurant::with('reservations','tables')->get();

           return $cafes;
      //  }else{
        //    response()->view('errors.503', [], 503);
       // }


    }

    public function restaurants(){
        $restaurants = Restaurant::with('reservations')->get();


        if(\Auth::guest()){
            return view('restaurant.restaurants_guests',compact('restaurants'));
        }else{
            return view('restaurant.restaurants',compact('restaurants'));
        }

    }

    public function guest_restaurants(){
        $restaurants = Restaurant::with('reservations')->get();

        return view('restaurant.restaurants_guests',compact('restaurants'));
    }

    public function addRestaurant(Request $request){

       $this->validate($request,[
            'name' => 'required|min:3|max:30',
            'aadress' => 'required|min:5|max:100',
            'description' => 'required'
        ]);

        $cafe = new Restaurant();
        $cafe->name = $request->name;
        $cafe->aadress = $request->aadress;
        $cafe->description = $request->description;
        $cafe->save();

        return back();
    }
}
