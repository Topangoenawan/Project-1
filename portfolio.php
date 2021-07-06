<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My css -->
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link href="fontawesome/css/all.css" rel="stylesheet"> 
    <title>Portfolio | Topan Goenawan</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: rgb(45, 45, 253);">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Gallery</a>
                    <a class="nav-link" href="#">Contact Me</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <section class="jumbotron text-center">
        <img src="img/topan.png" alt="" class="img-thumbnail rounded-circle" width="280px">
        <h1 class="display-4">Topan Goenawan</h1>
        <p class="lead">College Student | Employee | Ordinary people</p>
        <a class="btn btn-primary btn-lg tex" href="#" role="button">Learn more</a>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff5e6" fill-opacity="1" d="M0,288L48,293.3C96,299,192,309,288,288C384,267,480,213,576,202.7C672,192,768,224,864,229.3C960,235,1056,213,1152,213.3C1248,213,1344,235,1392,245.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- akhir jumbotron -->

    <!-- about -->
    <section id="about" style="background-color: rgb(255, 245, 230);">
        <div class="container">
            <div class="row text-center mb-5">
                <h2>About Me</h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h5>Education</h5>
                    <ul>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, at?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, laboriosam?</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h5>Experience</h5>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit fugit molestiae officia, et saepe adipisci nulla nam similique quis modi sapiente velit, aliquam, cupiditate magni nostrum tenetur. Deserunt, odit totam. <br><br>

                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, facere. Sed harum est dolorum laboriosam doloribus ut praesentium, incidunt accusamus pariatur sapiente assumenda eum illo labore. Deserunt aspernatur reprehenderit distinctio nam minus dolore minima culpa nihil itaque, sapiente harum repellat? Alias vero libero suscipit accusamus adipisci est quam reiciendis minus?
                    </p>
                </div>

                <div class="col-md-2">
                    <h5>Social Media</h5>
                    <i class="fab fa-instagram"> topangoenawan_</i>
                    <i class="fab fa-facebook"> Topan Goenawan</i>
                    <i class="fab fa-twitter"> Topan Goenawan</i>
                    <i class="fab fa-whatsapp"> 0813 1369 5744</i>
                    <i class="far fa-envelope"> topan@gmail.com</i>  
                </div>
            </div>
        </div>
        
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9f9fff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,192C384,224,480,256,576,250.7C672,245,768,203,864,192C960,181,1056,203,1152,197.3C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    
    <!-- akhir about -->

    <!-- galeri projek -->
    <section id="projects">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h4>My Gallery Projects</h4>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <?php include "config.php"?>
                <?php
                    $sql =mysqli_query ($mysqli, "SELECT * FROM `mahasiswa`");
                    while($hasil = mysqli_fetch_array($sql)){
                        echo "
                        <div class='card col-sm-3 me-3 mb-3 shadow p-3'>
                        <img class='card-img-bottom img-thumbnail' src='img/img_avatar1.png' alt='Card image'>
                            <div class='card-body'>
                            <h4 class='card-title'>$hasil[nama_mahasiswa]</h4>
                                <p>
                                NIM        : $hasil[nim] <br>  
                                No Telepon : $hasil[no_tlp] <br>
                                Email      : $hasil[email]
                                </p>
                            </div>
                        </div>
                        "
                    ;}
                ?>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff5e6" fill-opacity="1" d="M0,192L48,192C96,192,192,192,288,213.3C384,235,480,277,576,277.3C672,277,768,235,864,208C960,181,1056,171,1152,176C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- akhir galeri projek -->

    <!-- form -->
    <section id="form" style="background-color: rgb(255, 245, 230);">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h4>Contact Me</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                <?php 

                    // if(isset($_GET['nim'])){
                    //     $nim = $_GET['nim'];
                    //     echo $nim;
                    // }

                    include "form.php";
                    buka_form("#",1,"edit");
                    buat_textbox("NIM", "nim", "");
                    buat_textbox("Nama", "nama", "");
                    buat_textbox("No Telp", "notelp", "");
                    buat_textbox("Email", "email", "");
                    // buat_textarea("Alamat", "alamat", "");
                    // $list = array();
                    // $list[] = array('val' => 'islam', 'cap' => 'ISLAM');
                    // $list[] = array('val' => 'kristen', 'cap' => 'KRISTEN');
                    // $list[] = array('val' => 'katolik', 'cap' => 'KATOLIK');
                    // $list[] = array('val' => 'hindu', 'cap' => 'HINDU');
                    // buat_combobox("Agama", "agama", $list, "");
                    echo "<br>";
                    tutup_form("#");
                ?>
                </div>            
            </div>
        </div>
    </section>
    
    <!-- akhir form -->

    <!-- footer --> 
    <footer>
        <div class="container text-center">
            <div class="row">
            <div class="col-sm-12">
                <p>&copy; Copyright 2021 | build by <a href="#">TopanGoenawan</a></p>
            </div>
            </div>

            <div class="row">
            <div class="col-sm-12">
                <button type="button" class="btn btn-danger">Subscribe to Youtube</button>
            </div>   
            </div>
        </div>
    </footer>
    <!-- akhir footer -->




















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script defer src="fontawesome/js/all.js"></script> -->
  </body>
</html>