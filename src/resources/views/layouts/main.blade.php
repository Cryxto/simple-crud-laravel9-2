<!DOCTYPE html>
<html lang="en">
@php
    $isProfile = Route::currentRouteName() === 'profile' ? true : false;
    // dd($isProfile);
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.styles')
    <title>{{ ucwords(Route::currentRouteName()) }}</title>
</head>

<body class="d-flex flex-column min-vh-100">
    @include('partials.header')
    @if ($isProfile)
        @yield('content')
    @else
        <main class="container py-4 wrapper flex-grow-1">
            <div class="row">
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </main>
    @endif
    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
