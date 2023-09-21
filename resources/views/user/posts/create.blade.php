@extends('layout.main')

@section('page.title', 'Создать пост')

@section('main.content')
    <x-title>
        {{ __('Создать пост') }}

        <x-slot name="link">
            <a href="{{ route('user.posts') }}">{{ __('Назад') }}</a>
        </x-slot>
    </x-title>

    <x-post.form btn="Создать пост" method="post" action="{{ route('user.posts.store') }}">
        <x-button type="submit">{{ __('Создать пост') }}</x-button>
    </x-post.form>

@endsection
