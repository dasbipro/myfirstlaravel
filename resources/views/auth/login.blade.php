<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
    <div class="col-md-8 offset-md-2">
        <form method="post" action="{{URL::to('loginstore') }}">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email" id="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="">
            </div>
            <div class="form-group">
                <input class="bt btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
    </div> 
</body>
</html>