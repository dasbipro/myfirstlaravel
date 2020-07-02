<!DOCTYPE html>
<html lang="en">

@include('website.includes.head')

<body>

    @include('website.includes.nav')


    <div class="container">

        @yield('content')
        {{-- @yield will inherit the the content of default --}}

    </div>


    @include('website.includes.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('ui/website/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('ui/website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
