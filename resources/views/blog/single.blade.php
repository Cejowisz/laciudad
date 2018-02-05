@extends('pages.layout.master')

@section('title', "| $post->title")
@section('description', "$post->description")
@section('blog_url', asset($_SERVER['PHP_SELF']))
@section('blog_image', asset('uploads/' . $post->featured_image))


@section('content')


    <div class="container post-container">
        <div class="row">
            <div class="col s12 m8 l8">
                <img src="{{ Storage::url($post->featured_image) }}" class="responsive-img" alt="Laciudad Image">
                <p class="post-time"><i class="glyphicon glyphicon-time"></i> {{ date('M j, Y', strtotime($post->created_at)) }}</p>
                <h1 class="post-title pri-color"><b>{{ $post->title }}</b></h1>
{{--                @include('pages.partials._social_share')--}}
                {{-- <hr/>--}}
                <p>{!! $post->body !!}</p>

                <i class="fa fa-tags"></i>
                @foreach($post->tags as $tag)
                    <span class="label bck ho" style="margin-right: 10px; ">
                      <a href="{{ route('blog.tag', $tag->id) }}" style="text-decoration: none;color: #fff;">{{ $tag->name }}</a>
                    </span>
                @endforeach

                &nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-folder-open"></i>
                <span class="label bck ho">
                    <a href="{{ route('blog.category', $post->category->id) }}" style="text-decoration: none;color: #fff;"> {{ $post->category->name }}</a>
                </span>

                <div class="drop-comment">
                    <h5 class="p"><i class="fa fa-comment-o"></i> Drop your comment</h5>
                </div>

                <div class="fb-comments" data-href="http://afriplays.com/blog/{{ $post->slug }}" data-numposts="10"></div>



            </div>

            <div class="col s12 m4 l4">
                @include('pages.partials._sidebar')
            </div>
        </div>
    </div>


@endsection

@include('pages.partials._socials_script')
