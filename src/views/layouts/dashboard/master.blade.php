<html>
    <head>
        <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/toggle-switch.css') }}" />
        <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base.css') }}" media="all">

        @if (!empty($favicon))
        <link rel="icon" {{ !empty($faviconType) ? 'type="$faviconType"' : '' }} href="{{ $favicon }}" />
        @endif

        <script src="{{ asset('packages/mrjuliuss/syntara/assets/js/jquery-2.0.3.min.js') }}"></script>
        <script src="{{ asset('packages/mrjuliuss/syntara/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/base.js') }}"></script>

        <title>{{ (!empty($siteName)) ? $siteName : "Syntara"}} - {{isset($title) ? $title : '' }}</title>
    </head>
    <body>
        @include(Config::get('syntara::views.header'))
        {{ isset($breadcrumb) ? Breadcrumbs::create($breadcrumb) : ''; }}
        <div id="content">
            @yield('content')
        </div>
    </body>
</html>