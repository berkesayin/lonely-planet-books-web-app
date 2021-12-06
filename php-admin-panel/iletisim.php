<?php 
require_once 'admin/pages/inc-functions.php'; //Veritabnı bağlantı kodunu çekelim

//form post edilirse(doldurulursa)
if(@$_POST["submit"]) {
    //formdaki verilerimiz
    $ad = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $tel = htmlspecialchars($_POST["phone"], ENT_QUOTES, 'UTF-8');
    $mesaj = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');

    $ekle = $db->prepare("INSERT INTO `iletisim` (`ad`, `email`, `tel`, `mesaj`) 
    VALUES (:ad, :email, :tel, :mesaj) ");

    $ekle->bindValue(":ad", $ad, PDO::PARAM_STR);
    $ekle->bindValue(":email", $email, PDO::PARAM_STR);
    $ekle->bindValue(":tel", $tel, PDO::PARAM_STR);
    $ekle->bindValue(":mesaj", $mesaj, PDO::PARAM_STR);

    if($ekle->execute()) {
        //eğer gönderme işlemi başarılıysa
        header("Location: iletisim.php?i=ok");
    }
    else {
        //eğer gönderme işlemi başarısızsa(hata oluştuysa)
        header("Location: iletisim.php?i=hata");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>İletişim</title>
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
        <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>İLETİŞİM</h1>
                            <span class="subheading">Bizimle İletişime Geçiniz</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form action="iletisim.php#bildiri" method="POST">
                                <div class="form-floating">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Ad Soyad..." data-sb-validations="required" />
                                    <label for="name">Ad-Soyad</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="E-mail Adres..." data-sb-validations="required,email" />
                                    <label for="email">E-mail Adres</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="phone" id="phone" type="tel" placeholder="Telefon..." data-sb-validations="required" />
                                    <label for="phone">Telefon</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" id="message" placeholder="Mesaj..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Mesaj</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                
                                <div class="form-group">
                                    <!-- Submit Button-->
                                    <input class="form-control" type="submit" name="submit" class="btn btn-primary" value="Gönder">    
                                </div>

                                <div id="bildiri"></div>
                                
      
                                <!-- Gönderme işlemimde hata var mı yok mu? -->
                                <?php
                                if(@$_GET["i"] == "ok"){
                                    echo '<p class="text-center alert alert-success">Mesaj Başarıyla Gönderildi!</p>';
                                }
                                elseif(@$_GET["i"] == "hata"){
                                    echo '<p class="text-center alert alert-danger">Mesaj gönderilirken hata oluştu!</p>';
                                }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php require 'includes/inc-footer.php'; ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <!-- <script src="js/scripts.js"></script> -->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
