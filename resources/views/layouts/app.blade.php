<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </link>

    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- When user is logged -->
        @if(Auth::check())
        @include ('layouts.navbar')
        @endif

        <!-- Notification if action is OK -->
        @if ($message = Session::get('success'))
        <div class="position-fixed bottom-0 start-50 translate-middle-x">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <p>{{ $message }}</p>
            </div>
        </div>
        @endif

        <main class="py-4 min-wh-100 min-vh-100">
            @yield('content')
        </main>

        @include ('layouts.footer')
    
    </div>
</body>

</html>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
        hideAlert(5);
    });

    /**
     * This method hide alert of bootstrap after xxx seconds
     */
    function hideAlert(sec) {
        var alert = document.getElementsByClassName('alert')[0];

        setTimeout(() => {
            alert.classList.add('d-none');
        }, sec * 1000)
    }
</script>