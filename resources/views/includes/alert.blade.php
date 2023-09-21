@if($alert = session()->pull('alert') and $type = session()->pull('alert-type'))
    <div class="alert alert-{{$type}} mb-0 rounded-0 text-center py-2 small">
        {{$alert}}
    </div>
@endif
