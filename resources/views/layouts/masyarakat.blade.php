<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') </title>

  
  @include('includes.masyarakat.style')
  
  
</head>

<body>
  
  @include('includes.masyarakat.navbar')

<style>
  body{
    background: #00384e;
  }

  .margin-top{
    margin-top: 90px;
  }
  .margin-bottom{
    margin-bottom: 90px;
  }
  

</style>
      
      <div class="container">
        <div class="margin-bottom margin-top">
          @yield('content')

        </div>
      </div>

    </div>
  </div>
  @include('sweetalert::alert')
  @include('includes.masyarakat.script')
</body>

</html>