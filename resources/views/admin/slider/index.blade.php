@extends('admin.layout.admin')

@section('title', '| Lacuidad Slider')

@section('stylesheets')

@endsection


@section('admin_content')
    <div class="container admin-container">
        <div class="admin-title">
            <h5 style="display: inline">Slider</h5>
            <a class="btn pull-right" style="margin-bottom: 5px" href="{{ route('slider.create') }}">Create Slider</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form">
                    <table>

                        <tbody>
                        @foreach($sliders as $artiste)
                            <tr>
                                <td>
                                    <img src="{{ Storage::url($artiste->image) }}" style="max-width: 140px;" class="responsive-img" alt="Lacuidad Image"></td>
                                <td>{{ $artiste->title }}</td>
                                <td>
                                    <a class='dropdown-button btn' href='#' data-activates='action'>Action</a>
                                    <ul id='action' class='dropdown-content'>
                                        <li>
                                            <a href="{{ route('slider.edit', $artiste->id) }}">Edit</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('slider.destroy', $artiste->id)}}" style="color: darkred">Delete</a>
                                            {{--<form method="POST" action="{{ route('slider.destroy', $artiste->id)}}">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button type="submit" style="color: darkred">Delete</button>
                                            </form>--}}
                                        </li>
                                    </ul>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $sliders->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')

@endsection

{{--@include('partials._footer')--}}