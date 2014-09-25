@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop


@section('page-header')
    {{ $head['page_header'] }}
@stop



@section('right-content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="fa fa-list"> </span>  Update {{ $head['page_header'] }} 
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::model($data, array( 'route' => array('admin.quotes.update', $id), 'method' => 'patch' , 'files'=> true, 'id' => 'frm_caste', 'class' => 'form-horizontal') ) }}
                       
                        <div class="form-group">
                            {{ Form::label('profile_picture', 'Upload Photo', array('class' => 'control-label' ) ); }}
                            {{ Form::file('profile_picture', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('profile_picture'); }}
                            </p>
                            {{ HTML::image( asset('assets/uploads/quotes/'. $data->profile_picture) , $data->name, array('height'=> '60px' ) ) }}
                        </div>
                            
                            
                            
                        <div class="form-group">
                            {{ Form::label('name', 'Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('name', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('name'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('message', 'message', array('class' => 'control-label' ) ); }}
                            {{ Form::textarea('message', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('message'); }}
                            </p>
                        </div>
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
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
        
        $('#message').summernote({
            height: 200 
        });
        
        @if ( !empty( $errors->first('name') ) )
            $('#name').closest('.form-group').addClass('has-error');
            $('#name').siblings('.help-inline').addClass('text-danger');
        @endif
        
        
    });
    </script>
@stop


