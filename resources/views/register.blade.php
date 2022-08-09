<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/ICONLUC.png">
    <!-- CSS only -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>DEMO</title>
</head>

<body>
    <div class="container">
        <!--Formulario-->
        <div  action="{{url('/demo')}}" class="form" {{-- method="POST" --}} >
            @csrf
            <div class="heading">

                <h1>Empieza esta aventura</h1>
            </div>
            <div class="wrap">
                <div class="f1">
                    <label for="">First Name</label>
                    <input type="text" name="first_name" id="first_name" required/>
                    <span class="focus-input"></span>
                </div>
                <div class="f2">
                    <label for="">Second Name</label>
                    <input type="text" name="second_name" id="second_name" required/>
                    <span class="focus-input"></span>
                </div>
            </div>
            <div class="wrap2">
                <label for="">Username</label>
                <input type="text" name="user_name" id="user_name" required/>
                <span class="focus-input2"></span>
            </div>
            <div class="wrap2">
                <label for="">E-mail</label>
                <input type="text"name="email" id="email" required/>
                <span class="focus-input2"></span>
            </div>
            <div class="wrap2">
                <label for="">Phone</label>
                <input type="number" name="phone" id="phone" required/>
                <span class="focus-input2"></span>
            </div>
            <input class="btn" type="submit" value="enviar" name="enviar">
        </div>
        <!--Imagen-->
        <div class="image">
            <img src="/img/cohete.png" alt="cohete" class="img"/>
        </div>
    </div>
</body>

</html>
