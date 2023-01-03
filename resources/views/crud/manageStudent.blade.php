@extends('crud.master')
@section('title')
    Manage_Student
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <a href="{{'home'}}" class="btn btn-success mt-3 mb-3"> Student</a>
            <div class="card">
                <div class="card-header">
                    <h3>Manage Student</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Department name</th>
                            <th>Section name</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @php $i=1; @endphp
                        @foreach($students as $student)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->department_name}}</td>
                            <td>{{$student->section_name}}</td>
                            <td>{{$student->address}}</td>
                            <td>
                                <img src="{{asset($student->image)}}" class="img-fluid" style="width: 50px; height: 50px;" alt="">

                            </td>
                            <td>
{{--                                <a href="" class="btn btn-primary">Edit</a>--}}
                                <a  href="{{ route('edit.student',['id'=>$student->id]) }}" class="btn btn-primary">Edit</a>
                                <form action="{{'delete-student'}}/{$i-1}" method="post">
                                    @csrf
                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                    <input type="submit" onclick="return confirm('Are you sure to delete??!!')" class="btn btn-danger" value="Delete">
                                </form>
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

