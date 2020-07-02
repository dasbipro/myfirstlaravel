<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This Employees Table</title>
</head>

<body>
    <div>
        <h1> All Employees </h1>
        <a href="{{ URL::to('add-info')}}">Add Employee</a>
        <table border="1">
            <thead>

                <th>Name</th>
                <th>Email</th>
                <th>Dob</th>

            </thead>

            <tbody>
                @foreach($employees11 as $e)
                <tr>
                    <th> {{ $e -> Name }} </th>
                    <!--  here  ->  means the colume head from database -->
                    <th> {{ $e -> Email }} </th>
                    <th> {{ $e -> dob }} </th>


                </tr>
                @endforeach
            </tbody>

        </table>


    </div>

</body>

</html>
