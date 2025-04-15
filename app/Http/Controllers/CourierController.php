<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Couriers;

class CourierController extends Controller
{
    public function index(Request $request)
	{
		$title = "Courier Index Page";
		if ($request->sort_by) {
			$sort_by = $request->sort_by;
		} else {
			$sort_by = 'name'; // default sort
		}
		if ($request->level) {
			$levels = explode(',', $request->level);
			$couriers = Couriers::where('name', 'like', '%'.str_replace(' ', '%', $request->search).'%')->whereIn('level',$levels)->orderBy($sort_by,'ASC')->paginate(3)->appends(request()->query());
		} else {
			$couriers = Couriers::where('name', 'like', '%'.str_replace(' ', '%', $request->search).'%')->orderBy($sort_by,'ASC')->paginate(3)->appends(request()->query());
		}
		return view('couriers.index', ["title"=>$title,"sort_by"=>$sort_by,"search"=>$request->search,"level"=>$request->level,"couriers"=>$couriers]);
	}
}
