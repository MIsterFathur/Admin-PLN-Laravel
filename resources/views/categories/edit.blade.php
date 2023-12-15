@extends('layouts.app')

@section('content')
    <h2>Edit Category</h2>

    <form action="{{ url('categories/' . $row->cat_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAME</label>
            <input type="text" name="cat_name" id="" class="form-control" value="{{ $row->cat_name }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
