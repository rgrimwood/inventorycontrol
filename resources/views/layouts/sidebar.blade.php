<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>

<body>
    <!-- Container Start -->
    <div class="container-fluid wrapper">

        <!-- Nav Start -->
        <nav class="navbar navbar-expand-md navbar-light main-nav">
            @include('includes.navigation')
        </nav>
        <!-- Nav End -->

        <!-- Header Start -->
        {{-- <header class="header">
            @include('includes.header')
        </header> --}}
        <!-- Header End -->
        
        <!-- Sidebar Start -->
        <section class="side">
            Left Sidebar
        </section>
        <!-- Sidebar End -->

        <!-- Main Content Start -->
        <section class="main-content">
            <main class="py-4">
                @yield('content')
            </main>
        </section>
        <!-- Main Content End -->

        <!-- Footer Start -->
        <footer class="footer">
            @include('includes.footer')
        </footer>
        <!-- Footer End -->

    </div>
    <!-- Container Ends -->

   
</body>
</html>