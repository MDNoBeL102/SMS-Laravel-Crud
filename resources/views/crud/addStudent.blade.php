@extends('crud.master')
@section('title')
    Add_Student
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">

            <div class="card">
                <div class="card-header">
                    <h3>Add Student</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('new.student')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name </label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone </label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email </label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Department ID </label>
                            <input type="text" name="department_id" class="form-control" placeholder="Department ID ">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Section ID </label>
                            <input type="text" name="section_id" class="form-control" placeholder="Section ID">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address </label>
                            <textarea name="address" class="form-control" cols="20" rows="6">Address</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image </label>
                            <input type="file" name="image" class="form-control" placeholder="Image">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary form-control" value="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
