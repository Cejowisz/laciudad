<ul id="slide-out" class="side-nav fixed z-depth-4">
    <h6 class="dash-name">Lacuidad</h6>

    <li><a class="active" href="{{ route('admin') }}"><i class="material-icons">dashboard</i>Overview</a></li>

    <li>
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">Blog<i class="material-icons">record_voice_over</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ route('posts.create') }}">Create Post</a></li>
                        <li><a href="{{ route('posts.index') }}">Post List</a></li>
                        <li><a href="{{ route('categories.index') }}">Category List</a></li>
                        <li><a href="{{ route('tags.index') }}">Tag List</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>

    <li>
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">Slider<i class="material-icons">theaters</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ route('slider.create') }}">Upload Slider</a></li>
                        <li><a href="{{ route('slider.index') }}">Slider List</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>


    <li><a href="{{ route('book.create') }}"><i class="fa fa-book fa-fw"></i> eBooks</a></li>
    <li><a href="#"><i class="material-icons">feedback</i>Support</a></li>
</ul>

<main>
    <section class="content">
        <div class="page-announce valign-wrapper">
            <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a>
            <div class="row" style="width: 100%;">
                <div class="col s2 offset-s10">
                    <a class="user-dash-name" href=""></a>
                    <span><a href="#"><i class="dropdown-button material-icons pri-color dash-app" data-activates='admin-dash'>apps</i></a></span>
                    <ul id='admin-dash' style="z-index: 99999" class='dropdown-content'>
                        <li><a href="{{ route('profileCreate') }}">Profile</a></li>
                        <li><a href="#!">View</a></li>
                    </ul>
                </div>
            </div>
        </div>

