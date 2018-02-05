@extends('admin.layout.admin')

@section('stylesheets')
@endsection

@section('title', '| Create Profile')

@section('admin_content')

<div class="container admin-container">
    <div class="row">
        <div class="col m7">
            <div class="admin-title">
                <h5>Update Profile</h5>
            </div>
            <form action="{{ route('bookStore') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col m12">
                        <label for="description">Description</label>
                        <input type="text" name="description" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m12">
                        <label for="bio">Short Bio</label>
                        <textarea type="text" name="bio" rows="4" data-length="150" class="materialize-textarea" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <select name="interest" multiple>
                            <option disabled selected>Please areas of interest</option>
                            @foreach($interests as $cat)
                                <option value="{{$cat->id}}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-field col m6">
                        <label for="local">Address</label>
                        <input type="text" name="address" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <label for="local">Local Goverment</label>
                        <input type="text" name="local" required>
                    </div>
                    <div class="input-field col m6">
                        <label for="state">State</label>
                        <input type="text" name="state" required>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field col m6">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" name="profile_pix" accept="image/jpeg,image/png,image/jpg">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a onclick="confirm('Are you sure?')" class="waves-effect waves-green btn grey">Cancel</a>
                    <button type="submit" class="waves-effect waves-teal btn blue-grey">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection