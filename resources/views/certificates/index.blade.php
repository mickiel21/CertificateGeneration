@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Certificates</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('certificates.create') }}"> Create New Certificate</a>
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
            <th>User Name</th>
            <th>Certificates</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($certificates as $certificate)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $certificate->user->name }}</td>
            <td>{{ $certificate->lesson->description }}</td>
            <td>
                <form action="{{ route('certificates.destroy',$certificate->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('certificates.show',$certificate->id) }}">Show</a>--}}
    
                    <a class="btn btn-primary" href="{{ route('certificates.edit',$certificate->id) }}">Edit</a> 

                    <a class="btn btn-primary" href="{{ route('certificates.generate',$certificate->id) }}">Generate</a>
   
                    @csrf
                    @method('DELETE')
      
                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $certificates->links() !!}
      
@endsection