<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    input[type=text],
    input[type=password],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        width:70%;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;        
    }
    </style>
    <title>login</title>
</head>

<body>

    <h1>Login</h1>

    <div>
        <form action="services/login.proc.php" method="post">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email..">

            <label for="psswd">Last Name</label>
            <input type="password" id="psswd" name="psswd" placeholder="Your password..">


            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>