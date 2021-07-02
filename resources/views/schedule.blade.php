<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Schedule</title>
</head>
<body>
    
<table class="table table-striped">

<thead>

<tr>
<thead>

<th>Beginning destination</th>
<th>Ending destination</th>
<th>Date</th>
</thead>

<tbody>
<tr>



@foreach($schedules as $schedule)
     <tr>
    <td>{{$schedule->beginDes}}</td>
    <td>{{$schedule->endDes}}</td>
    <td>{{$schedule->date}}</td>

    <td>  

    <a href={{ 'http://127.0.0.1:8000/schedule/trip?schedule_id=' . $schedule->id }}
                                class="btn btn-primary btn-block">Add passenger</a>
    <a   id="{{$schedule->id}}" class="btn btn-danger btn-block delete">Delete schedule</a>
    </td>
     </tr>
    @endforeach
    </tr>

</tbody>

</tr>
</thead>
</table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="{{ URL::asset('js/scripts/script.js ') }}"></script>
</body>


</html>