<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Postevent;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Postevent::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required',
            'location' => 'required',
            'category_id' => 'required',
        ]);

        $post = Postevent::create($request->all());
        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Postevent $post)
    {
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Postevent $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required',
            'location' => 'required',
            'category_id' => 'required',
        ]);

        $post->update($request->all());
        return response()->json($post, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(null, 204);
    }
}
