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
                        Its recommended to add the front, back and side view. You should also add a picture of the inside <span class="text-danger">Maximun 10 images</span>
                    </p>

                    <form action="{{route('cars.update', ['car' => $car])}}" class="dropzone" id="my-awesome-dropzone" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>

                        <div class="dz-message needsclick">
                            <i class="h1 text-muted  uil-cloud-upload"></i>
                            <h3>Drop files here or click to upload.</h3>
                        </div>
                    </form>

                    <div class="clearfix text-center mt-3">
                        <a href="{{route('cars.show', ['car' => $car])}}" type="submit" class="btn btn-danger">
                            <i class="uil uil-arrow-right mr-1"></i>
                            Finish
                        </a>
                    </div>

                </div>  <!-- end card-body -->
            </div>
            </div>
        </div>

@endsection


@section("javascript")
<script>
    console.log('script started');

    Dropzone.options.myAwesomeDropzone = {
        maxFiles: 10,
        acceptedFiles: ".jpeg, .png, .jpg",
        init: function() {
            this.on('success', function(file, res) {
                console.log(res);
            })

            this.on('error' , function(errorMessage) {
                console.error('errors occured');
            })
        }
        }
</script>
@stop
