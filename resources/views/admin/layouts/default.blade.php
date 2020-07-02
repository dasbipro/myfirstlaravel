<!DOCTYPE html>
<html lang="en">
 @include('admin.includes.head')
    <body class="sb-nav-fixed">
        @include('admin.includes.nav')
        <div id="layoutSidenav">
            @include('admin.includes.sidebar')
            <div id="layoutSidenav_content">

                @yield('abc') {{-- I can put any name here like content,abc!! --}}
                @include('admin.includes.footer')
            </div>
        </div>
       @include('admin.includes.script')
       @yield('myscript') {{-- it will help to us my custom script to different files --}}

    </body>
</html>
