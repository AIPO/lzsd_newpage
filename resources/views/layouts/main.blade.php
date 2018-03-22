<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('layouts._head')

<body>


@include('layouts._nav')

<div class="container">
    @include('layouts._messages')
    @yield('content')
    @include('layouts._footer')
</div>

@include('layouts._scripts')
@yield('scripts')
</body>
</html>