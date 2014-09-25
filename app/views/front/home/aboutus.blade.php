@extends('front.layouts.master')

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
@stop


@section('slider-section')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url({{ asset('assets/front/images/slider/bg1.jpg') }})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{ asset('assets/front/images/slider/img1.png') }}" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url({{ asset('assets/front/images/slider/bg2.jpg') }})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{ asset('assets/front/images/slider/img2.png') }}" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url({{ asset('assets/front/images/slider/bg3.jpg') }})">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{ asset('assets/front/images/slider/img3.png') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
@stop


    
@section('main_content')
<div class="row">
   
    <div class="team">
        <div class="row clearfix">
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
                                <li class="btn"><a href="#">Web</a></li>
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
            
            
            <div class="col-md-5">	
               <div class="single-profile-top wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation: fadeInDown 1000ms 300ms;">
                    <div class="media">
                        <div class="pull-left">
                            <a href="javascript:void(0);">
                                <img class="media-object" src="{{ asset('assets/uploads/quotes/'. $director_quote->profile_picture ) }}"  style="height:200px;" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4>{{ $director_quote->name }}</h4>
                            <h5>Principle</h5>
                            {{--
                            <ul class="tag clearfix">
                                <li class="btn"><a href="#">Web</a></li>
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
                    <p> {{ $director_quote->message }} </p>
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


