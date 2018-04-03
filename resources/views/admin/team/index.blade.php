@extends('admin.dashboard')

@section('content')
    <div id="page-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <a href="{!! url('team/create') !!}" class="btn btn-success">Create New Group</a>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Team List
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Team Name</th>
                                <th>continent_name</th>
                                <th>Group name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $data)
                            <tr class="odd gradeX">
                                <td>{{$data->id}}</td>
                                <td>{{$data->team_name}}</td>
                                <td>{{$data->continent_name}}</td>
                                <td class="center">{!! $groups[$data->group_id] !!}</td>
                                <td class="center"><a href="{!! url('team/'.$data->id.'/edit') !!}" class=" btn btn-warning">Edit</a> |
                                    {!! Form::open(array('method'=>'DELETE', 'route'=>array('team.destroy',$data->id)))!!}
                                    {!! Form::submit('Delete', array('class'=>'btn btn-danger btn-sm','onclick' => 'return confirm("Are you sure want to Delete?");'))!!}
                                    {!! Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
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