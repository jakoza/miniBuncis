<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Guest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex flex-column">
            <h1 class="mt-3">New Guest!</h1>
            <h3>Enter the new guest information in the form bellow</h3>
        </div>
        <div class="row">
            <form action="{{route('guest.store')}}" autocomplete="on" method="POST" class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                @csrf
                <label for="guest_name">Guest name:</label><br>
                <input name="guest_name" class="col-sm-12 col-md-10 col-lg-8 col-xl-6" type="text" placeholder="enter guest name"><br>
                <label class="mt-1" for="guest_company">Guest company:</label><br>
                <input name="guest_company" type="text" class="col-sm-12 col-md-8 col-lg-6 col-xl-4"><br>
                <label class="mt-1" for="guest_postition">Guest Position:</label><br>
                <input name="guest_position"type="text"><br>
                <label for="guest_phone_number" class="mt-2">Guest phone number:</label><br>
                <input type="text" maxlength="14" class="pl-2"><br>
                <label class="mt-1" for="event_id">Event Participation:</label><br>
                    <select name="event_id" id="">
                        <option value="">BTT1</option>
                    </select><br>
                <button class="mt-3" type="submit">Submit</button><br>
            </form>
        </div>
        <a href="/">Back</a>
    </div>
</body>
</html>