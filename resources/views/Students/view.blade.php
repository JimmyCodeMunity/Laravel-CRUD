<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body class="text-center">
    <div class="container-fluid">
        <div class="container">
            <h2>View all the students here</h2>
            <a href="{{ route('students.register') }}" class="btn btn-success">Add newstudent</a>
            <div class="row my-5 justify-content-center align-items-center">
                <div class="col-lg-8">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Studentname</th>
                                <th scope="col">Admission</th>
                                <th scope="col">Class</th>
                                <th scope="col">Age</th>
                                <th scope="col">Actions</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student )



                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$student->studentname}}</td>
                                    <td>{{ $student->admission }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td><a href=""
                                            class="btn btn-success btn-sm">Edit</a></td>
                                    <td>
                                        <form action=""
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach


                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
    </div>


</body>

</html>
