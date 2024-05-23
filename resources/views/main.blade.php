<!DOCTYPE html>
<html lang="en">
    @include('parts.head')
  <body>
    @include('parts.header')

    @yield('content')

    <!-- product -->
    {{-- @include('parts.hotproduct') --}}
    <!-- footer -->
    @include('parts.footer')
  </body>
</html>
