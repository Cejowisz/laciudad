@extends('pages.layout.master')

@section('title', '| Contact')

@section('content')

    <div class="container">
        <div class="row" style="padding-bottom: 15px; padding-top: 25px;">
       @include('pages.partials._message')
            <div class="col m6 wow fadeInLeft" style="margin-bottom: 20px;">

                <h5 class="wwo pri-color" style="margin-top: 35px;">Get In Touch</h5>
                <p>
                    <span class="mi2"><i class="material-icons pri-color">phone</i></span>
                    <span class="mi2"><a href="tel:+2349050896842">09050896842</a></span>
                </p>
                <p>
                    <span><i class="material-icons pri-color">email</i></span>
                    <span><a href="mailto:info@wisemanconcept">info@wisemanconcept</a></span>
                </p>
            </div>
            <div class="col m6 wow fadeInRight" style="margin-bottom: 20px;">
                <form action="{{ route('postContact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col m6">
                            <div class="input-field">
                                <label for="name">Name</label>
                                <input type="text" value="{{ old('name') }}" name="name" class="" required >
                            </div>
                        </div>
                        <div class="col m6">
                            <div class="input-field">
                                <label for="company_name">Company Name</label>
                                <input type="text" value="{{ old('company_name') }}" name="company_name" class="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m6">
                            <div class="input-field">
                                <label for="phone">Phone</label>
                                <input type="text" value="{{ old('phone') }}" name="phone" class="" >
                            </div>
                        </div>
                        <div class="col m6">
                            <div class="input-field">
                                <label for="email">Email</label>
                                <input type="email" value="{{ old('email') }}" name="email" class="" required >
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <label for="how">How Did You Find Us?</label>
                        <input type="text" value="{{ old('how') }}" name="how" class="">
                    </div>

                    <div class="input-field">
                        <label for="message">Message</label>
                        <textarea type="text" name="message" data-length="200" class="materialize-textarea">{{ old('message') }}</textarea>
                    </div>

                    <div class="input-field">
                        <input type="submit" class="btn blue white-text" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection