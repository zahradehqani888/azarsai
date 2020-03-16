<html>
    <head>
        
    </head>
    <body>
        
        @include('layouts.adminnav')
        @include('layouts.adminside')
        <div class="content-wrapper">
        @yield('content')
        </div>
        @include('layouts.adminfooter')
        
    </body>
</html>

