@extends('layouts.default')

@section('content')


	<!-- first section - Home -->
	<div id="home" class="home">
	  <div class="text-vcenter">
	    <h1>Kerberos</h1>
	    <h3>IT Services</h3>
	    <img src="../img/logo_alex.png" width="160" height="160"><br>
	    <a href="#about" class="button">Continuar</a>
	  </div>
	</div>
	<!-- /first section -->

<div data-magellan-expedition="fixed"> 
	<dl class="sub-nav"> 
		<dd data-magellan-arrival="about"><a href="#about">About</a></dd> 
		<dd data-magellan-arrival="services"><a href="#services">Services</a></dd> 
		<dd data-magellan-arrival="information"><a href="#information">Information</a></dd> 
		<dd data-magellan-arrival="services2"><a href="#services2">Services2</a></dd> 
	</dl> 
</div>

	<!-- second section - About -->
	<div id="about" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-6">
	        <img src="images/logo.png" alt="" />
	      </div>
	      <div class="col-sm-6 text-center">
	        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet.</h2>
	        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum metus et ligula venenatis, at rhoncus nisi molestie. Pellentesque porttitor elit suscipit massa laoreet metus.</p>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /second section -->

	<!-- third section - Services -->
	<div id="services" class="pad-section" data-equalizer>
	  <div class="container">
	    <h2 class="text-center">Our Services</h2> <hr />
	    <div class="row text-center">
	      <div class="large-3 columns" data-equalizer-watch>
	        <i class="glyphicon glyphicon-cloud"> </i>
	        <h4>Service 1</h4>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
	      </div>
	      <div class="large-3 columns" data-equalizer-watch>
	        <i class="glyphicon glyphicon-leaf"> </i>
	        <h4>Service 2</h4>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
	      </div>
	      <div class="large-3 columns" data-equalizer-watch>
	        <i class="glyphicon glyphicon-phone-alt"> </i>
	        <h4>Service 3</h4>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
	      </div>
	      <div class="large-3 columns" data-equalizer-watch>
	        <i class="glyphicon glyphicon-bullhorn"> </i>
	        <h4>Service 4</h4>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /third section -->

	<!-- fourth section - Information -->
	<div id="information" class="pad-section" data-equalizer>
	  <div class="container">
	    <div class="row">
	      <div class="large-6 columns" data-equalizer-watch>
	        <div class="panel panel-default">
	          <div class="panel-heading">
	            <h2 class="panel-title">Additional information</h2>
	          </div>
	          <div class="panel-body lead">
	            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
	          </div>
	        </div>
	      </div>
	      <div class="large-6 columns" data-equalizer-watch>
	        <div class="panel panel-default">
	          <div class="panel-heading">
	            <h2 class="panel-title">Additional information</h2>
	          </div>
	          <div class="panel-body lead">
	            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /fourth section -->

	<!-- fifth section -->
	<div id="services2" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	        <h3>Parallax scrolling effect is in action</h3>
	        <h4>The next is the address on Google maps</h4>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /fifth section -->

	<!-- google map -->
	<div id="google_map"></div>
	<!-- /google map -->

	<!-- footer -->
	<footer>
	  <hr />
	  <div class="container">
	    <p class="text-right">Copyright &copy; Your Company 2014</p>
	  </div>
	</footer>
	<!-- /footer -->



@stop