

<!DOCTYPE html>

<html lang="en">

 <head>

       @include('admin.partials.head')

     </head>

 <body>

@include('admin.partials.nav')
       @include('admin.partials.leftsidenav')


<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            @yield('content')
        </div>
    </div>
</div>






@include('admin.partials.footer')

@include('admin.partials.footer-script')

 </body>


</html>