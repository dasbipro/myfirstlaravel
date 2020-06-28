<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
        <h1>Edit Student</h1>

        <form method="post" action="{{URL::to('update-student/'.$students->id)}}">
        <!-- Here $students->id to update id -->

            {{ csrf_field() }}

            <div>
                <label>Name:</label>
                <input type="text" value="{{$students->name}}" name="name">
            </div>
            <div>
                <label>Email:</label>
                <input type="email" value="{{$students->email}}" name="email">
            </div>
            <div>
                <label>Dob:</label>
                <input type="date" value="{{$students->dob}}" name="dob">
            </div>
            <div>
                <input type="submit"  name="submit" value="Update">
            </div>



            </form>
</body>
</html>
