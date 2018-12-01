@extends('welcome')

@section('title', 'Libary Manager')


<table class="table">
    <h4 style="color: orange">Book List</h4>
    <thead class="thead-dark">
    <tr>
        <th scope="col">Author code</th>
        <th scope="col">Author Name</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">update</th>
        <th scope="col">deletes</th>

    </tr>
    </thead>



</table>
<a href="{{ route('libary.create') }}">Add new reader</a>
