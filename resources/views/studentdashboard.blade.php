<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    @csrf
    @auth
    <p>Students Page</p>
    <p>Hi {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
    </p>

    <div>
        <h2>All Courses</h2>
        @if (isset($courses) && $courses->count())
            <table border="1" cellpadding="6" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Capacity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->capacity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No courses available.</p>
        @endif
    </div>

    <div>
        <h2>Enrolled Courses</h2>
    </div>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    @endauth

</body>
</html>