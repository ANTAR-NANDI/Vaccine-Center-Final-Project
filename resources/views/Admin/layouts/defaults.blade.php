<!DOCTYPE html>
<html lang="en">

<head>
  @include('Admin.includes.head')
</head>

<body>
  <div class="main-wrapper t">

    @include('Admin.includes.header')

    @include('Admin.includes.sidebar')

    @yield('abc')
  </div>
  @include('Admin.includes.footer')



</body>

</html>