@extends('admin.layout.admin')

@section('title', '| Create Slider')

@section('stylesheets')

@endsection


@section('admin_content')
    <div class="container admin-container">
        <div class="admin-title">
            <h5>Slider</h5>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form">
                    <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate>
                        {{ csrf_field() }}

                        {{--<div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Slider Description</label>
                            <input type="text" name="description" class="form-control">
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
