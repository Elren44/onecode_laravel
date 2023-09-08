<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "create";
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
        dump("show $post");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        dump("edit $post");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $post)
    {
        dump("update $post");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $post)
    {
        dump("destroy $post");
    }
}
