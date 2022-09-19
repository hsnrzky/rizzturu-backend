<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:italwght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="all">
        <div class="wellcome">
        <a href="inde.php" class="turu">Turu<span>Dx</span></a>
        <div class="login">
                <div class="divwell">
                    <p class="fwell">Sign Up</p>
                </div>
                <form action="connect.php" method="POST">
                    <div class="divuser">
                        <p class="fuser">Username </p>
                        <input type="text" name="username" class="inputuser" placeholder="masukan username" required>
                    </div>
                    <div class="divmail">
                        <p class="fmail">Email</p>
                        <input type="text" name="email" class="inputmail" placeholder="masukan email" required>
                    </div>
                    <div class="divpass">
                        <p class="fpass">Password </p>
                        <input type="password" name="password" class="inputpass" placeholder="masukan password" required>
                    </div>
                    <div class="buat">
                        <button type="submit" class="cbutton" name="create">Create</button>
                    </div>
                </form>
                <div class="divregis">
                    <a href="login.php" class="rebutt">I have an account</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>