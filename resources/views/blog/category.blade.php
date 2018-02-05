@extends('pages.layout.master')

@section('title', "| $category->name Category")



@section('content')
    <div class="banner">
        <img src="{{ asset('img/blog.jpg') }}" class="responsive-img ban" alt="Lacuidad Image">
        <div class="blog-banner center-align">
            <h1 class="white-text">
                <b>
                    {{ $category->name }} Category
                </b>
            </h1>
        </div>
    </div>
    <div class="container post-container">
        <div class="row">
            <div class="col s12 m9 l9">
                <div class="row">

                    {!! $category->posts()->count() == 0 ? "<h4>There is no Post associated with this category</h4>" : ""!!}
                    @foreach($category->posts as $post)
                        <div class="col col m6 l6">
                            <div class="blog-post">
                                <a href="{{ route('blog.single', $post->slug) }}"><img src="{{ asset('uploads') }}/{{ $post->featured_image }}" class="responsive-img" alt="Lacuidad Image"></a>
                                <div class="add-padding-post">
                                    <h1><b><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></b></h1>
                                    <p>{{ substr(strip_tags($post->body), 0, 150) }} {{ strlen(strip_tags($post->body)) > 150 ? "..." : "" }}</p>
                                    <div class="">
                                        <a href="{{ route('blog.single', $post->slug) }}" class="btn purple darken-4">Read More</a>
                                        {{--<p cla  ss="" style="display: inline">{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>--}}
                                    </div>
                                    <div class="social-share">
{{--                                        @include('pages.partials._social_share')--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col s12 m3 l3">
                @include('pages.partials._sidebar')
            </div>
        </div>

    </div>
@endsection
