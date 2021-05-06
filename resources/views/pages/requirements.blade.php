@extends('layouts.basicLayout')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/treehouse.css') }}" >
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="" style="font-weight: bold; margin-bottom: 0;">Requirements for {{$challenge}}</h1>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="row" style="padding-left: 3%;">
                            <img src="{{ URL::asset('/images/help-icon.png') }}" class="justify-content-right greyout" 
                                style="margin-right:3%; margin-left: auto; cursor: help;" alt="help-icon" height="20px" width="20px"
                                id="helpIcon"
                                >
                        </div>
                        <br>
                            <iframe src="{{ URL::asset($pdf) }}" style="width:100%; height:800px;" frameborder="0"></iframe>
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
            Swal.fire('Info!', 'Displays the requiremnts pdf!', 'question')
        });
    </script>
@endsection