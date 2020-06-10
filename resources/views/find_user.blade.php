<html>
<head>
<title>Find User</title>
</head>
<body>
    <form action="/find" method="post">
    @csrf
    User_ID: <input type="text" name="user_id"> </br>
    Phone: <input type="text" name="phone"> </br>
    Role_name: <input type="text" name="role_name"> </br>
    <input type="submit" value="find">
    </form>
</body>
</html>