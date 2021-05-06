@extends('layouts.basicLayout')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/treehouse.css') }}" >
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="" style="font-weight: bold; margin-bottom: 0;">Email List Table</h1>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card ">
                    <div class="card-body">
                        <div class="row" style="padding-left: 3%;">
                            <img src="{{ URL::asset('/images/help-icon.png') }}" class="justify-content-right greyout" 
                                style="margin-right:3%; margin-left: auto; cursor: help;" alt="help-icon" height="20px" width="20px"
                                id="helpIcon"
                                >
                        </div>
                        <br>
                        <table id="signUpTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Created at</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($SignUp as $row)
                                    <tr>
                                        <td>{{$row->created_at}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    
    <script>
        $(document).ready(function() {
            $('#signUpTable').DataTable({
                "lengthChange": false,
                "order": [[ 0, "desc" ]]
            });
        });

        $('#helpIcon').click( function (){
            Swal.fire('Info!', 'An easy and quick way to view all signed up users for the news letter!', 'question')
        });
    </script>
@endsection