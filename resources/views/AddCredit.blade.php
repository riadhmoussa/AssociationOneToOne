@extends('layouts.menubar')
@section('content')
    <form action="addcredit" method="post">
        {{csrf_field()}}
    Person Name : <select class="form-control" name="person_id">
        @foreach($person as $p)
            <option value="{{$p->id}}">{{$p->username}}</option>
        @endforeach
    </select><br/>
        Credit Number : <input class="form-control" type="number" name="credit_number"><br>
        Credit Number : <input class="form-control" type="date" name="exp_date"><br>
        <input type="submit" value="Add Credit Cart" class="btn btn-primary btn-block">
    </form>
@endsection

