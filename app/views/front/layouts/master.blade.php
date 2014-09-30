<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('front.layouts.meta_section')
    @section('meta-section')
    @show
    
    <title>
        Nalanda Science & Commerce College Katni ::
        @section('title')
            Home
        @show
    </title>
	
    @include('front.layouts.css_section')
    @section('css-section')
    @show
    
   
</head><!--/head-->

<body class="homepage">

    @include('front.layouts.nav_section')
    
    @section('slider-section')
    @show
    
    <section id="content">
        <div class="container">
	    @section('main_content')
            @show
        </div><!--/.container-->
    </section><!--/#content-->

    
    @section('contact-section')
	@include('front.layouts.contact_section')
    @show

    
    @section('link-section')
	@include('front.layouts.link_section')
    @show
    
    
    @section('footer-section')
	@include('front.layouts.footer_section')
    @show
    
    
    @section('js-section')
	@include('front.layouts.js_section')
    @show
    
    <script type="text/javascript">
    
    $(function() {
    
        @if(Session::has('success'))
            var mess =   '{{ Session::get('success') }}';
	    bootBarNotify('success', mess);
        @endif
        
        @if(Session::has('error'))
            var mess =   '{{ Session::get('error') }}';
	    bootBarNotify('error', mess);
        @endif
        
        @if(Session::has('warning'))
            var mess =   '{{ Session::get('warning') }}';
	    bootBarNotify('warning', mess);
        @endif
        
        @if(Session::has('info'))
            var mess =   '{{ Session::get('info') }}';
	    bootBarNotify('info', mess);
        @endif
    });
    </script>
    
</body>
</html>