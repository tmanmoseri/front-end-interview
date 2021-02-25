<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Log In</h2>

    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>

    <a href="/register">Register</a>
</body>
</html>
-->

@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Please Sign In')
               @section ('login_panel_body')

               <h2>Log In</h2>

               <form method="POST" action="/login">
                   {{ csrf_field() }}
                   <div class="form-group">
                       <label for="email">Email:</label>
                       <input type="email" class="form-control" id="email" name="email">
                   </div>

                   <div class="form-group">
                       <label for="password">Password:</label>
                       <input type="password" class="form-control" id="password" name="password">
                   </div>

                   <div class="form-group">
                       <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
                   </div>

               </form>

               <a href="/register">Register</a>

                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop