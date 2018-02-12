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
            <form action="{{ route('profileStore') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col m12">
                        <label for="description">Description</label>
                        <input type="text" value="{{ old('description') }}" name="description" placeholder="I am a professional Photographer with passion for wedding coverage" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m12">
                        <label for="bio">Short Bio</label>
                        <textarea
                                type="text"
                                placeholder="I am a certified Photographer with a 3 year experience. I have covered a good number of Ekiti state government functions "
                                name="bio" rows="4" data-length="150" class="materialize-textarea" required>
                                {{ old('bio') }}
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <select name="interest[]" multiple>
                            <option disabled selected>Please areas of interest</option>
                            @foreach($interests as $cat)
                                <option value="{{$cat->id}}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-field col m6">
                        <select name="vocation">
                            <option disabled selected>Select Vocation</option>
                            @foreach($vocations as $cat)
                                <option value="{{$cat->id}}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m12">
                        <label for="address">Address</label>
                        <input type="text" value="{{ old('address') }}" name="address" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <label for="local">Local Goverment</label>
                        <input type="text" value="{{ old('local') }}" name="local" required>
                    </div>
                    <div class="input-field col m6">
                        <label for="state">State</label>
                        <input type="text" value="{{ old('state') }}" name="state" required>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field col m12">
                        <div class="btn">
                            <span>Profile Picture</span>
                            <input type="file" value="{{ old('profile_pix') }}" name="profile_pix" accept="image/jpeg,image/png,image/jpg">
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