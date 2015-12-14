<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.meta')

    @section('css_fonts')
        @include('layouts.css_fonts')
    @show
    

</head>

<body>

    @include('layouts.navigation')

    

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @yield('content')
            </div>
        </div>
    </div>

    <hr>

    @include('layouts.footer')

    @section('js')
        @include('layouts.js')
    @show

</body>

</html>
