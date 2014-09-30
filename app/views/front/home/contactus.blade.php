@extends('front.layouts.master')

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
@stop


@section('slider-section')
    
    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.15991952847853!2d80.3687499!3d23.7987236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981618119835a51%3A0xb709075d918ea2ff!2sNalanda+C.B.S.E+School+and+College!5e0!3m2!1sen!2sin!4v1411880544405" width="600" height="450" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Nalanda College</h5>
                                    <p>ACE Colony <br>
                                    Katni, MP 483501</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>Nalanda College</h5>
                                    <p>ACE Colony <br>
                                    Katni, MP 483501</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                
                {{ Form::open( array( 'action' => 'HomeController@postContactUs', 'method'=>'post', 'role'=>'form') ) }}
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            {{ Form::label('name', 'Name *', array('class' => 'control-label' ) ); }}
                            {{ Form::text('name', '', array('class'=>'form-control', 'placeholder'=> 'Name', 'required'=>'required', 'autofocus'=>'autofocus')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Email *', array('class' => 'control-label' ) ); }}
                            {{ Form::text('email', '', array('class'=>'form-control', 'placeholder'=> 'Email', 'required'=>'required')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('phone', 'Phone', array('class' => 'control-label' ) ); }}
                            {{ Form::text('phone', '', array('class'=>'form-control', 'placeholder'=> 'Phone')) }}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            {{ Form::label('subject', 'Subject *', array('class' => 'control-label' ) ); }}
                            {{ Form::text('subject', '', array('class'=>'form-control', 'placeholder'=> 'Subject', 'required'=>'required')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('messgae', 'Message *', array('class' => 'control-label' ) ); }}
                            {{ Form::textarea('message', '', array('class'=>'form-control', 'placeholder'=> 'Message', 'rows'=>'8', 'required'=>'required')) }}
                        </div>                        
                        <div class="form-group">
                            {{ Form::submit('Submit Message', array('class' => 'btn btn-primary btn-lg', 'required'=>'required' )); }}
                        </div>
                    </div>
                {{ Form::Close()}}
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
@stop

@section('main_content')
@stop

@section('js-section')
    
    {{ HTML::script('assets/admin/js/plugins/datepicker/js/bootstrap-datepicker.js'); }}
    <script type="text/javascript">
    $(document).ready(function(){
    
        //info, warning danger success
        $('#date_of_birth').datepicker({
            format : 'yyyy-mm-dd',
            autoclose : true
            
        }).on('changeDate', function(ev){
           
            $(this).datepicker('hide');
        });
        
    });
    </script>
@stop


