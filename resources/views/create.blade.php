
@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Please Sign Up')
               @section ('login_panel_body')

               <h2>Register</h2>
               <form method="POST" action="/register">
                   {{ csrf_field() }}
                   <div class="form-group">
                       <label for="name">Name:</label>
                       <input type="text" class="form-control" id="name" name="name">
                   </div>

                   <div class="form-group">
                       <label for="email">Email:</label>
                       <input type="email" class="form-control" id="email" name="email">
                   </div>

                   <div class="form-group">
                       <label for="password">Password:</label>
                       <input type="password" class="form-control" id="password" name="password">
                   </div>
                   <div class="form-group">
                       <label for="password_confirmation">Password Confirmation:</label>
                       <input type="password" class="form-control" id="password_confirmation"
                              name="password_confirmation">
                   </div>

                   <div class="form-group">
                       <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                   </div>
               </form>

               <a href="/log">login</a>



                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop


