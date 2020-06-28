<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>All Student</h1>
        <div>
            <table border="2">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Edit</th>
                </thead>

                <tbody>
                    @foreach($students as $s)
                        <tr>
                            <td>{{$s->name }}</td>
                            <td>{{$s->email }}</td>
                            <td>{{$s->dob }}</td>
                            <td><a href="{{URL::to('edit-student/'.$s->id)}}">Edit</a></td>
                         </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
