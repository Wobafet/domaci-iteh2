<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Passengers</title>
</head>
<body>
    
    <table class="table table-striped">

    <thead>
    
    <tr>
    <thead>
    
    <th>First name</th>
    <th>Last name</th>
    <th>Phone number</th>
    
    </thead>

    <tbody>
    <tr>
    
   @foreach($passengers as $passenger)
 <tr>
<td>{{$passenger->firstName}}</td>
<td>{{$passenger->lastName}}</td>
<td>{{$passenger->phoneNumber}}</td>

 </tr>
@endforeach

</tr>
    </tbody>
    
    </tr>
    </thead>
    </table>
</body>
</html>