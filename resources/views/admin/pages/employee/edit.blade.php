{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Edit</title>
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
            <li class="breadcrumb-item active">Edit  Employee</li>
        </ol>
        {{-- <div class="jumbotron text-center"> --}}
        <div class="page-header">
            <h4>Edit Employee</h4>
            @if (Session::has('success'))
            <div class="alert alert-success">
                <strong>{{ Session::get('success')}}</strong>
            </div>
            @endif
        </div>
        <div class="section">
            <form method="post" action="{{ URL:: to('update-employee/'.$employee->id) }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Enter Name</label>
                    <input type="text" value="{{$employee->name }}" class="form-control" name='name'>
                </div>

                <div class="form-group">
                    <label for="">Enter Email</label>
                    <input type="email" value="{{$employee->email}}" class="form-control" name='email'>
                </div>

                <div class="form-group">
                    <label for="">Select Gender</label>
                    <select class="form-control" name="gender" id="">
                        <option value="">Select Gender</option>
                        <option {{($employee->gender)=="Male" ? 'selected': ' '}} value="Male">Male</option>
                        <option {{($employee->gender)=="Female" ? 'selected': ' '}} value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Salary</label>
                    <input type="number" value="{{$employee->salary}}" class="form-control" name='salary'>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="" cols="10" rows="4">"{{$employee->description}}"</textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Update">
                    <a class="btn btn-secondary" href="{{URL::to('employees')}}">Back</a>
                </div>
                
            </form>
        </div>
    </div>
</main>
{{-- </body>
</html> --}}

@endsection

@section('myscript')



@endsection