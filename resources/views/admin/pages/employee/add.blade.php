{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body> --}}
@extends('admin.layouts.default')
@section('abc') 
<main>   
    <div class="container">
        <h1 class="mt-4">Employee Section</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Employee</li>
        </ol>
        {{-- <div class="jumbotron text-center"> --}}
        <div class="page-header col-md-8 offset-md-2">
            <h4>Add Employee</h4>
            @if (Session::has('success'))
            <div class="alert alert-success">
                <strong>{{ Session::get('success')}}</strong>
            </div>
            @endif
        </div>
        <div class="section col-md-8 offset-md-2">
            <form method="post" action="{{ URL:: to('store-employee') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Enter Name</label>
                    <input type="text" value="{{ old('name') }}" required class="form-control" name='name'>
                    @if ($errors->first('name'))
                    <div class="alert alert-danger"> 
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Enter Email</label>
                    <input type="email" value="{{ old('email') }}" required class="form-control"  name='email'>
                    @if ($errors->first('email'))
                    <div class="alert alert-danger"> 
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Select Gender</label>
                    <select required class="form-control" value="{{ old('gender') }}" name="gender" id="">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @if ($errors->first('gender'))
                    <div class="alert alert-danger"> 
                        {{ $errors->first('gender') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">DOB</label>
                    <input type="date" required class="form-control" value="{{ old('dob') }}" name='dob'>
                    @if ($errors->first('dob'))
                    <div class="alert alert-danger"> 
                        {{ $errors->first('dob') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Salary</label>
                    <input type="number" required class="form-control" value="{{ old('salary') }}" name='salary'>
                    @if ($errors->first('salary'))
                    <div class="alert alert-danger"> 
                        {{ $errors->first('salary') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea required class="form-control" value="{{ old('description') }}" name="description" id="" cols="10" rows="4"></textarea>
                    @if ($errors->first('description'))
                    <div class="alert alert-danger"> 
                        {{ $errors->first('description') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Add">
                    <a class="btn btn-secondary" href="{{URL::to('employees')}}">Back</a>
                </div>
                
            </form>
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
    </div>
@endif
            </div>
        </div>
    </div>
</main>
{{-- </body>
</html> --}}


@endsection

@section('myscript')



@endsection