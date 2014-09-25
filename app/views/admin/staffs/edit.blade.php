@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
@stop

@section('page-header')
    Edit {{ $head['page_header'] }}
@stop



@section('right-content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            
                <a href="{{ URL::action('StaffController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::model($data, array( 'route' => array('admin.staffs.update', $id), 'method' => 'patch', 'files'=> true, 'id' => 'frm_caste', 'class' => 'form-horizontal') ) }}
                        
                        <div class="form-group">
                            {{ Form::label('profile_picture', 'Upload Photo', array('class' => 'control-label' ) ); }}
                            {{ Form::file('profile_picture', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('profile_picture'); }}
                            </p>
                            {{ HTML::image( asset('assets/uploads/staffs/'. $data->profile_picture) , $data->name, array('height'=> '60px' ) ) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('first_name', 'First Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('first_name', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('first_name'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('last_name', 'Last Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('last_name', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('last_name'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('department', 'Department', array('class' => 'control-label' ) ); }}
                            {{ Form::select('department', $department_array , $data->department, array("class" => 'form-control') ) }}
                            <p class="help-inline">
                                {{ $errors->first('department'); }}
                            </p>
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('joining_date', 'Date of Joining', array('class' => 'control-label'  ) ); }}
                            {{ Form::text('joining_date', null, array('class' => 'form-control select_date')); }}
                            <p class="help-inline">
                                {{ $errors->first('joining_date'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('birth_date', 'Date of Birth', array('class' => 'control-label' ) ); }}
                            {{ Form::text('birth_date', null, array('class' => 'form-control select_date')); }}
                            <p class="help-inline">
                                {{ $errors->first('birth_date'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('email', 'Email', array('class' => 'control-label' ) ); }}
                            {{ Form::text('email', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('email'); }}
                            </p>
                        </div>
                            
                        
                        <div class="form-group">
                            {{ Form::label('contact_no', 'Contact No', array('class' => 'control-label' ) ); }}
                            {{ Form::text('contact_no', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('contact_no'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('address', 'Address', array('class' => 'control-label' ) ); }}
                            {{ Form::textarea('address', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('address'); }}
                            </p>
                        </div>
                            
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
                        <a href="{{ URL::action('StaffController@index') }}" class="btn btn-danger">
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
    
    {{ HTML::script('assets/admin/js/plugins/datepicker/js/bootstrap-datepicker.js'); }}
    
    <script type="text/javascript">
    $(document).ready(function(){
        
        @if ( !empty( $errors->first('first_name') ) )
            $('#first_name').closest('.form-group').addClass('has-error');
            $('#first_name').siblings('.help-inline').addClass('text-danger');
        @endif
        
        @if ( !empty( $errors->first('last_name') ) )
            $('#last_name').closest('.form-group').addClass('has-error');
            $('#last_name').siblings('.help-inline').addClass('text-danger');
        @endif
        
        @if ( !empty( $errors->first('email') ) )
            $('#email').closest('.form-group').addClass('has-error');
            $('#email').siblings('.help-inline').addClass('text-danger');
        @endif
        
        @if ( !empty( $errors->first('contact_no') ) )
            $('#contact_no').closest('.form-group').addClass('has-error');
            $('#contact_no').siblings('.help-inline').addClass('text-danger');
        @endif
        
        $('.select_date').datepicker({
            format : 'yyyy-mm-dd',
            autoclose : true
            
        }).on('changeDate', function(ev){
           
            $(this).datepicker('hide');
        });
        
        
        
    });
    </script>
@stop


