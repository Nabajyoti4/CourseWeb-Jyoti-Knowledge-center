@extends('layouts.admin')
@section('title')
    Course Create
@endsection

@section('links')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Course</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{route('admin.courses.update', $course->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group font-weight-bold">
                <label for="title">Course Title:</label>
                <input type="text" style="border-radius: 20px;" value="{{$course->title}}" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter course title">
                @error('title')
                <div class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="form-group font-weight-bold">
                <label for="description">Description:</label>
                <textarea type="text" style="border-radius: 20px;" rows="3" cols="4" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Enter course description">{{$course->description}}</textarea>
                @error('description')
                <div class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="form-group font-weight-bold">
                <label for="price">Course Price:</label>
                <input type="text" style="border-radius: 20px;" value="{{$course->price}}" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Enter course price">
                @error('price')
                <div class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="form-group font-weight-bold">
                <label for="image">Change Image:</label>
                <input type="file" style="border-radius: 20px;" class="form-control" name="image">
            </div>

            <div class="form-group font-weight-bold">
                <label for="form_no">Form Number:</label>
                <input type="text" value="{{$course->form_no}}" style="border-radius: 20px;" class="form-control" name="form_no" placeholder="Enter form number">
            </div>

            <div class="form-group font-weight-bold">
                <label for="form">Change Form Pdf:</label>
                <input type="file" style="border-radius: 20px;" class="form-control" name="form">
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Update</button>

        </form>
    </div>
@endsection

