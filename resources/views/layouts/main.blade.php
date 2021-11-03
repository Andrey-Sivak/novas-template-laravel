<!DOCTYPE html>
<html>
<head>
    @include('layouts.includes.head')
</head>
<body>
    {{--  preloader  --}}
    @include('layouts.includes.preloader')

    {{--  header  --}}
    @include('layouts.includes.header.header')

    <div class="page-content">
        @if( !Request::is('/') && !Request::is('coming-soon') && !Request::is('error') )
            @include('layouts.includes.breadcrumbs')
        @endif

        @yield('page-content')
    </div>

    {{--  footer  --}}
    @if( !Request::is('coming-soon') && !Request::is('error') )
        @include('layouts.includes.footer')
    @endif
    {{--  scripts  --}}
    @include('layouts.includes.scripts')
</body>
</html>
