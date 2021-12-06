<?php 
require_once 'admin/pages/inc-functions.php'; //Veritabanı bağlantı kodunu çekelim
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Udemy PHP Dersleri</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>
    <body>
        <!-- Navigation-->
        <?php require 'includes/inc-menu.php'; ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Hoşegeldiniz</h1>
                            <span class="subheading">İlk blog sitemiz hayırlı olsun.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    
                    <!-- Bu döngü ile her defasında post-preview'i tekrar edeceğiz. -->
                    <?php 
                    @$kelime = $_GET["q"];
                    if($kelime != ""){
                        echo "<p>Aranan Kelime: $kelime | <a href='index.php'>Anasayfaya Geri Dön</a></p>";
                        //eğer arama yapıldıysa
                        $cek = $db->prepare("SELECT * FROM `blog` WHERE `aktif` = :aktif && `baslik` LIKE :aranan ORDER BY `id` DESC");
                        $cek->bindValue(":aktif", 1, PDO::PARAM_INT);
                        $cek->bindValue(":aranan", "%$kelime%", PDO::PARAM_STR);
                    }           
                    else {
                        //eğer arama yapılmadıysa, varsayılan kayıtlar gelsin
                        $cek = $db->prepare("SELECT * FROM `blog` WHERE `aktif` = :aktif ORDER BY `id` DESC");
                        $cek->bindValue(":aktif", 1, PDO::PARAM_INT);
                    }         
                    $cek->execute();
                    
                    while($row = $cek->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                    <!-- Post preview: 1.blog yazısı-->
                    <div class="post-preview">
                        <a href="blog-detay.php?id=<?=$row['id'] ?>">
                            <h2 class="post-title">
                                <?= $row["baslik"] ?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?= $row["alt_baslik"] ?>
                            </h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Admin</a>
                            <?= $row["tarih"] ?>
                        </p>
                    </div>
                    
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php } ?>
                    <!-- Bu döngü ile her defasında post-preview'i tekrar edeceğiz. -->
                    <!-- mesela 15 tane kayıt ekledik her defasında döngü ile bunu tekrar edeceğiz  -->
                    
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php require 'includes/inc-footer.php'; ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
