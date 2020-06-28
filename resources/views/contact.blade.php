<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my Contact Details</title>
</head>
<body>
  <h1>This is My Contact List</h1>
  <p>{{ $contactdetails }}</p> <!-- what I will input in addressbar -->
  <ul>
    <!-- <li></li>
    <li></li>
    <li></li> -->
    <!-- here foreach loop is used instead of writing li for three times -->
    @foreach($contactlist as $c)  <!-- all the contactlist putting in the me variable -->
        <li>{{ $c }}</li>
    @endforeach

  </ul>

</body>
</html>
