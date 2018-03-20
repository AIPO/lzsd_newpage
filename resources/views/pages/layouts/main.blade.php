<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('pages.partials._head')

<body>
@include('pages.partials._nav')

<div class="content">

    @yield('content')
    @include('pages.partials._footer')

</div>

@include('pages.partials._scripts)

</body>
</html>