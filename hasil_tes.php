<?php
include 'koneksi.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tes Gejala COVID-19</title>
	
	<style>
	.title{
	height:60px;
	background-color: #ebebeb;
	vertical-align: middle;
	}
	.gejala{
	margin-top:5%;
	}
	
	</style>
	
	
  </head>
  <body>
    <!--Header Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold" href="index.php">Tes Gejala COVID-19</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="index.php">Diagnosis Tes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End Header Navbar-->

<div class="container mt-5 col-md-10">
  <div class="title container p-3 my-2 fw-bold">
    <h4>Hasil Diagnosis</h4>
  </div>
  <div class="isi-list">
        <ul class="list-group list-group-flush mt-3">
          <li class="list-group-item fw-bold ">
		  Solusi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <?php
      	echo $nama_solusi=$d['nama_solusi'];
      ?>
          </li>
		  <ul class="list-group list-group-flush mt-3">
          <li class="list-group-item fw-bold ">
            <table>
              <tr>
              <td>Keterangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </td>
     <td><?php 
           echo $solusi=$d['solusi'];
           ?></td>
           </tr>
            </table>
		        
          </li>
		  </u>
		 <br>
  </div>
  </div>
  
  <div class="container gejala mb-3 col-md-10">
  <div class="title container p-3 my-2 fw-bold">
    <h4>Gejala Terpilih</h4>
  </div>
  <div class="isi-list">
    <ul class="list-group list-group-flush mt-3">
   
    <?php
          while ($d=mysqli_fetch_array($dk)) {
            $gejala=$d['gejala'];?>
          <li class="list-group-item fw-bold ">
         
           <?php echo $gejala=$d['gejala'];?>
            
          
          </li>
          <?php
          }
      	
          ?>
    
		  <ul>
        
		  <div class="d-md-flex mt-3 justify-content-md-end">
        <a class="btn btn-success text-white" href="index.php">DIAGNOSIS ULANG</a>
      </div>

  </div>
  </div>
  
      
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