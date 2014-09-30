@extends('front.layouts.master')

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
    <style>
    
    .pagination .active span{
        background-color:#C52D2F;
        border: 1px solid #C52D2F;
    }
    </style>
    
@stop

@section('slider-section')
@stop

@section('main_content')
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Programme</th>
                    <th>Branch</th>
                    <th>Seat</th>
                    <th>Admission Norms</th>
                    <th>Eligibility</th>
                </tr>
                
                @if ( !empty($courses) )
                    @foreach ( $courses as $course )
                        <tr>
                            <td> {{ $course->programme }} </td>
                            <td> {{ $course->branch }} </td>
                            <td> {{ $course->seat }} </td>
                            <td> {{ $course->admission_norms }} </td>
                            <td> {{ $course->eligibility }} </td>
                        </tr>
                    @endforeach
                    
                @else
                    <tr>
                        <td colspan="5"> No Records Found! </td>
                    </tr>
                @endif
                
                    
            </table>
            {{ $courses->links(); }}
        </div>
    </div> {{-- col-md-10 --}}
</div>
@stop

@section('link-section')
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


