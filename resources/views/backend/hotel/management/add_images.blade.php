@extends('layouts.base')
@section("custom_css")
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="header-title mt-0 mb-1">Add Hotels Cover Images</h3>

                    <form action="{{route('hotels.update_cover_images', ['hotel' => $hotel])}}" class="dropzone" id="hotel-covers-dropzone" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>

                        <div class="dz-message needsclick">
                            <i class="h1 text-muted  uil-cloud-upload"></i>
                            <h3>Drop files here or Click to upload.</h3>
                        </div>
                    </form>

                    <div class="clearfix text-center mt-3">
                        <a href="{{route('hotels.preview', ['hotel' => $hotel])}}" type="submit" class="btn btn-danger">
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
    $(document).ready(function() {
    console.log('Script ready')
        Dropzone.options.hotelCoversDropzone = {
        acceptedFiles: ".jpeg, .png, .jpg",
        init: function() {
            this.on('complete', function(res) {
                console.log('complete');
            })

            this.on('error' , function(errorMessage) {
                console.error('errors occured');
            })
        }
        }
    })
</script>
@stop
