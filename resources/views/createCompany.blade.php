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
            <form action="{{route('company.store')}}" autocomplete="on" method="POST" class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                @csrf
                <label for="company_name">Company Name:</label><br>
                <input name="company_name" class="col-sm-12 col-md-10 col-lg-8 col-xl-6" type="text" placeholder="enter company name"><br>
                <button class="mt-3" type="submit">Submit</button><br>
            </form>
        </div>
        <a href="/">Back</a>
    </div>
</body>
</html>