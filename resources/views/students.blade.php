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
            <table>
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                </thead>

                <tbody>
                    @foreach($students as $s)
                        <tr>
                            <td>{{$s->name }}</td>
                            <td>{{$s->email }}</td>
                            <td>{{$s->dob }}</td>
                         </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
