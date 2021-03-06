@extends('layouts.master')
<head>
  <link rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
  <link rel="stylesheet" href="assets/styles/vendor/perfect-scrollbar.css">
</head>

<?php
use Modules\Dashboard\Entities\Kostenvoranschlag;
?>

@section('main-content')
    <h2>Kostenvoranschläge</h2>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                <form action="{{route('kostenvoranschlag.create')}}" method="POST">
                    @csrf
                    <button class="float-right btn btn-success m-1">Add New</button>
                </form>
                    <div class="card-title mb-3">All:</div>
                        <div class="row">
                            @if(sizeof(Kostenvoranschlag::all()) == 0)
                            <div class="col-md-12 form-group mb-12">
                                <center>No Documents yet</center>
                            </div>
                            @else
                            <div class="col-md-1 form-group mb-1">
                                <label for="id">Print</label>
                                <br>
                                @foreach($kostenvoranschlage as $kostenvoranschlag)
                                <a href="/kostenvoranschlag/edit/{{$kostenvoranschlag->id}}" style="margin-bottom:3px;"  class="btn btn-primary">Edit & Print</a>
                                @endforeach
                            </div>
                          <div class="col-md-1 form-group mb-1">
                            <label for="id">ID</label>
                            @foreach($kostenvoranschlage as $kostenvoranschlag)
                            <input disabled type="text" style="margin-bottom:3px;" class="form-control" id="firstName1" name="username" value="{{$kostenvoranschlag->id}}">
                            @endforeach
                          </div>
                          <div class="col-md-2 form-group mb-3">
                              <label for="firstName1">Von:</label>
                              @foreach($kostenvoranschlage as $kostenvoranschlag)
                              <input disabled type="text" style="margin-bottom:3px;" class="form-control" id="firstName1" name="username" value="{{$kostenvoranschlag->shop}}">
                                @endforeach
                          </div>

                            <div class="col-md-2 form-group mb-3">
                                <label for="firstName1">An:</label>
                                @foreach($kostenvoranschlage as $kostenvoranschlag)
                                <input disabled type="text" style="margin-bottom:3px;" class="form-control" id="firstName1" placeholder="Enter your full name" value="{{$kostenvoranschlag->kunde}}">
                                @endforeach
                            </div>

                            <div class="col-md-2 form-group mb-3">
                                <label for="lastName1">Customer's Phone</label>
                                @foreach($kostenvoranschlage as $kostenvoranschlag)
                                <input disabled type="text" style="margin-bottom:3px;" class="form-control" id="lastName1" placeholder="Enter your last name" value="{{$kostenvoranschlag->kunde_tel}}">
                                @endforeach
                            </div>
                            @endif
                        </div>
                </div>
            </div>
        </div>
     </div>
  </script>
  <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
  <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
  <script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>
  <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor/perfect-scrollbar.min.js"></script>

  <script src="assets/js/es5/script.min.js"></script>
  <script src="assets/js/es5/sidebar.large.script.min.js"></script>

@endsection
