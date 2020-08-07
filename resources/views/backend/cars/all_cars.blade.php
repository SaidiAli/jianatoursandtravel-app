@extends('layouts.base')
@section("custom_css")
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
                @if(Session::has('alert'))
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="alert {{ Session::get('alert-class', 'alert-danger') }} " role="alert" >
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" class="">&times;</span>
                            </button>
                            <strong class="text-center">{{ Session::get('alert') }}!</strong>
                        </div>
                    </div>
                </div>
                @endif
                <h2>All cars</h2>
            </div>
        </div>

@endsection


@section("javascript")
@stop
