@extends('crud.master')
@section('title')
    Manage_Department
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <a href="{{'home'}}" class="btn btn-success mt-3 mb-3"> Student</a>
                <div class="card">
                    <div class="card-header">
                        <h3>Manage Department</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Department Name</th>
                                <th>Department Code</th>

                                <th>Action</th>
                            </tr>
                            @php $i=1; @endphp
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$department->department_name}}</td>
                                    <td>{{$department->department_code}}</td>

                                    <td>
                                        {{--                                <a href="" class="btn btn-primary">Edit</a>--}}
{{--                                        <a  href="{{ route('edit.department',['id'=>$department->id]) }}" class="btn btn-primary">Edit</a>--}}
{{--                                        <form action="{{'delete-department'}}/{$i-1}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <input type="hidden" name="student_id" value="{{$department->id}}">--}}
{{--                                            <input type="submit" onclick="return confirm('Are you sure to delete??!!')" class="btn btn-danger" value="Delete">--}}
{{--                                        </form>--}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

