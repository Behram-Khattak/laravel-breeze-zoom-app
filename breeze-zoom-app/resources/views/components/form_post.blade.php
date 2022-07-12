@props(['action' => $action, 'method' => $method])

<form action="{{ $action }}" method="{{ $method }}">
    @csrf

</form>
