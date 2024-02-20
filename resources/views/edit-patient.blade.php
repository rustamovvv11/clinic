<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">


        <form action="/update_patient/{{ $patient->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
                    value="{{ $patient->name }}">
            </div>
            <div class="form-group">
                <label for="birth_date">Birth Date:</label>
                <input type="date" class="form-control" id="birth_date" placeholder="Enter birth date"
                    value="{{ $patient->birth_date }}" name="birth_date">
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone"
                    value="{{ $patient->phone }}">
            </div>

            <div class="form-group">
                <label for="disease">Disease:</label>
                <input type="text" class="form-control" id="disease" placeholder="Enter disease" name="disease"
                    value="{{ $patient->disease }}">
            </div>

            <div class="form-group">
                <label for="room">Room:</label>
                <input type="text" class="form-control" id="room" placeholder="Enter room" name="room"
                    value="{{ $patient->room }}">
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" placeholder="Enter date" name="date"
                    value="{{ $patient->date }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>


</body>

</html>
