@extends('layout.base')

@section('page.title', 'Список постов')

@section('content')
    <h1>Список постов</h1>

    @if (empty($posts))
        <div>Нет ни одного поста.</div>
    @else
        <ul class="d-flex flex-column gap-3 my-4 text-start align-items-center">
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                    <p>{!! $post->content !!}</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
