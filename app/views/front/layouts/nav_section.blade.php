<header id="header">
    <div class="top-bar">
	<div class="container">
	    <div class="row">
		
		<div class="col-sm-6 col-xs-4">
		    <div class="top-number"><p>&nbsp;</div>
		</div>
		
		
		<div class="col-sm-6 col-xs-8">
		   <div class="social">
			<ul class="social-share">
			    <li>
				<a href="#" target="_blank">
				    <i class="fa fa-facebook"></i>
				</a>
			    </li>
			    
			    <li>
				<a href="#" target="_blank">
				    <i class="fa fa-twitter"></i>
				</a>
			    </li>
				
			    <li>
				<a href="#" target="_blank">
				    <i class="fa fa-google-plus"></i>
				</a>
			    </li> 
			    {{--
			    <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
			    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			    <li><a href="#"><i class="fa fa-skype"></i></a></li>
			    --}}
			</ul>
		       <!-- <div class="search">
			    <form role="form">
				<input type="text" class="search-form" autocomplete="off" placeholder="Search">
				<i class="fa fa-search"></i>
			    </form>
		       </div>-->
		   </div>
		</div>
	    </div>
	</div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
	<div class="container">
	    <div class="row">
		<div class="col-sm-3">
		    <a class="navbar-brand" href="#">
			<img src="{{ asset('assets/front/images/logo.jpg') }}" alt="Nalanda Logo" class="img-responsive img-circle" style="height:130px;" >
		    </a>
		</div>
		
	    <div class="col-sm-9">
		<a class="navbar-brand" href="#">
		    <h1>Nalanda Science & Commerce College Katni</h1>
		    <h2 style="color:#F5F5F5;">Run by Takshasila Education Society </h2>
		</a>
	    </div>
		
		
	    </div>
	</div>
    </nav>
    <nav class="navbar navbar-inverse" role="banner">
	<div class="container">
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>
		
	    </div>
			    
	    <div class="collapse navbar-collapse navbar-right">
		<ul class="nav navbar-nav">
		    <li  {{ ($active_menu == 1) ?  'class="active"' : '' }} >
			<a href="{{ URL::action('HomeController@index') }}">Home</a>
		    </li>
		    
		    <li {{ ($active_menu == 2) ?  'class="active dropdown"' : 'class="dropdown"' }} >
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			About Us <i class="fa fa-angle-down"></i></a>
			<ul class="dropdown-menu">
			    <li><a href="{{ URL::action('HomeController@getAboutUs') }}">Infrastucture</a></li>
			</ul>
		    </li>
		    
		    <li {{ ($active_menu == 3) ?  'class="active"' : '' }}>
			<a href="{{ URL::action('HomeController@getCourses') }}">Courses</a>
		    </li>
			
		    <li {{ ($active_menu == 4) ?  'class="active"' : '' }} >
			<a href="#">Profile</a>
		    </li>
			
		    <li {{ ($active_menu == 5) ?  'class="active dropdown "' : 'class="dropdown"' }}>
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			Activities <i class="fa fa-angle-down"></i></a>
			<ul class="dropdown-menu">
			    <li><a href=#">Cultural</a></li>
			    <li><a href="#">Sports</a></li>
			    <li>
				<a href="{{ URL::action('HomeController@getPortfolio') }}">Portfolio</a>
			    </li>
			</ul>
		    </li>
		    
		    <li {{ ($active_menu == 6) ?  'class="active dropdown"' : 'class="dropdown"' }} >
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			Facilities <i class="fa fa-angle-down"></i></a>
			<ul class="dropdown-menu">
			    <li><a href="{{ URL::action('HomeController@getLibraryFacility') }}">Library Facility</a></li>
			    <li><a href="{{ URL::action('HomeController@getComputerLab') }}">Computer Lab</a></li>
			</ul>
		    </li>
		    
			
			
		    <li {{ ($active_menu == 7) ?  'class="active"' : '' }}>
			<a href="#">Alumni</a>
		    </li>
			
		    <li {{ ($active_menu == 8) ?  'class="active"' : '' }} >
			<a href="#">Career</a>
		    </li>
		    
		    <li {{ ($active_menu == 9) ?  'class="active"' : '' }}>
			<a href="{{ URL::action('HomeController@getContactUs') }}">Contact</a>
		    </li>
		    
		    
			
		    {{--	
		    <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
			<ul class="dropdown-menu">
			    <li><a href="blog-item.html">Blog Single</a></li>
			    <li><a href="pricing.html">Pricing</a></li>
			    <li><a href="404.html">404</a></li>
			    <li><a href="shortcodes.html">Shortcodes</a></li>
			</ul>
		    </li>
		    --}}
		    
		</ul>
	    </div>
	</div><!--/.container-->
    </nav><!--/nav-->
	    
</header><!--/header-->

