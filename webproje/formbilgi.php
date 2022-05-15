

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="formbilgi.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
    
            <div class="col-sm-12" >
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="hakkimda.html"></a>
                    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active ">
                          <a class="nav-link" href="hakkimda.html">Hakkımda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sehrim.html">Şehrim</a>
                          </li>
                          <li class="nav-item  ">
                            <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">İlgi Alanlarım</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="login.html">Giriş Yap</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="iletisim.html">İletişim</a>
                          </li>
                        </li>
                      </ul>
                  
                    </div>
                  </nav>
    
            </div>
        </div>
    </div>
    </div>
    
    
    
</body>
</html>



<?php



if(isset($_POST['ad']) && isset($_POST['soyisim'])&&isset($_POST['mail'])&&isset($_POST['telno'])&&isset($_POST['dogumtarih'])) {
    
   $ad = $_POST['ad'];
   $soyad = $_POST['soyisim'];
   $telno = $_POST['telno'];
   $dogumtarih = $_POST['dogumtarih'];
   $mesaj = $_POST['mesaj'];
      $mail = $_POST['mail'];


 
   if(empty($ad) || empty($soyad) || empty($telno) || empty($dogumtarih) || empty($mail)  ) {
      echo  "Lütfen boş bırakmayın";
   } else {
       
      echo "Ad: ".$ad ; 
      echo "<br> " ; 
      echo "Soyad: ".$soyad; 
      echo "<br> " ; 

      echo "Mail: ".$mail ;
      echo "<br> " ; 

      echo "Telefon Numarası:".$telno ;
      echo "<br> " ; 

      echo "Doğum Tarihi:".$dogumtarih ;
      echo "<br> " ; 

      echo "Mesaj:".$mesaj; 


      
   }
}
 else {
   echo "Lütfen formu kullanın";
}
?>