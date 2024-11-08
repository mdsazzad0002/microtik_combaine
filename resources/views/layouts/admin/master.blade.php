<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin._partials.head')
</head>
<body class="hidden with-overlay-scrollbars">

    <div id="wrapper" class="fixed-sidebar fixed-topbar">


        @include('layouts.admin._partials.topbar')
        @include('layouts.admin._partials.sidebar')

        <div id="page-wrapper">

            @yield('content')

            {{--  @include('layouts.admin._partials.footer')  --}}
        </div>
        <!-- /.chat-widget -->


        <div class="bottom-buttons">
            <a class="toggle-chat">
                <i class="ti-comment"></i>
                <div class="counter">0</div>
            </a>
            <a class="scroll-to-top"><i class="ti-angle-up"></i></a>
        </div>

        @include('layouts.admin._partials.js')

</body>
</html>
