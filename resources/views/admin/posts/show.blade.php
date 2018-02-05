@extends('admin.layout.admin')

@section('title', "| $post->title")



@section('admin_content')
    <div class="container admin-container">
        <div class="row">
            <div class="admin-title">
                <h5>
                    <b>{{ $post->title }}</b>
                    <span class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('posts.create') }}">Creat Post</a>
                    </span>
                </h5>
            </div>
            <div class="col-sm-8 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="{{ Storage::url($post->featured_image) }}" class="responsive-img" alt="Laciudad Image">

                    </div>
                    <div class="panel-body">
                        {!! $post->body !!}<br/>
                        @foreach($post->tags as $tag)
                            <span class="label label-default" style="margin-right: 5px; ">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                    {{--<div class="panel-footer">Article written by: </div>--}}
                </div>
            </div>

            <div class="col-sm-4 col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>Url</label>
                        <a href="{{ url('blog') }}/{{$post->slug}}">{{ url('blog') }}/{{$post->slug}}</a>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Category</label>
                        <p>{{ $post->category->name }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Created at:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Updated at:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <div class="col-sm-6">
                            <form method="POST" action="{{ route('posts.destroy', $post->id)}}">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="pull-right btn red">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

