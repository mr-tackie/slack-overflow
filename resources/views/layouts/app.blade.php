<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{asset('css/utils.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="ui fixed inverted main menu">
            <div class="ui container">
                <a class="header active violet item" href="{{ url('/') }}">
                    {{ config('app.name', 'Slack Overflow') }}
                </a>

                <div class="right menu">
                    @guest
                        <a class="item" href="{{route('login')}}">{{__('Login')}}</a>
                        
                        @if(Route::has('register'))
                            <a class="item" href="{{route('register')}}">{{__('Register')}}</a>
                        @endif
                    @else
                        <div class="dropdown ui item">
                            {{Auth::user()->email}} <i class="dropdown icon"></i>
                            <div class="menu">
                                <a class="item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>

        <div class="ui main container p-content">
            @yield('content')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>
