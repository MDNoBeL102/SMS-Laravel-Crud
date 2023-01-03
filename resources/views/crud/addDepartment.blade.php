@extends('crud.master')
@section('title')
    Add_Department
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">

                <div class="card">
                    <div class="card-header">
                        <h3>Add Department</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new.department')}}" method="post" >
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Department Name </label>
                                <input type="text" name="department_name" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department Code </label>
                                <input type="text" name="department_code" class="form-control" placeholder="Department Code">
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
