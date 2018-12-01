
@extends('welcome')

@section('title', 'Libary Manager')
<a href="{{ route('libary.listbook')}}" >Book</a>
<a href="{{ route('libary.listauthor') }}">Author</a>
<hr>
<table class="table">
    <h4 style="color: orange">Reader List</h4>
    <thead class="thead-dark">
    <tr>
        <th scope="col">code</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Image</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    @foreach($libarys as $key => $libary)
        <tbody>
        <tr>
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $libary->name }}</td>
            <td>{{ $libary->email }}</td>
            <td>{{ $libary->address }}</td>
            <td>{{ $libary->phone }}</td>
            <td><img src="{{'upload/images/' . $libary->image}}" style="height: 130px; width:100px"></td>
            <td><a href="{{ route('libary.edit', $libary->id) }}">edit</a></td>
            <td> <a href="{{ route('libary.destroy', $libary->id) }}">delete</a></td>
        </tr>
        </tbody>
    @endforeach
</table>
<a href="{{ route('libary.create') }}">Add new reader</a>

