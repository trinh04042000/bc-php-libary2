@extends('welcome')

@section('title', 'Libary Manager')

<table class="table">
    <h4 style="color: orange">Author List</h4>
    <thead class="thead-dark">
    <tr>
        <th scope="col">code</th>
        <th scope="col">Category</th>
        <th scope="col">Author</th>
        <th scope="col">Publsher</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Quallty in stock</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>
    </tr>
    </thead>

</table>
<a href="{{ route('libary.create') }}">Add new reader</a>

<button type="submit" class="btn btn-primary" onclick="window.history.go(-1); return false">Can</button>

