
@extends ('layouts.dashboard')
@section('page_heading','Enter New Citie Name')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
       
            <form role="form" action="../edit_todo/{{$TodoArr_name->id}}">
                {{ csrf_field() }}
                <div class="form-group">
                <div class="row">
                    <input type="text" name="name" class="form-control" value="{{$TodoArr_name->name}}">
             </div>
         </div>
                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
       
    </div>
</div>
</div>
@stop