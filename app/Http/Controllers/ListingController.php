<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request) {

        $query = Listing::orderByDesc('created_at');

        // filter by category
        if($request->category) {
            $query->where('category_id',$request->category);
        }
        
        return $query->paginate(12)->withQueryString();

         
    }
}
