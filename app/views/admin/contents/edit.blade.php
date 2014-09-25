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
                    {{ Form::model($data, array( 'route' => array('admin.contents.update', $id), 'method' => 'patch' , 'files'=> true, 'id' => 'frm_caste', 'class' => 'form-horizontal') ) }}
                       
                        <div class="form-group">
                            {{ Form::label('title', 'Title', array('class' => 'control-label' ) ); }}
                            {{ Form::text('title', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('title'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('description', 'Description', array('class' => 'control-label' ) ); }}
                            {{ Form::textarea('description', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('description'); }}
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
        
        $('#description').summernote({
            height: 200 
        });
        
        @if ( !empty( $errors->first('name') ) )
            $('#name').closest('.form-group').addClass('has-error');
            $('#name').siblings('.help-inline').addClass('text-danger');
        @endif
        
        
    });
    </script>
@stop


