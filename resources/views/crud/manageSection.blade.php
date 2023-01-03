@extends('crud.master')
@section('title')
    Manage_Section
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">

                <div class="card">
                    <div class="card-header">
                        <h3>Manage Section</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Section Name</th>

                                <th>Action</th>
                            </tr>
                            @php $i=1; @endphp
                            @foreach($sections as $section)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$section->section_name}}</td>

                                    <td>

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

