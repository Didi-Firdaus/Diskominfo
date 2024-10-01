<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('web.component.layout.header.links')
    <!-- Link CSS/JavaScript -->
</head>
<body>
    <!-- include navbar -->
     @include('web.component.layout.navbar.topsection')
     @include('web.component.layout.navbar.navbar')

    <!-- Include banner berdasarkan kondisi -->
    @if(isset($useLargeHeader) && $useLargeHeader)
        @include('web.component.banner.container')
    @else
        @include('web.component.banner.littlecontainer')
    @endif
    
    <main>
        @yield('content')
    </main>

    <!-- Include footer berdasarkan kondisi -->
    @include('web.component.layout.footer.footer')

    <!-- Link JavaScript tambahan -->
    @include('web.component.layout.header.js')
</body>
</html>
