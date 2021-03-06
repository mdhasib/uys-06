@extends('admin.dashboard')

@section('content')
    <div id="page-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <a href="{!! url('group/create') !!}" class="btn btn-success">Create New Group</a>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Group List
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($groups as $group)
                            <tr class="odd gradeX">
                                <td>{{$group->id}}</td>
                                <td class="center">{!! $group->group_name !!}</td>
                                <td class="center"><a href="{!! url('group/'.$group->id.'/edit') !!}" class=" btn btn-warning">Edit</a> |
                                    {!! Form::open(array('method'=>'DELETE', 'route'=>array('group.destroy',$group->id)))!!}
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