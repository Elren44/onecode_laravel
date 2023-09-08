<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Route::currentRouteName();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Route::currentRouteName();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dump($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        dump(Route::currentRouteName()." $post");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        dump(Route::currentRouteName()." $post");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $post)
    {
        dump(Route::currentRouteName()." $post");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $post)
    {
        dump(Route::currentRouteName()." $post");
    }
}
