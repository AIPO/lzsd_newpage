<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('pages.layouts.partials._head')

<body>


<div class="container">
    @include('pages.layouts.partials._nav')
    @yield('content')
    @include('pages.layouts.partials._footer')
</div>

@include('pages.layouts.partials._scripts')

</body>
</html>