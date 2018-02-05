@extends('admin.layout.admin')

@section('title', '| Edit Post')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">


@endsection


@section('admin_content')
    <div class="container admin-container">
        <div class="admin-title">
            <h5>Edit Post <i class="fa fa-edit"></i></h5>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form">
                    <form method="POST" action="{{ route('posts.update', $post->id)}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="input-field">
                            <label for="title">Title</label>
                            <input type="text" name="title"value="{{ $post->title }}" required>
                        </div>
                        <div class="input-field">
                            <label for="title">Description</label>
                            <input type="text" name="description" value="{{ $post->description }}" required>
                        </div>
                        <div class="input-field">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" value="{{ $post->slug }}" required>
                        </div>
                        <div class="input-field">
                            <select name="category_id" class="form-control" autofocus>
                                <option>Select category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <label for="category_id">Category</label>
                        </div>
                        <div class="input-field">
                            <label for="tags">Tag</label>
                            <select name="tags[]" multiple="multiple">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="featured_image">Update Featured Image</label>
                            <input type="file" name="featured_image" accept="image/jpeg, image/png">
                        </div>
                        <div class="input-field">
                            <label for="body">Body</label>
                            <textarea name="body" class="materialize-textarea" required>{{ $post->body }}</textarea>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')


   <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
   <script>
       tinymce.init({
           selector:'textarea',
           plugins: 'link code image imagetools',
           paste_data_images: true
       });

       $('select').material_select();

   </script>
@endsection