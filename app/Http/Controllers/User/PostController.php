<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = (object)[
            'id' => '123',
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => "Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Placeat, quibusdam!",
        ];

        $posts = array_fill(0, 10, $post);
        return view('user.posts.index', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $validated = $request->validate([
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string', 'max:10000'],
        // ]);
        // $validated = validator($request->all(), [
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string', 'max:10000'],
        // ])->validate();
//        dd($endDate);
        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
            'published_at' => ['nullable', 'string', 'date', 'before:01.01.2038'],
            'published' => ['nullable', 'boolean'],
        ]);

        $post = Post::query()->firstOrCreate([
            'user_id' => User::query()->value('id'),
            'title' => $validated['title'],
            ],[
            'content' => $validated['content'],
            'published_at' => $validated['published_at'] ?? null,
            'published' => $validated['published'] ?? false,
        ]);

        dd($post);

        alert(__('Сохранено'));
        return redirect()->route('user.posts.show', 123);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.posts.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        $post = (object)[
            'id' => '123',
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => "Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Placeat, quibusdam!",
        ];
        return view('user.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        $post = (object)[
            'id' => '123',
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => "Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Placeat, quibusdam!",
        ];
        return view('user.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $post)
    {
        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ]);

        dd($validated);

        alert(__('Обновлено!'));
        // dd($title, $content, $post);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $post)
    {
        return redirect()->route('user.posts');
    }

    public function like(string $post)
    {
        return 'like + 1';
    }
}
