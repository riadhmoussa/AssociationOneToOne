@extends('layouts.menubar')
@section('content')
<form action="addperson" method="post">
    {{csrf_field()}}
    Name: <input class="form-control" type="text" name="username"><br>
    <input type="submit" value="Add Person" class="btn btn-primary btn-block">
</form>

<center><h2>Active Item in a List Group</h2></center>
<div class="list-group">
    @foreach($person as $p)
        <a  href="person/{{$p->id}}" class="list-group-item active">{{$p->username}}</a>
    @endforeach

</div>
@endsection