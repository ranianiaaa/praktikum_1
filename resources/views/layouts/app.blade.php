<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Toko')</title>
</head>
<body>
    {{-- @include('partials.navbar') --}}
    <main>
        kata kata hari ini
        @yield('content')
    </main>
    <div>
        @yield('card')
        @yield('card')
        @yield('card')
    </div>
</body>
</html>
