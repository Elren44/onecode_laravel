<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $post = (object) [
            'id' => '123',
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => "Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Placeat, quibusdam!",
            'category_id' => 1
        ];

        $posts = array_fill(0, 10, $post);

        $posts = array_filter($posts, function ($post) use ($search, $category_id) {

            if ($search && !str_contains(strtolower($post->title), strtolower($search))) {

                return false;
            }
            if ($category_id && $post->category_id != $category_id) {
                return false;
            }

            return true;
        });

        $categories = [null => __('Все категории'), '1' => __('Первая'), '2' => __('Вторая')];

        return view('blog.index', compact('posts', 'categories'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = (object) [
            'id' => '123',
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => "Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Placeat, quibusdam!",
        ];
        return view('blog.show', compact('post'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Add like to specified post
     */
    public function like(Request $request, $post)
    {
        //
    }
}
