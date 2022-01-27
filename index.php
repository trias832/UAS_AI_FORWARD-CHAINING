<?php include 'koneksi.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tes Gejala COVID-19</title>
  </head>
  <body>
    <!--Header Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold" href="lists_gejala.html">Tes Gejala COVID-19</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="lists_gejala.html">Diagnosis Tes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End Header Navbar-->

    <!--Container-->
    <div class="container">
      <div class="header-title">
        <p class="welcome-text mt-5">Selamat datang,<br>
          Untuk mendiagnosis gejala <span style="color: #198754; font-weight: bold;">COVID-19</span> silahkan pilih gejala dibawah yang sedang anda rasakan.</p>
      </div>
      <!--Lists Gejala COVID-19-->
	 
		<form action="proses.php" method="post">
			<div class="isi-list">
				
					<ul class="list-group list-group-flush mt-3">
          <?php
           
            //query menampilkan data
            $query="select *from gejala";
            $data=mysqli_query($conn,$query);

            while($row=mysqli_fetch_array($data)){

        ?>
                  <li class="list-group-item fw-bold my-2">
                  <input type="checkbox" value="<?=$row['kode_gejala']?>" name="<?=$row['id']?>">
                  <?=$row['gejala']?>
                  </li>
                  <?php
                  }?>
                 <p class="total-gejala text-muted">Total: 18 gejala</p>
                </ul>
				
			</div>
      <!--End Lists Gejala COVID-19-->
      <div class="d-md-flex justify-content-md-end">
      <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="DIAGNOSIS">

        
    </div>
	  </form>
    </div>
    <!--End Container-->

    <!--Footer-->
    <div class="text-center text-muted p-3 mt-5" style="background-color: #ebebeb;">
      Trias Handayani & Naima Zulfa
    </div>
    <!--End Footer-->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>