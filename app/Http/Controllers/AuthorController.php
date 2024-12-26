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
        return Inertia::render('Authors/Index', [
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
        $request->validate([
            'name' => 'required|max:80',
            'last_name' => 'required|max:80',
            'country_id' => 'required|numeric',
        ]);
        $author = new Author($request->input());
        $author->save();
        return redirect('authors');
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
        $request->validate([
            'name' => 'required|max:80',
            'last_name' => 'required|max:80',
            'country_id' => 'required|numeric',
        ]);
        $author->update($request->input());
        return redirect('authors');
    }

    /**
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect('authors');
    }
}
