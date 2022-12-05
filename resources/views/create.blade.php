<html>
<head>
    <title>create</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="{{action([\App\Http\Controllers\MainController::class,"store"])}}">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Address:</label>
    <input type="text" name="address" required>
    <label>Age:</label>
    <input type="number" name="age" required>
    <label>DOB:</label>
    <input type="date" name="dob" required>



    <input type="submit" name="submit/">
</form>
</body>
</html>
