<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundation 5</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  {{ HTML::style('css/foundation.css') }}
  {{ HTML::style('css/normalize.css')}}
  {{ HTML::style('css/style.css') }}
  <!-- For Foundation Icons, put this in your head -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

  <script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>

</head>
<body>
  
<header>
  <div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar role="navigation"> 
      <ul class="title-area"> 
        <li class="name"> 
          <h1><a href="#">My Site</a></h1> 
        </li> <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone --> 
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li> 
      </ul> 
      <section class="top-bar-section"> 
        <!-- Right Nav Section --> 
        <ul class="right"> 
          <li class="active"><a href="#">Right Button Active</a></li> 
          <li class="has-dropdown"> <a href="#">Right Button Dropdown</a> 
            <ul class="dropdown"> 
              <li><a href="#">First link in dropdown</a></li> 
              <li class="active"><a href="#">Active link in dropdown</a></li> 
            </ul> 
          </li> 
        </ul> 
        <!-- Left Nav Section --> 
        <ul class="left"> 
          <li><a href="#">Left Nav Button</a></li> 
        </ul> 
      </section> 
    </nav>
  </div>
</header>
  <!-- body content here -->
    @yield('content')

              
           
            



  <script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/vendor/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
  <script src="//maps.google.com/maps/api/js?sensor=true"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>