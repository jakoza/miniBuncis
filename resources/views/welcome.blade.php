<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miniBuncis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex flex-column mt-3">
            <h2 class="text-center">Selamat Datang di mini Buncis!</h2>
            <h4 class="text-center">Berikut adalah data-data yang tersimpan pada server:</h4>
        </div>
        <div class="row d-flex justify-content-around">
            <a href="/makeEvent">Click Here to Add New Event</a>
            <a href="/makeGuest">Click Here to Add New Event Guest</a>
            <a href="/makeCompany">Click Here to Add New Company</a>
        </div>
        <div class="row d-flex flex-column mt-3">
            <h5>Here is the list of Events Listed:</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Event Type</th>
                        <th>Event Date</td>
                        <th>Event Location</th>
                        <th>Event Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Event1</td>
                        <td>Seminar</td>
                        <td>DD/MM/YYYY</td>
                        <td>Binus Anggrek</td>
                        <td>1hour</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row d-flex flex-column mt-3">
            <h5>Here is the list of Guests listed:</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Whatsapp Number</td>
                        <th>Company Origin</th>
                        <th>Event</th>
                        <th>Participation Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Guest 1</td>
                        <td>+628XXXXXXXXXX</td>
                        <td>Company 1</td>
                        <td>Event 1</td>
                        <td>Speaker</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row d-flex flex-column mt-3">
            <h5>Here is the list of Companies listed:</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Contact Number</td>
                        <th>Company Location</th>
                        <th>Event</th>
                        <th>Participation Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Company 1</td>
                        <td>+628XXXXXXXXXX</td>
                        <td>Jakarta Barat</td>
                        <td>Event 1</td>
                        <td>Sponsor</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>