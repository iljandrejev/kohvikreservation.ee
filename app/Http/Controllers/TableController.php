<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\RestaurantTable;
use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\Console\Helper\Table;

class TableController extends Controller
{
    public function restaurantTables($id){
        $cafe = Restaurant::with('tables')->find($id);

        if(empty($cafe)) return response('Not valid id',404);

        return view('restaurant/tables/restaurant_tables',compact('cafe'));
        //return $cafes;
    }
    
    public function addTable(Request $request, Restaurant $restaurant){

        $table = new RestaurantTable;
        $table->number = $request->number;
        $table->max_seats = $request->seats_number;
        $table->avaible = $request->avaible;
        $table->restaurant_id = $restaurant->id;
        $table->comment = $request->comment;

        $restaurant->tables()->save($table);




        return back();
    }
}
