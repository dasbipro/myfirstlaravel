{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .modal {
            color: black;
        }
    </style>
</head>
<body> --}}
@extends('admin.layouts.default')
@section('abc') 
<main>
    <div class="container">
        <h1 class="mt-4">Employee Section</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Employee</li>
        </ol>

        {{-- <div class="jumbotron text-center"> --}}
        <div class="page-header"></div>    
            <h2>List of  Employee</h2>
        <div class="section">
            <a class="btn btn-primary" href="{{URL::to('employee-add')}}">Add</a>
        <div class="table-responsive">
            {{-- <table id="employeetbl" class="table table-dark table-striped"> --}}
            <table id="employeetbl" class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($employees as $e) 
                    <tr>
                        <td>{{$e->name}}</td>
                        <td>{{$e->email}}</td>
                        <td>{{$e->salary}}</td>
                        <td>{{$e->gender}}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{URL::to('edit-employee/'.$e->id)}}">Edit</a>
                            <a class="btn btn-danger"  data-toggle="modal" data-target="#a{{$e->id}}" >Delete</a>
                            <div class="modal" id="a{{$e->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title">Delete Confirmation</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                    Are you Sure you want to Delete <b><i>{{$e->name}}</i></b> ?
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-success" href="{{URL::to('delete-employee/'.$e->id)}}">Yes</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    
{{-- </body>
</html> --}}

@endsection

@section('myscript')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script> src="https://code.jquery.com/jquery-3.5.1.js" </script>
    <script> src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" </script>
    <script> src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" </script>
<script>
    $(document).ready( function () {
    $('#employeetbl').DataTable();
});
</script>
    <style>
        .modal {
            color: black;
        }
    </style>


@endsection