<head></head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>DOB</th>
        <th>Image</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->dob}}</td>
            <td><a href="{{url('/edit/'.$student->id)}}">Edit</a></td>
            <td><a href="{{url('/delete/'.$student->id)}}">delete</a></td>

    @endforeach
</table>
</body>
</html>
