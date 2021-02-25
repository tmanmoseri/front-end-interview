

@extends('layouts.dashboard')
@section('page_heading','')

@section('section')

<div class="col-sm-12">
    <div class="row">


        <div class="col-sm-12">
            @section ('cotable_panel_title','Cities Table')
            @section ('cotable_panel_body')
            <table class="table table-bordered">
                <thead>

                    <tr class="warning">
                        <td>Cod</td>
                        <td>Name</td>
                        <td>Created At</td>
                        <td>updated_at</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($TodoArr as $todo)
                    <tr class="success">
                      <td>{{$todo->id}}</td>
                      <td>{{$todo->name}}</td>
                      <td>{{$todo->created_at}}</td>
                      <td class="danger">{{$todo->updated_at}}</td>
                      <td class="info"><a href="edit/{{$todo->id}}">Edit</a> | <a href="delete/{{$todo->id}}">Delete</a></td>
                  </tr>
                    @endforeach

                    <tr class="warning">

                    </tr>
                    <tr>

                    </tr>
                    <tr class="danger">

                    </tr>
                </tbody>
            </table>
            <div class="pagination d-flex justify-content-center">

                {{ $TodoArr->links() }}
           </div>

            @endsection
            @include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
        </div>
</div>
@stop