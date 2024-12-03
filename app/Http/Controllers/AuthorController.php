<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Country;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        $authors = Author::with('country:id,country', 'books:title')->get();
        return Inertia::render('Authors/Index',[
            'authors' => $authors,
            'countries' => $countries
        ]);
    }

    /**
     */
    public function create()
    {
        //
    }

    /**
     */
    public function store(Request $request)
    {
        //
    }

    /**
     */
    public function show(Author $author)
    {
        //
    }

    /**
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     */
    public function destroy(Author $author)
    {
        //
    }
}
