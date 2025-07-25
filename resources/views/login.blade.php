<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <div>
    <form  action="adduser1" method="post">
     @csrf
            <input type="email"  placeholder="enter your password " name="email">
            <br>
            <input type="password" placeholder="enter your password" name="password">

            <button type="submit">login</button>
        </form>



        <div>
        
        </div>
    </div>
</body>
</html>