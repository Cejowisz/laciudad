@extends('admin.layout.admin')

@section('title', '| Edit Category')

@section('admin_content')
    <div class="container">

                @include('partials._message')
                <form class="form-horizontal" role="form" method="POST" action="{{ route('categories.update', $category->id ) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <h3>New Category </h3>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value="{{ $category->name }}" name="name" class="form-control" placeholder="Set Category">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </form>
    </div>

@endsection