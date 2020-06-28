<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div>
            <h2>Add Student</h2>
        <form method="post" action="{{URL::to('insert-student') }}">

            {{ csrf_field() }}

            <div>
                <label>Name:</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Dob:</label>
                <input type="date" name="dob">
            </div>
            <div>
                <input type="submit" action="Add" name="submit">
            </div>



            </form>
        </div>
</body>
</html>
