<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('partials._head')

<body>


@include('partials._nav')

<div class="container">
    @include('partials._messages')
    @yield('content')
    @include('partials._footer')
</div>

@include('partials._scripts')
@yield('scripts')
</body>
</html>