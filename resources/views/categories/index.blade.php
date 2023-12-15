@extends('layouts.app')
@section('content')

<h2>Categories</h2>

<a href="{{ url('categories/create') }}" class="btn btn-primary mb-3 float-end">Add Category</a>

<table class="table table-bordered">
      <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->cat_id }}</td>
                  <td>{{ $row->cat_name }}</td>
                  <td><a href="{{ url('categories/edit/' . $row->cat_id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('categories/' . $row->cat_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection