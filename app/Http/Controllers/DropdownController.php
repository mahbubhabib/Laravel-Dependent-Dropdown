<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\City;

class DropdownController extends Controller
{
    	public function index()
        {
            $countries = Country::all();
            
            return view('index',compact('countries'));
        }

        public function getStateList(Request $request)
        {
            $states = State::where("country_id",$request->country_id)->get();
            
            return response()->json($states);
        }

        public function getCityList(Request $request)
        {
            $cities = City::where("state_id",$request->state_id)->get();

            return response()->json($cities);
        }
}
