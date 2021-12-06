<?php
require_once 'db-connection.php'; 
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add New Asia Book | Admin Paneli</title>

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


<?php
if(@$_POST["submit"]){
    //Türkçe karakter sorunu yaşamamak için htmlspecialchars() kullanırız
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
    $detail = htmlspecialchars($_POST["detail"], ENT_QUOTES, 'UTF-8');
    $price = htmlspecialchars($_POST["price"], ENT_QUOTES, 'UTF-8');
    $kindOfBook = htmlspecialchars($_POST["kindOfBook"], ENT_QUOTES, 'UTF-8');
    $publisher = htmlspecialchars($_POST["publisher"], ENT_QUOTES, 'UTF-8');
    $aktif = htmlspecialchars($_POST["aktif"], ENT_QUOTES, 'UTF-8');

    $ekle = $db->prepare("INSERT INTO `asiabooks` (`name`, `detail`, `price`, `kindOfBook`, `publisher`, `aktif`) VALUES
    (:name, :detail, :price, :kindOfBook, :publisher, :aktif) ");
    $ekle->bindValue(":name", $name, PDO::PARAM_STR);  //string
    $ekle->bindValue(":detail", $detail, PDO::PARAM_STR);  //string
    $ekle->bindValue(":price", $price, PDO::PARAM_STR);  //string
    $ekle->bindValue(":kindOfBook", $kindOfBook, PDO::PARAM_STR);  //string
    $ekle->bindValue(":publisher", $publisher, PDO::PARAM_STR);  //string
    $ekle->bindValue(":aktif", $aktif, PDO::PARAM_INT);  //int

    if($ekle->execute()) {
        //execute ile çalışıp çalışmadığını kontrol ederiz
        //eğer düzgün çalışırsa header ile asia-book.php sayfasına yönlendiririz
        header("Location: asia-books.php?i=ekle");  //i ile bir değişken yollayalım.
    }
    else {
        //print_r($ekle->errorInfo());  //hata varsa bize bilgi verir
        header("Location: asia-books.php?i=hata"); // eğer hata varsa blog.php sayfasında bar kısmında i=hata yazar
    }
    //Bu şekilde çalıştırınca veri tabanına eklendi.
}
        
?>


    <div id="wrapper">

        <?php require_once 'inc-menu.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Asia Book</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="asia-books.php"> < Asia Books List Page </a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6"> 
                                    <form role="form" action="asia-books-add.php" method="POST" enctype="mutipart/form-data">

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" placeholder="Enter the Name...">
                                        </div>

                                        <div class="form-group">
                                            <label>Detail</label>
                                            <textarea class="form-control" id="mytextarea" rows="3" name="detail"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" name="price" placeholder="Enter the Price...">
                                        </div>

                                        <div class="form-group">
                                            <label>Kind Of Book</label>
                                            <input class="form-control" name="kindOfBook" placeholder="Enter the Kind Of Book...">
                                        </div>

                                        <div class="form-group">
                                            <label>Publisher</label>
                                            <input class="form-control" name="publisher" placeholder="Enter the Publisher...">
                                        </div>

                                        <div class="form-group">
                                            <label>Durum</label>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif"  value="1" checked>Aktif
                                                </label>
                                            </div>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif"  value="0">Pasif
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="image">
                                        </div>
                                        
                                        <input type="submit" name="submit" value="Kaydet" class="btn btn-default">
                                        <button type="reset" class="btn btn-default">Temizle</button>

                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


    <!-- Tiny text editör için link -->
    <script src="../js/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Tiny text editör text area için link -->
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

</body>

</html>
