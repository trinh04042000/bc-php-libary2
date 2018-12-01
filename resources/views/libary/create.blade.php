@extends('welcome')
@section('title', 'Reader List')

<form action="{{ route('libary.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="" name="name">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">email</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">	address</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="address">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">phone</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="phone">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">image</label>
        <input type="file" class="form-control" placeholder="" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="submit" class="btn btn-primary" onclick="window.history.go(-1); return false">Can</button>

</form>
