<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #008080;
  padding: 20px;
  text-align: center;
  font-size: 40px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #C0C0C0;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #F5F5F5;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color:#2F4F4F;
  padding: 2px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
  text  {
  background-color:#FF0000;
  padding: 200px;
  text-align: center;
  color: white; 
  font-size:20px ;
  width: 70%;
  height: 300px;
  }
}
</style>
<link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>

<header>
  <h2> <img src="img/logo1.png" alt="logo" width="7%" height="50px">Bottoms</h2>
 
</header>
<section>
    <nav>
        <ul>
            <div class="text-center">
                <img src="img/celana1.jpg" alt="celana1" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Chasity Stripe Pants Pink</h2>
        <h7><br>Ukuran S</br></h7>
        <h7>Lingkar Pinggang : 72 cm </h7>   
        <h7><br>Lingkar Pinggul : 84 cm</br></h7>
        <h7>Lingkar Paha : 58 cm</h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 300.000</a>
</div>
        
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
    Beli Sekarang
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Beli Sekarang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action = "simpandata.php" method "POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name ="Email_Address"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name ="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Alamat</label>
                  <input type="text" name ="Alamat" class="form-control" id="exampleInputtext" placeholder="Propinsi-Kota">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Kode Pos</label>
                  <input type="text" name ="Kode_pos" class="form-control" id="exampleInputtext" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Telepon</label>
                  <input type="text" name = "Telepon" class="form-control" id="exampleInputtext" placeholder="+62xxx">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form>
          <button type="submit" class="btn btn-primary">Order</button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <script src="jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </article>
</section>
<section>
    <nav>
        <ul>
            <div class="text-center">
                <img src="img/celana2.jpg" alt="celana2" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Puffy Pants Brown</h2>
        <h7><br>Ukuran S </br></>
        <h7>Lingkar Pinggang : 70 cm </h7>
        <h7><br>Lingkar Pinggul : 82 cm </br></h7>
        <h7>Panjang : 93 cm</h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 249.000</a>
</div>
     
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
    Beli Sekarang
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Beli Sekarang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action = "simpandata.php" method "POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name ="Email_Address"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name ="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Alamat</label>
                  <input type="text" name ="Alamat" class="form-control" id="exampleInputtext" placeholder="Propinsi-Kota">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Kode Pos</label>
                  <input type="text" name ="Kode_pos" class="form-control" id="exampleInputtext" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Telepon</label>
                  <input type="text" name = "Telepon" class="form-control" id="exampleInputtext" placeholder="+62xxx">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form>
          <button type="submit" class="btn btn-primary">Order</button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <script src="jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </article>
</section>
<section>
    <nav>
        <ul>
            <div class="text-center">
                <img src="img/celana3.jpg" alt="celana3" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Verna Twill Print Pants Blue</h2>
        <h7><br>Ukuran S</br></h7>
        <h7>Lingkar Pinggang : 68 cm </h7>
        <h7><br>Lingkar Pinggul : 90 cm</br> </h7>
        <h7>Panjang : 86 cm </h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 200.000 </a>
</div>
        
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
    Beli Sekarang
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Beli Sekarang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action = "simpandata.php" method "POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name ="Email_Address"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name ="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Alamat</label>
                  <input type="text" name ="Alamat" class="form-control" id="exampleInputtext" placeholder="Propinsi-Kota">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Kode Pos</label>
                  <input type="text" name ="Kode_pos" class="form-control" id="exampleInputtext" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Telepon</label>
                  <input type="text" name = "Telepon" class="form-control" id="exampleInputtext" placeholder="+62xxx">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form>
          <button type="submit" class="btn btn-primary">Order</button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <script src="jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </article>
</section>
<section>
    <nav>
        <ul>
            <div class="text-center">
                <img src="img/celana4.jpg" alt="celana4" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Brenda Side Belt Skirt Blue</h2>
        <h7><br>Ukuran S</br></h7>
        <h7>Lingkar Pinggang : 72 cm</h7>
        <h7><br>Lingkar Pinggul : 86 cm </br></h7>
        <h7>Panjang : 70-90 cm</h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 299.000</a>
</div>
       
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
    Beli Sekarang
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Beli Sekarang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action = "simpandata.php" method "POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name ="Email_Address"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name ="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Alamat</label>
                  <input type="text" name ="Alamat" class="form-control" id="exampleInputtext" placeholder="Propinsi-Kota">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Kode Pos</label>
                  <input type="text" name ="Kode_pos" class="form-control" id="exampleInputtext" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Telepon</label>
                  <input type="text" name = "Telepon" class="form-control" id="exampleInputtext" placeholder="+62xxx">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form>
          <button type="submit" class="btn btn-primary">Order</button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <script src="jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </article>
</section>
<section>
    <nav>
        <ul>
            <div class="text-center">
                <img src="img/celana5.jpg" alt="celana5" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Aliyah Pocket Aline Skirt Brown</h2>
        <h7><br>Lingkar Pinggang : 68-84 cm </br></h7>
        <h7>Lingkar Pinggul : 94 cm </>
        <h7><br>Tinggi Model : 173 cm</br></h7>
        <h7>Panjang : 69 cm</h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 359.000</a>
</div>
       
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
    Beli Sekarang
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Beli Sekarang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action = "simpandata.php" method "POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name ="Email_Address"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name ="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Alamat</label>
                  <input type="text" name ="Alamat" class="form-control" id="exampleInputtext" placeholder="Propinsi-Kota">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Kode Pos</label>
                  <input type="text" name ="Kode_pos" class="form-control" id="exampleInputtext" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputtext">Telepon</label>
                  <input type="text" name = "Telepon" class="form-control" id="exampleInputtext" placeholder="+62xxx">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form>
          <button type="submit" class="btn btn-primary">Order</button>
</form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
      <a href="index.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kembali</a>
    </div>
</div>
</div>

    <script src="jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </article>
</section>
