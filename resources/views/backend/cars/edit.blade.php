@extends('layouts.base')
@section("custom_css")
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Add images of the car</h4>
                    <p class="sub-header text-warning">
                        Its recommended to add the front, back and side view. You should also add a picture of the inside
                    </p>

                    <form action="https://shreyu.coderthemes.com/" method="post" class="dropzone" id="myAwesomeDropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>

                        <div class="dz-message needsclick">
                            <i class="h1 text-muted  uil-cloud-upload"></i>
                            <h3>Drop files here or click to upload.</h3>
                        </div>

                        <div class="clearfix text-right mt-3">
                            <button type="submit" class="btn btn-danger"> <i class="uil uil-arrow-right mr-1"></i> Submit</button>
                        </div>
                    </form>

                </div>  <!-- end card-body -->
            </div>
            </div>
        </div>

@endsection


@section("javascript")
@stop
