<!-- resources/views/layout/list.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>List Product</title>
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
