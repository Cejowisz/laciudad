@extends('admin.layout.admin')

@section('stylesheets')
    {{--<link rel="stylesheet" href="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.min.css">--}}
@endsection

@section('title', '| Book Create')

@section('admin_content')
    <div class="container admin-container">
        <a class="waves-effect waves-light btn" style="margin-top: 10px;" href="#addModal">Add PDF</a>
        <!-- Modal Structure -->
        <div id="addModal" class="modal">
            <div class="modal-content">
                <h4 class="modal-title"></h4>
                <form action="{{ route('bookStore') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Book Title</label>
                        <input type="text" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Book Description</label>
                        <textarea type="text" name="description" rows="4" data-length="150" class="materialize-textarea" required></textarea>
                    </div>
                    <div class="form-group">
                        <select name="category">
                            <option disabled selected>Please select one</option>
                            @foreach($book_categories as $cat)
                                <option value="{{$cat->id}}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" name="pdf" accept="application/pdf">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="modal-close waves-effect waves-green btn-flat add">Add</button>
                        <a onclick="confirm('Are you sure?')" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        @if(count($books) > 0)
        <table id="pdfTable">
            <thead>
            <tr>
                <th>S/N</th>
                <th>File</th>
                <th>Description</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @for($i = 0; $i < count($books); $i++)
                <tr>
                    <td>{{ $i + 1}}</td>
                    <td><a href="{{ Storage::url($books[$i]->pdf) }}" target="_blank">{{ $books[$i]->title }}</a></td>
                    <td>{{ $books[$i]->description }}</td>
                    <td>
                        <a class='dropdown-button btn' href='#' data-activates='action'>Action</a>
                        <ul id='action' class='dropdown-content'>
                            <li><a href="#!">Edit</a></li>
                            <li><a href="{{ route('deleteBook', $books[$i]->id) }}" style="color: darkred">Delete</a></li>
                        </ul>
                    </td>
                </tr>
            @endfor
            </tbody>
        </table>
        @else
            <h5>You are yet to add PDF</h5>
        @endif

    </div>
@endsection

@section('scripts')

@endsection

