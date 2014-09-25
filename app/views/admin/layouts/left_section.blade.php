<div class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            
            {{--
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            --}}
                
            <li>
                <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Managments <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('QuoteController@edit', 1 ) }}">Principle Message</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('QuoteController@edit', 2 ) }}">Director Message </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Contents <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('ContentController@edit', 1 ) }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('ContentController@edit', 2 ) }}"> Library Facility </a>
                    </li>
                    
                    <li>
                        <a href="{{ URL::action('ContentController@edit', 3 ) }}"> Computer Lab </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Events <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('VEventController@index') }}">Event List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('VEventController@create') }}">Add new Event </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li> 
            
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Staff Mangement <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('StaffController@index') }}">Staff List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('StaffController@create') }}">Add new Staff </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Course Mangement <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('CourseController@index') }}">Course List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('CourseController@create') }}">Add new Course </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Recent News<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('RecentNewsController@index') }}">News List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('RecentNewsController@create') }}">Add new news</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Alumni <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('VEventController@index') }}">Alumni List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Link Category  <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('LinkCategoryController@index') }}">Link Catgory List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('LinkCategoryController@create') }}">Add new Link Category </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Link  <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('LinkController@index') }}">Link List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('LinkController@create') }}">Add new Link </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->