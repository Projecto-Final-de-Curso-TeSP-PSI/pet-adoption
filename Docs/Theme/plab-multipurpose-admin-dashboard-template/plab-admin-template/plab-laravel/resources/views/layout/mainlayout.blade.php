<!doctype html>
<html lang="en">
    <head>
        @include('layout.partials.head')
    </head>
  
    <body>
        <!-- Preloader -->
        @include('layout.partials.loader')

        <!-- Top Navbar -->
        @include('layout.partials.top-nav')

        <!-- Side Menu -->
        @include('layout.partials.sidemenu')

        <!-- Main Content Wrapper -->
        <div class="main-content d-flex flex-column hide-sidemenu">
            <!-- Main Content Layout -->
            @yield('content-wrapper')

            <!-- Footer -->
            @include('layout.partials.footer')
        </div>
        <!-- End Main Content Wrapper -->

        <!-- Theme Color customizer Right Modal -->
        @include('layout.partials.theme-color-customizer')

        <!-- Footer Scripts -->
        @include('layout.partials.footer-scripts')
    </body>
</html>
