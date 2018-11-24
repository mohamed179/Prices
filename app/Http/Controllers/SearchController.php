<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class SearchController extends Controller
{
    /**
     * Searching for items, categories or prices
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Request $request) {
        $query = $request->get('query');
        $type = $request->get('type');

        if ($type == 'items') {
            $items = Item::where('name', 'LIKE', '%' . $query . '%' )->get();
            return view('search.items')->with([
                "query" => $query,
                "items" => $items
            ]);
        } else if ($type == 'categories') {
            $categories = Category::where('name', 'LIKE', '%' . $query . '%' )->get();;
            return view('search.categories')->with([
                "query" => $query,
                "categories" => $categories
            ]);
        } else if ($type == 'prices') {
            $items = Item::where('price', $query)->get();
            return view('search.prices')->with([
                "query" => $query,
                "items" => $items
            ]);
        } else {
            return redirect('/');
        }
    }
}
