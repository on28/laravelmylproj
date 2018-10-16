@extends('layouts.default')

@section('content')



        <h1><b>Welcome to our about Contact Page.</b></h1>
        <p>Please use the form and phone number on this site to contact the site owner for sponsorship <br> or if you have any questions about laravel</p>

        <form action="/contact" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="yourname@domain.com">
            </div>

            <div class="form-group">
                <label for="body">Please enter your message below</label>
                <textarea name="body" class="form-control" id="body" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>


@endsection