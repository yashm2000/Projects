<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Success</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <style type="text/css">
        *{
    margin: 0;
    padding: 0;
}
body{
    font-family: 'Ubuntu', sans-serif;
    background: #4288c8;
    display: flex;
    justify-content: center;
    align-items: center;
}
        .container {
    margin-top: 50px;
    width: 85%;
    background-color: #FFFFFF;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 50px;
  }
    </style>
</head>
<body>
    <div class="container">
    <?php
        print("Login Sucessfull");
        print("<br> Hello User!!!");
        print("<br> Welcome ".$email );
    ?>
    </div>
</body>
</html>