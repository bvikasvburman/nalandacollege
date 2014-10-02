@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop


@section('page-header')
    Edit {{ $head['page_header'] }}
@stop



@section('right-content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            
                <a href="{{ URL::action('CourseController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::model($data, array( 'route' => array('admin.courses.update', $id), 'method' => 'patch' , 'id' => 'frm_caste', 'class' => 'form-horizontal') ) }}
                        
                        <div class="form-group">
                            {{ Form::label('programme', 'Programme', array('class' => 'control-label' ) ); }}
                            {{ Form::text('programme', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('programme'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('branch', 'Branch', array('class' => 'control-label' ) ); }}
                            {{ Form::text('branch', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('branch'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('seat', 'Seat', array('class' => 'control-label' ) ); }}
                            {{ Form::text('seat', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('seat'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('admission_norms', 'Admission Norms', array('class' => 'control-label' ) ); }}
                            {{ Form::text('admission_norms', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('admission_norms'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('eligibility', 'Eligibility', array('class' => 'control-label' ) ); }}
                            {{ Form::text('eligibility', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('eligibility'); }}
                            </p>
                        </div>
                            
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
                        <a href="{{ URL::action('CourseController@index') }}" class="btn btn-danger">
                            Cancel
                        </a>
                        
                    {{ Form::close() }} 
                </div>
                                    
            </div>
            <!-- /.panel-body -->
        
            </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@stop

@section('js-section')
    <script type="text/javascript">
    $(document).ready(function(){
        
        @if ( $errors->first('title') != false )
            $('#title').closest('.form-group').addClass('has-error');
            $('#title').siblings('.help-inline').addClass('text-danger');
        @endif
    });
    </script>
@stop


