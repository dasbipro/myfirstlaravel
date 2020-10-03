<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
<body>
    <div class="container">
        <h1>All Students</h1>
        <div>
            <table border="2">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Salary</th>
                    <th>Contact</th>
                    <th>City</th>
                    <th>IP</th>
                </thead>

                <tbody>
                    @foreach($data as $s)
                        <tr>
                            <td>{{$s->name }}</td>
                            <td>{{$s->email }}</td>
                            <td>{{$s->DOB }}</td>
                            <td>{{$s->Salary }}</td>
                            <td>{{$s->Contact }}</td>
                            <td>{{$s->City }}</td>
                            <td>{{$s->ip }}</td>
                            <td><a href="{{URL::to('edit-student/'.$s->id)}}">Edit</a></td>
                         </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
