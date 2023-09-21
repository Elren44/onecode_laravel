@props(['method' => 'GET'])

@php($method = strtoupper($method))

@php($_method = in_array($method, ['GET', 'POST']))

<form {{ $attributes }} method="{{ $_method ? $method : 'POST' }}">
    @if ($_method === false)
        @method($method)
    @endif
    @if ($method !== 'GET')
        @csrf
    @endif
    {{ $slot }}
</form>
