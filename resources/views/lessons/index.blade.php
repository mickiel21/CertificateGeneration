@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lessons</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lessons.create') }}"> Create New Lesson</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($lessons as $lesson)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $lesson->title }}</td>
            <td>{{ $lesson->description }}</td>
            <td>
                <form action="{{ route('lessons.destroy',$lesson->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('lessons.show',$lesson->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('lessons.edit',$lesson->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $lessons->links() !!}
      
@endsection