<!doctype html>
<html lang="en" style="--scrollbar-width:17px; --moz-scrollbar-thin:17px;">

  <head>
    @include('admin_assets.layouts.header')
  </head>

  <body>
    <div class="body-container">
      @include('admin_assets.layouts.navbar')
      <div class="main-container ">

        <div id="sidebar" class="sidebar sidebar-fixed expandable sidebar-light">
        @include('admin_assets.layouts.sidebar');
        </div>

        <div role="main" class="main-content">

           @yield('content')

           @include('admin_assets.layouts.footer')
        </div>

      
      </div>
    </div>

   @include('admin_assets.layouts.footer_js')
  </body>

</html>