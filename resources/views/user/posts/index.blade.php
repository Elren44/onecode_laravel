@extends('layout.main')

@section('page.title', 'Мои посты')

@section('main.content')
    <x-title>
        {{ __('Мои посты') }}

        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.create') }}" size="sm">
                {{ __('Создать') }}
            </x-button-link>
        </x-slot>
    </x-title>
    @if (empty($posts))
        <div>{{ __('Нет ни одного поста.') }}</div>
    @else
        @foreach ($posts as $post)
            <div class="mb-4">
                <h2 class="h5">
                    <a href="{{ route('user.posts.show', $post->id) }}">{{ $post->title }}</a>
                </h2>
                <div class="small text-muted">
                    {{ now()->format('d.m.y H:i:s') }}
                </div>
            </div>
        @endforeach

    @endif

@endsection
