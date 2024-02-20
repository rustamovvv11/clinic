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

                <form action="/save_doctor" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name"
                                name="full_name">
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Birth Date:</label>
                            <input type="date" class="form-control" id="birth_date" placeholder="Enter birth date"
                                name="birth_date">
                        </div>

                        <div class="form-group">
                            <label for="experience">Experience:</label>
                            <input type="number" class="form-control" id="experience" placeholder="Enter experience"
                                name="experience">
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
            <th>Experience</th>
            <th>Action</th>
        </tr>

        @foreach ($doctors as $pt)
            <tr>
                <td>{{ $pt->id }}</td>
                <td>{{ $pt->full_name }}</td>
                <td>{{ $pt->birth_date }}</td>
                <td>{{ $pt->experience }}</td>
                <td>
                    <a href="/delete_doctor/{{ $pt->id }}" class="btn btn-outline-danger">Delete</a>
                    <a href="/edit_doctor/{{ $pt->id }}" class="btn btn-outline-info">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>


</body>

</html>
