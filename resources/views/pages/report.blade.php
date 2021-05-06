@extends('layouts.basicLayout')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/treehouse.css') }}" >
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="" style="font-weight: bold; margin-bottom: 0;">Report Challenge Number: {{$number}}</h1>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        Query
                    </div>
                    <div class="card-body">
                        <div class="row" style="padding-left: 3%;">
                            <img src="{{ URL::asset('/images/help-icon.png') }}" class="justify-content-right greyout" 
                                style="margin-right:3%; margin-left: auto; cursor: help;" alt="help-icon" height="20px" width="20px"
                                id="helpIcon"
                                >
                        </div>
                        <br>
                        <div class="form-group">
                            <label style="font-weight: bold;">Query Used:</label><br>
                            <span>{{$sql}}</span>
                        </div>
                        <br>
                    </div>
                </div>  
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        Data from the table
                    </div>
                    <div class="card-body">

                        <table id="reportTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    @foreach($headers as $header)
                                        <th style="text-transform: capitalize;">{{str_replace("_", " ", $header)}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        @foreach($headers as $header)
                                            <td>{{ $row->{$header} }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>  
            </div>
        </div>
        <br>
    </div>

    
    <script>
        $(document).ready(function() {
            $('#reportTable').DataTable({
                "lengthChange": false,
                "order": [[ 0, "desc" ]]
            });
        });

        $('#helpIcon').click( function (){
            Swal.fire('Info!', '{{$challenge}}', 'question')
        });
    </script>
@endsection