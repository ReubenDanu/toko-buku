<!DOCTYPE html>
<html lang="en" id="root">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/login.css">
</head>
<body >
    <?php 
        if(isset($_GET['pesan'])){
            $pesan = strtolower($_GET['pesan']);
            if($pesan == "'salah'"){
              $teks = 'username atau password anda salah';
            } else {
              $teks = 'anda harus login terlebih dahulu';
            }

            echo "<div id='pesan'>$teks</div>";
        }
    ?>
    <div class="container">
        <div class="navbar">
            <span><i class="fa-solid fa-b"></i></span>
            <span>Toko Buku</span>
            <div class="link">
                <a href="#home"><span>Home</span></a>
                <a href="#join"><span>Join</span></a>
            </div>
        </div>

        <div class="form">
            <form action="../controller/login.php" method="post">
                <span>Hi There! Enter Your Detail's To Get Accessed</span>
                <h2>Sign In</h2>
                <span>Not a member?<a href="#register"> Sign Up</a></span>
                <div class="input-form">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="submit" name="submit" value="Sign in">
                    <div class="optional">
                        <span>Or Sign in with another method?</span>
                        <div class="line-break"></div>
                        <a href="#google"><i class="fa-brands fa-google"></i> Google</a><a href="#facebook"><i class="fa-brands fa-facebook"></i> Facebook</a>
                    </div>
                </div>
                
               

            </form>
        </div>
    </div>
    <script type="module">
        let body = document.getElementById('root');
        let pesan = document.getElementById('pesan');
        console.log(pesan)
        if(pesan){
          console.log('yes')
          body.addEventListener('click', (e)=>{
              console.log('available');
              pesan.remove();
              let url = document.title + '.php';
              window.history.pushState({}, "", url );
              
          })
        } else {
          body.removeEventListener('click', function remove(){
            return "";
          }, true);
        }
    </script>
</body>
</html>
