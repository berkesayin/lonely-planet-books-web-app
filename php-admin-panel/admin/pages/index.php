<?php 
session_start(); 

if(@$_SESSION["girisKontrol"] == 1) {
    header("Location: anasayfa.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Giriş Yap</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Kullanıcı Adı" name="username" type="text" 
                                        autofocus required>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="******" name="password" type="password" required>
                                </div>

                                <input type="submit" name="submit" value="Giriş" class="btn btn-lg btn-success btn-block">
                                                            
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    /*Normalde username ve password için veritabanı oluşturup oradan kontrol sağlayabilirdik fakat zaten tek bir kullanıcı var
    o sebeple buradan kontrolü sağlayacağız*/
    if(@$_POST["submit"]){
       
        //şifre = 123456 => md5() foksiyonu ile kontrol ediyoruz(8.video)
        $md5sifre = md5($_POST["password"]);
        if($_POST["username"] == "admin" && $md5sifre == "e10adc3949ba59abbe56e057f20f883e") {
            //giriş yapsın
            //session kullanarak değerleri bütün sayfalarda döndürebiliriz
            $_SESSION["girisKontrol"] = 1; //giriş yapmış  => 1 değilse yani 0 ise giriş yapmamış
            $_SESSION["username"] = $_POST["username"];

            //yönlendirme yapalım
            header("Location: anasayfa.php");
            return true;
        }
        else {
            echo "<p style= 'text-align: center; color: red;'>Kullanıcı adı veya parola yanlış!</p>";
            return false;
        }
    }    

    //Çıkış yaptıktan sonra uyarı yazdırılsın
    if(@$_GET["i"] == "cikis") {
        echo "<p style= 'text-align: center; color: green;'>Başarıyla çıkış yaptınız!</p>";
    }
    elseif(@$_GET["i"] == "hack") {
        echo "<p style= 'text-align: center; color: red;'>Öncelikle giriş yapmalısınız</p>";
    }

    
    ?>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
