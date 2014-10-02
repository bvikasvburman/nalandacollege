@extends('front.layouts.master')

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
@stop

@section('slider-section')
@stop

@section('main_content')
<div class="row">
    <div class="team">
        <div class="row clearfix">
            <div class="col-md-5">
                
                {{ $aboutus->description }}
            </div>
                
            <div class="col-md-5">	
                <div class="single-profile-top wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation: fadeInDown 1000ms 300ms;">
                
                    <div class="media">
                        <div class="pull-left">
                            <a href="javascript:void(0);">
                                <img class="media-object" src="{{ asset('assets/uploads/quotes/'. $principle_quote->profile_picture ) }}"  style="height:200px;" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4>{{ $principle_quote->name }}</h4>
                            <h5>Principle</h5>
                            {{--
                            <ul class="tag clearfix">
                                <li class="fabtn"><a href="#">Web</a></li>
                                <li class="btn"><a href="#">Ui</a></li>
                                <li class="btn"><a href="#">Ux</a></li>
                                <li class="btn"><a href="#">Photoshop</a></li>
                            </ul>
                            --}}
                            <ul class="social_icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            
                        </div>
                    </div><!--/.media -->
                    <p> {{ $principle_quote->message }} </p>
                </div>
            </div><!--/.col-lg-4 -->
        </div>
    </div>
    
</div><!--/.row-->
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


