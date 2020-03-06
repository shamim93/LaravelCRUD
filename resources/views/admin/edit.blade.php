@extends('layout')
@section('section')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2>Update the Information</h2>

                <form action="{{route('update',$students->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{$students->name}}" class="form-control">
                        @error ('name')
                            <span class="alert alert-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{$students->email}}" class="form-control">
                        @error ('email')
                            <span class="alert alert-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group"
                        <label class="radio-inline"><input type="radio" name="sex" value="Male" >Male</label>
                        <label class="radio-inline"><input type="radio" name="sex" value="Female" >Female</label>
                        @error ('sex')
                            <span class="alert alert-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="area">Area:</label>
                        <select  name="area" class="form-control">
                            <option value="">Select</option>

                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barishal">Barishal</option>
                            @error ('area')
                                <span class="alert alert-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </select>

                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline"><input type="checkbox" name="course" value="Free Course">Want Free Course</label>
                        <label class="checkbox-inline"><input type="checkbox" name="course" value="Some Coffee">Maybe some coffe</label>
                        <label class="checkbox-inline"><input type="checkbox" name="course" value="Paid Course">Paid Course</label

                    </div>
                    @error ('course')
                        <span class="alert alert-danger">
                            {{$message}}
                        </span>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
