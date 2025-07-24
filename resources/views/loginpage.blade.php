<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="adduser" method="post">
        @csrf    
        <!-- we have to pass as specil tag with the form named as @csrf  -->
        <input type="text" placeholder="please enter your yusername" name="username">

        <input type="text" placeholder=" enter your email there"  name="email"">

        <br>

        <button> login through data</button>

        </form>

    </div>  

</body>
</html>