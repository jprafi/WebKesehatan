<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Models\Obat; // Import the model for your products

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query'); // Get the search query from the form

        // If there is a query, search in the Obat model
        if ($query) {
            $obats = Medicine::where('name', 'like', "%{$query}%") // Adjust the column name as needed
                ->orWhere('description', 'like', "%{$query}%") // Optionally search in the description or other columns
                ->get();
        } else {
            $obats = medicine::all(); // If no query is entered, return all products
        }

        // Return the search results to the view
        return view('search.results', compact('obats', 'query'));
    }
}