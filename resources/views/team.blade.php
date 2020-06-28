<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <p>This is team page!</p>
        <p>{{ $myname }}</p> <!-- what I will input in addressbar -->

        <ul>

            @foreach($names as $me) <!-- all the names array putting in the me variable -->
                <li> {{$me}} </li>
            @endforeach


        </ul>
<!-- here for each is used for creating loop of <li> -->




</body>
</html>
