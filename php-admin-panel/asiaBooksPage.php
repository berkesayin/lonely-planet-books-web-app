<?php 
require_once 'admin/pages/db-connection.php'; //Veritabanı bağlantı kodunu çekelim
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonderful Planet</title>

    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!--External CSS inclusion.-->
    <link rel="stylesheet" href="asiaBooksPageStyle.css">



</head>

<body>
    <!-- Nav Bar  -->
    <!--Navigation Bar-->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal" style="margin-right: 1250px">Wonderful Planet</h5>
        <nav class="my-2 my-md-0 mr-md-3 myNav">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
        <a class="nav-link" href="shopping-cart.php">
            <span class="cart-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </span>              
                    <!-- <span class="badge cart-count"><?php echo $total_count; ?></span> -->
        </a>

    </div>

    <!-- Header -->
    <header class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Asia Books</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap
            example. It's built with default Bootstrap components and utilities with little customization.</p>
    </header>

    <section class="showcase"></section>

    <div class="my-container" style="margin-right: 25px">

        <div class="row">
            <div class="col-3">
                <div class="left-frame" style="margin-left: 50px">

                    <div class="filter-container">
                        <form action="asiaBooksPage.php" method="get">
                            <label style="margin-top: 20px; font-size: large; font-weight: bold;">Search Here</label>
                            
                            <input type="text" name="q" class="form-control" placeholder="Search"
                                style="margin-top: 10px;">
                        </form>
    
                        <label style="margin-top: 50px; font-size: large; font-weight: bold;">Kind Of Books</label>
    
                        <div class="form-check" style="margin-top: 10px;">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" style="font-size: large">Guide Books</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" style="font-size: large">Dictionaries</label>
                        </div>
    
                        <label style="margin-top: 50px; font-size: large; font-weight: bold;">Search for Country or City</label>
    
                        <div class="form-check" style="margin-top: 10px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">China</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Sotheast Asia</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Central Asia</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Bali</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Bangkok</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Bangladesh</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Beijing</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Bhutan</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Borneo</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Burmese</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Cambodia</label>
                        </div>
    
                        <div class="form-check" style="margin-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="font-size: large">Cantonese</label>
                        </div>
    
                        <button type="submit" class="btn btn-primary btn-md" style="margin-top: 5px;">Search</button>
                    </div>

                    <img src="../images/asia/verticalAsia1.webp" alt="Tokyo Center" width="90%">

                    <img src="../images/asia/verticalAsia2.webp" alt="Traditional Japan Statue" width="90%">

                    <img src="../images/asia/verticalAsia3.webp" alt="Traditional Japan Statue" width="90%">


                </div>
            </div>

            <div class="col-9">
                <div class="row">

                <?php 
                    @$kelime = $_GET["q"];
                    if($kelime != ""){
                        echo "<p>Aranan Kelime: $kelime | <a href='asiaBooksPage.php'>Anasayfaya Geri Dön</a></p>";
                        //eğer arama yapıldıysa
                        $cek = $db->prepare("SELECT * FROM `asiabooks` WHERE `aktif` = :aktif && `name` LIKE :aranan ORDER BY `id` DESC");
                        $cek->bindValue(":aktif", 1, PDO::PARAM_INT);
                        $cek->bindValue(":aranan", "%$kelime%", PDO::PARAM_STR);
                    }           
                    else {
                        //eğer arama yapılmadıysa, varsayılan kayıtlar gelsin
                        $cek = $db->prepare("SELECT * FROM `asiabooks` WHERE `aktif` = :aktif ORDER BY `id` DESC");
                        $cek->bindValue(":aktif", 1, PDO::PARAM_INT);
                    }         
                    $cek->execute();
                        
                    while($row = $cek->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                    <!-- Card 1: name, detail, kindOfBook, Publisher, Price --> 
                    <div class="col-sm-3" style="margin-top: 30px">
                        <div class="card" style="width: 18rem;">
                            <!-- <img class="card-img-top" src="images/asiaBooks/asiaBook1.jpg" alt="Card image cap"> -->

                            <div class="card-body">
                                <h5 class="card-title"> <?= $row["name"] ?> </h5>
                                <p class="card-text"> <?= htmlspecialchars_decode($row["detail"]) ?>  </p>
                            </div>

                            <ul class="list-group list-group-flush">                           
                                <li class="list-group-item"> <?= $row["kindOfBook"] ?> </li>
                                <li class="list-group-item"> <?= $row["publisher"] ?> </li>
                                <li class="list-group-item"> <?= $row["price"] ?> </li>
                            </ul>

                            <div class="card-body">
                                <a href="#" class="btn btn-outline-primary btn-sm">Go to Product</a>
                                <a href="#" class="btn btn-primary btn-sm">Add to Chart</a>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    
                    
                </div>
            </div>
        </div>


        <!-- Pagination -->
        <nav aria-label="Page navigation example" style="margin-top: 25px">
            <ul class="pagination justify-content-center pagination-lg">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>

    <!--Asia Picture-->
    <section class="asia dark" style="margin-top: 50px">
        <div class="content">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt, nobis repellendus corporis
                nihil blanditiis qui dolorum nostrum numquam earum.</p>
            <a href="#" class="btn">Learn More <i class="fas fa-chevron-right"></i></a>
        </div>
    </section>


    <!--Follow Lonely Planet-->
    <section class="follow">
        <p>Follow Lonely Planet</p>
        <a href="https://facebook.com">
            <img src="../images/logos/social-fb.png">
        </a>

        <a href="https://twitter.com">
            <img src="../images/logos/social-twitter.png">
        </a>

        <a href="https://linkedin.com">
            <img src="../images/logos/social-linkedin.png">
        </a>
    </section>

    <!-- Footer   -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-6 col-md" style="margin-left: 60px">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h4>Features</h4>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted fs-6" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>



</body>

</html>