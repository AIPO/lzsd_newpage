<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('pages.layouts.partials._head')

<body>
@include('pages.layouts.partials._nav')

<div class="content">

    @yield('content')
    @include('pages.layouts.partials._footer')

</div>

@include('pages.layouts.partials._scripts')

</body>
</html>