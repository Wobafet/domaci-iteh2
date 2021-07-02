<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trip</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex p-2 justify-content-center ">
        <form action="http://127.0.0.1:8000/trip/post" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    Beggining destination:
                    <input type="text" value="{{ $schedule->beginDes }}" class="form-control" disabled id="">

                </div>
                =>
                <div class="col">
                Beggining destination:
                    <input type="text" value="{{ $schedule->endDes }}" class="form-control" disabled id="">

                </div>
            </div>
            <input type="text" name="schedule_id" value="{{ $schedule->id}}" hidden class="form-control">
           <div class="row">

                <div class="col">
                    First name:
                    <input type="text" name="firstName" class="form-control" id="">

                </div>

                <div class="col">
                    Last name:
                    <input type="text" name="lastName" class="form-control" id="">

                </div>
            </div>
            <div class="row">
             
                <div class="col">
                    Phone number:
                    <input type="text" name="phoneNumber" class="form-control" id="">

                </div>
            </div>
          
            <div class="row">
                <div class="col">
                    <input type="submit" value="Get ticket" class="btn btn-success form-control">

                </div>
            </div>

        </form>
    </div>
</body>

</html>