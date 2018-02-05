@extends('admin.layout.admin')

@section('title', '| Laciudad Slider Update')

@section('stylesheets')

@endsection


@section('admin_content')
    <div class="container admin-container">
        <div class="admin-title">
            <h5 style="display: inline">Slider</h5>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form">
                    <form method="POST" action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate>
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                       {{-- <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Slider Description</label>
                            <input type="text" value="{{ $slider->description }}" name="description" class="form-control">
                        </div>--}}
                        <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" accept="image/jpeg, image/png">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')

@endsection

{{--@include('partials._footer')--}}