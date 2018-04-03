@extends('admin.dashboard')

@section('content')
    <div id="page-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add New Team
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['route' => 'team.store','files' => true]) !!}
                                    <div class="form-group">
                                        {!! Form::label('team_name','Team Name') !!}
                                        {!! Form::text('team_name',null,['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('continent_name','Continent Name') !!}
                                        {!! Form::text('continent_name',null,['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('group_id','Group Name') !!}
                                        {!! Form::select('group_id', $groups, null, ['class' => 'form-control','placeholder' => 'Pick a Group...']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('flag_img_path','Flag Image') !!}
                                        {!! Form::file('flag_img_path') !!}
                                    </div>
                                    {!! Form::reset('reset', ['class' => 'btn btn-warning']) !!}
                                    {!! Form::submit('submit', ['class' => 'btn btn-success']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection