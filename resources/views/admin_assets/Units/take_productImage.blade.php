@extends('layouts.app')
@section('title', 'Admin - Customer')
@section('content')
<div role="main" class="main-content">

    <div class="page-content container container-plus">
<div class="card acard mt-2 mt-lg-3">
    <div class="card-header">
      <h3 class="card-title text-125 text-primary-d2">
        <i class="far fa-edit text-dark-l3 mr-1"></i>
       Customers
      </h3>
    </div>

    <div class="card-body px-3 pb-1">
          <form class="mt-lg-3" enctype="multipart/form-data" autocomplete="off" method="POST" action="{{route('update_selfei_image_customer',$customer->customer_id)}}">
          @csrf
          
        <div class="row">

            <div class="col-md-6">

                <div id="my_camera"></div>

                <br/>

                <input type=button value="Take Snapshot" onClick="take_snapshot()">

                <!-- <input type="hidden" name="customer_image" class="image-tag"> -->

            </div>

            <div class="col-md-6">

                <div id="results">Your captured image will appear here...</div>
<input type="file" name="customer_image" id="results" >
            </div>

            <div class="col-md-12 text-center">

                <br/>

                <button class="btn btn-success">Submit</button>

            </div>

        </div>

       
      </form>
    </div>
  </div>
    </div>
</div>
<script language="JavaScript">

    Webcam.set({

        width: 490,

        height: 390,

        image_format: 'jpeg',

        jpeg_quality: 90

    });

  

    Webcam.attach( '#my_camera' );

  

    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

        } );

    }

</script>

          @endsection
