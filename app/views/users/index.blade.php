@extends('layouts.adminMaster')

@section('content')
<div class='row'>
<div class="md-12">
  <h2 id="tables-bordered">Registered users</h2>
   <div class="bs-example">
    <table class="table table-bordered">
   
      <thead>
        <tr>
          <th>#</th>
          <th>Username</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      	 @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{$user->username}} </td>
          <td>{{HTML::mailto("{$user->email}", " $user->email", ['class' => 'glyphicon glyphicon-envelope']) }} </td>
          <td>{{link_to("edit/{$user->id}", 'Edit', ['class' => "btn btn-primary btn-sm "])}} {{link_to("delete/{$user->id}", 'Delete',  ['class' => "btn btn-danger btn-sm"])}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div><!-- /example -->
	</div> <!-- end md-12 -->
</div> <!-- end row -->
@stop