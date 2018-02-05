
<div class="sidebar-top"></div>
{{--<div class="folow">
    <h6><b>Follow:</b></h6>
</div>
<div class="fb-follow" data-href="https://www.facebook.com/infoaffair"
     data-layout="standard" data-size="small" data-show-faces="true">

</div>
<div style="margin-top: 15px;">
    <a class="twitter-follow-button" data-show-count="true" href="https://twitter.com/InfoAffairs">
        <i class="fa fa-twitter"></i>
    </a>
</div>--}}
{{--<div>
    <a href="https://instagram.com/infoaffair"><i class="fa fa-instagram"></i></a>
</div>--}}
<div class="trend">
    <h6><b>Trending posts</b></h6>
    <ul>
        @foreach($trends as $post)
            <li><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</div>
<div class="cat">
    <h6><b>Categories</b></h6>
    <ul>
        @foreach($categories as $category)
            <li><a href="{{ route('blog.category', $category->id) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>

