@extends('admin.layout.admin')

@section('title', '| Blog Posts')

@section('admin_content')
    <div class="container admin-container">
        <div class="admin-title">
            <h5><a href="{{ route('posts.create') }}" class="btn">Create Post <i class="fa fa-plus"></i></a></h5>
        </div>
        <div class="">
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th width="20%">Title</th>
                    <th width="60%">Content</th>
                    <th width="20%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><p>{{ $post->title }}</p></td>
                        <td><p>{{ substr(strip_tags($post->body), 0, 70) }} {{ strlen(strip_tags($post->body)) > 70 ? "..." : "" }}</p></td>
                        <td>
                            <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>

                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="{{ route('posts.show', $post->id) }}">View</a></li>
                                <li><a href="{{ route('posts.edit', $post->id) }}">Edit</a></li>

                                <li><a href="#!">
                                        <form style="display: inline;" method="POST" action="{{ route('posts.destroy', $post->id)}}">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button type="submit" class="">Delete</button>
                                        </form>

                                        {{--<a type="submit" class="">Delete</a>--}}
                                    </a></li>

                            </ul>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            {{ $posts->links() }}
        </div>
    </div>
@endsection

