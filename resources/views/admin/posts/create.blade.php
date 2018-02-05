@extends('admin.layout.admin')

@section('title', '| Create Post')

@section('stylesheets')

@endsection


@section('admin_content')
    <div class="container admin-container">
        <div class="admin-title">
            <h5>Create a New Post</h5>
        </div>
        <div class="row">
            <div class="col m7 s12">
                <div class="form">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" data-parsley-validate>
                        {{ csrf_field() }}
                        <div class="input-field">
                            <label for="author">Author</label>
                            <input type="text" name="author" value="{{ Auth::user()->name }}" readonly required>
                        </div>
                        <div class="input-field">
                            <label for="title">Title</label>
                            <input type="text" value="{{ old('title') }}" name="title" required>
                        </div>
                        <div class="input-field">
                            <label for="title">Description</label>
                            <input type="text" value="{{ old('description') }}" name="description" required>
                        </div>
                        <div class="input-field">
                            <label for="slug">Slug</label>
                            <input type="text" value="{{ old('slug') }}" name="slug" minlength="5" maxlength="255" required>
                        </div>
                        <div class="input-field">
                            <select name="category_id">
                                <option value="" disabled selected>Choose your option</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <label for="category_id">Category</label>
                        </div>
                        <div class="input-field">
                            <select name="tags[]" multiple>
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            <label for="tags">Tag</label>
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" value="{{ old('featured_image') }}" name="featured_image" accept="image/jpeg, image/png">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <div class="input-field">
                            <label for="body">Body</label>
                            <textarea name="body" class="materialize-textarea">{{ old('body') }}</textarea>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="btn btn-primary btn-block" value="Submit">
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
    </script>
    <script type="text/javascript">
        $('select').material_select();
    </script>
@endsection
