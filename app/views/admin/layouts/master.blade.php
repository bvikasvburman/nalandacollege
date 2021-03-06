<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.meta_section')
    
    <title>
        Nalanda College ::
        @section('title')
            Admin Panel
        @show
    </title>

    @include('admin.layouts.css_section')
    @section('css-section')
    @show

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            @include('admin.layouts.top_section')
            @include('admin.layouts.left_section')
        </nav>

        <div id="page-wrapper">
        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                    @section('page-header')
                    
                    @show
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
        
                <div class="col-lg-12">
                    <div class="message_area"> </div>
                </div>
            
            </div>

            @section('right-content')
                @include('admin.layouts.right_section')
            @show
        </div>
        <!-- /#page-wrapper -->
       
    </div>
    <!-- /#wrapper -->

    @include('admin.layouts.js_section')
    
  
    @section('js-section')
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
