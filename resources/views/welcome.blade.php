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

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
    </button>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form action="/save_patient" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="doctor">Doctor:</label>
                            <select name="doctor" class="form-control" id="">
                                @foreach ($doctors as $d)
                                    <option value="{{ $d->id }}">{{ $d->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name"
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Birth Date:</label>
                            <input type="date" class="form-control" id="birth_date" placeholder="Enter birth date"
                                name="birth_date">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="number" class="form-control" id="phone" placeholder="Enter phone"
                                name="phone">
                        </div>

                        <div class="form-group">
                            <label for="disease">Disease:</label>
                            <input type="text" class="form-control" id="disease" placeholder="Enter disease"
                                name="disease">
                        </div>

                        <div class="form-group">
                            <label for="room">Room:</label>
                            <input type="text" class="form-control" id="room" placeholder="Enter room"
                                name="room">
                        </div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" class="form-control" id="date" placeholder="Enter date"
                                name="date">
                        </div>

                        <div class="form-group">
                            <label for="photo">Photo:</label>
                            <input type="file" class="form-control" id="photo" placeholder="Enter photo"
                                name="photo">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>





    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Birth_date</th>
            <th>Disease</th>
            <th>Photo</th>
            <th>Doctor</th>
            <th>Action</th>
        </tr>

        @foreach ($patients as $pt)
            <tr>
                <td>{{ $pt->id }}</td>
                <td>{{ $pt->name }}</td>
                <td>{{ $pt->birth_date }}</td>
                <td>{{ $pt->disease }}</td>
                <td>
                    @if ($pt->photo)
                        <img src="{{ $pt->photo }}" width="40px" height="40px">
                    @endif
                </td>
                <td>{{ $pt->get_doctor->full_name }} ( {{ $pt->get_doctor->experience }} г. опыта )</td>
                <td>
                    <a href="/delete_patient/{{ $pt->id }}" class="btn btn-outline-danger">Delete</a>
                    <a href="/edit_patient/{{ $pt->id }}" class="btn btn-outline-info">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>


</body>

</html>
