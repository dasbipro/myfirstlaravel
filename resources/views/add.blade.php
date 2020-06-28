<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add To Database </title>
</head>

<body>
    <div>
        <form method="post" action="{{URL::to('insert-employee')}}">
            {{csrf_field() }}
            <!-- when we write form we must add csrf after the form -->
            <div>
                <label>Name:</label>
                <input type="text" name="Name">
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="Email">
            </div>
            <div>
                <label>Date:</label>
                <input type="date" name="dob">
            </div>
            <div>
                <input type="submit" value="Add" name="submit">
            </div>
        </form>
    </div>
</body>

</html>
