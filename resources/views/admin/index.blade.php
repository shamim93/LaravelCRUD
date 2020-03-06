@extends('layout')
@section('section')
    <div class="container">
        @if(session('successmsg'))
            <div class="alert alert-success">
                {{session('successmsg')}}
            </div>
        @endif
        <div class="row jumbotron">
            <a href="{{route('create')}}"class="btn btn-primary mb-5">Add New Info</a>
            <table class="table table-dark table-borderd table-striped">

             <thead>
                 <tr>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Sex</th>
                     <th>Area</th>
                     <th>Course</th>
                     <th>Action</th>
                 </tr>
                 @foreach($students as $student)
                     <tr>
                         <td>{{$student->name}}</td>
                         <td>{{$student->email}}</td>
                         <td>{{$student->sex}}</td>
                         <td>{{$student->area}}</td>
                         <td>{{$student->course}}</td>
                         <td>
                             <a href="{{route('edit',$student->id)}}" class="btn btn-info">Edit</a>
                             <form action="{{ route('destroy',$student->id) }}" method="post" onsubmit=" return confirm('Are you sure?')">
                                @csrf
                                @method("delete")
                            {{--                    <a href="{{ route('delete',$student->id) }}" class="btn btn-danger">Delete</a>--}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                         </td>
                     </tr>
                 @endforeach
             </thead>


            </table>
        </div>
    </div>
@endsection
