@extends('admin.dashboard')

@section('content')
    <div id="page-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add New Group
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['route' => 'group.store','files' => true]) !!}
                                    <div class="form-group">
                                        {!! Form::label('group_name','Group Name') !!}
                                        {!! Form::text('group_name',null,['class' => 'form-control']) !!}
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