@extends('crud.master')
@section('title')
    Add_Section
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">

                <div class="card">
                    <div class="card-header">
                        <h3>Add Section</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new.section')}}" method="post" >
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Section Name </label>
                                <input type="text" name="section_name" class="form-control" placeholder="Section Name">
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
