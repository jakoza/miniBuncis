<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex flex-column">
            <h1 class="mt-3">New Event!</h1>
            <h3>Enter the new event information in the form bellow</h3>
        </div>
        <div class="row">
            <form action="{{route('event.store')}}" autocomplete="on" method="POST" class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                @csrf
                <label for="event_name">Event name:</label><br>
                <input name="event_name" class="col-sm-12 col-md-10 col-lg-8 col-xl-6" type="text" placeholder="enter event name"><br>
                <label class="mt-1" for="event_type">Event type:</label><br>
                <input name="event_type" class="col-sm-8 col-md-6 col-lg-6 col-xl-4" type="text" placeholder="eg: seminar"><br>
                <label class="mt-1" for="event_date">Event date:</label><br>
                <input name="event_date"type="date"><br>
                <label class="mt-1" for="event_location">Event location:</label><br>
                <input name="event_location" class="col-sm-12 col-md-10 col-lg-8 col-xl-6" type="text" placeholder="Campus, Room Number"><br>
                <label class="mt-1" for="event_duration">Event duration</label><br>
                <input name="event_duration" class="col-sm-3 col-md-2 col-lg-2 col-xl-2 pl-2" type="number"><label for="event_duration" class="ml-1">Binus Hours</label><br>                <button class="mt-3" type="submit">Submit</button><br>
            </form>
        </div>
        <a href="/">Back</a>
    </div>
</body>
</html>