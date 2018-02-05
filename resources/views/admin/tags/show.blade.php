@extends('admin.layout.admin')

@section('title', "| $tag->name Tag")

@section('admin_content')
    <div class="container">
        <div class="row">
            @include('admin.partials._message')
            <div class="col-sm-8">
                <h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} posts</small></h1>
            </div>
            <div class="col-sm-4">
                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-xs">Edit</a><br>
                <form action="{{ route('tags.destroy', $tag->id) }}" method="DELETE">
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                    <tr>#</tr>
                    <tr>Title</tr>
                    <tr>Tags</tr>
                    <tr></tr>
                    </thead>

                    <tbody>
                    @foreach($tag->posts as $post)
                        <tr>

                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                @foreach($post->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="btn-btn-default"></a>View</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection