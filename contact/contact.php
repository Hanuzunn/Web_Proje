<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../main.css">
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark1">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">Han</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="../index.html">Hakkımda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="../ozgecmis.html">Özgeçmiş</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="../sehrim.html">Şehrim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="../mirasimiz.html">Mirasımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="../ilgi_alanlari.html">İlgi Alanları</a>
              </li>
              
            </ul>
            <div class="ms-auto">
                <a class="btn btn-outline-success " href="./contact.php" role="button">Contact</a>
                <a class="btn btn-outline-light" href="../sign-in/index.html" role="button">Sign In</a>     
            </div>
          </div>
        </div>
      </nav>

      <div class="container-fluid bg-dark2 text-white">
        <div class="row align-items-center p-3">
           <div>
              <form action="#" method="post" name="form1">
                  <div class="row">
                      <div class="col-md-2">
                        <label for="inputname" class="form-label">Ad</label>
                        <input type="text" id="inputname" class="form-control" name="ad" aria-describedby="nameHelpBlock">
                      </div>
                      <div class="col-md-2">
                        <label for="inputlastname" class="form-label">Soyad</label>
                        <input type="text" id="inputname" class="form-control" name="soyad" aria-describedby="lastnameHelpBlock">
                      </div>
                  </div>
                  <br>
                <div class="col-md-3">
                  <label for="inpulmail" class="form-label">Email address</label>
                <input type="text" class="form-control" name="mail" id="inputmail" placeholder="name@example.com">
                </div>
                <br>
                <div class="col-md-2"> 
                  <label for="inputPassword5" class="form-label">Password</label>
                  <input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock">
                </div>            
                   <br>
                  <div class="col-md-2">
                    <label for="cinsiyet" class="form-label">Cinsiyet</label> <br>
                    <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet" value="Erkek"> Erkek <br>
                    <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet" value="Kadın"> Kadın <br>
                    <input class="form-check-input" type="radio" name="cinsiyet" id="cinsiyet" value="none"> Belirtmek istemiyorum <br>
                  </div>
                <br>
                <div class="col-md-2">
                  <label for="ilgi alanları" class="form-label">İlgi Alanları</label> <br>
                  <input class="form-check-input" type="checkbox" name="ilgialani" id="ilgialani"> Restorasyon <br>
                  <input class="form-check-input" type="checkbox" name="ilgialani" id="ilgialani"> Yürüyüş <br>
                  <input class="form-check-input" type="checkbox" name="ilgialani" id="ilgialani"> Spor <br>
                  <input class="form-check-input" type="checkbox" name="ilgialani" id="ilgialani"> Bilgisayar Oyunları <br>
                </div>
                <br>
                <div class="col-md-4">
                  <label for="exampleFormControlTextarea1" class="form-label">Fazla</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="aciklama" rows="4"></textarea>
                </div>
                <br>
                <div class="col-md-3">
                  <label for="formFile" class="form-label">Cv</label>
                  <input class="form-control" type="file" id="formFile" name="dosya">
                </div>
                  <br>
                <input type="submit" class="btn btn-outline-success" value="Gönder">
                <input type="reset" class="btn btn-outline-danger" value="Reset">
              </form>
           </div>
        </div>
      </div>
   

    <script src="./main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>