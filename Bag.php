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
  <h2> <img src="img/logo1.png" alt="logo" width="7%" height="50px">Bag</h2>
 
</header>
<section>
    <nav>
        <ul>
            <div class="text-center">
                <img src="img/tas1.jpg" alt="tas1" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Dofa Decyta Quilted Sling Bag Beige</h2>
        <h7><br>Tinggi: 13 cm<br><h7>
        <h7>Lebar: 27 cm</h7>
        <h7><br>Alas: 6 cm</br></h7>
        <h7>Panjang tali: 100 cm</h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 319.000 </a>
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
          <h5 class="modal-title" id="exampleModalLongTitle">REGISTER</h5>
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
                <img src="img/tas2.jpg" alt="tas2" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Acrylic Chain Handle Sling Bags Black</h2>
        <h7><br>Tinggi: 16 cm</br></h7>
        <h7>Lebar: 18,5 cm</h7>
        <h7><br>Alas: 8 cm</br>/h7>
        <h7>Panjang tali: 113 cm</h7>
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
                <img src="img/tas3.jpg" alt="tas3" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Lindsey Juliette Quilted Sling Bags Olive</h2>
        <h7><br>Tinggi: 16 cm</br></h7>
        <h7>Lebar: 24 cm</h7>
        <h7><br>Alas: 11 cm</br></h7>
        <h7>Panjang tali: 108 cm </h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 206.000 </a>
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
                <img src="img/tas4.jpg" alt="tas4" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Leah Juliette Casual Sling Bags Black</h2>
        <h7><br>Tinggi: 16 cm</br></h7>
        <h7>Lebar: 23,5 cm</h7>
        <h7><br>Alas: 9 cm</br></h7>
        <h7>Panjang tali: 97 cm</h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 269.000</a>
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
                <img src="img/tas5.jpg" alt="tas5" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Farah Juliette Quilted Sling Bags Black</h2>
        <h7><br>Tinggi: 18 cm</br></h7>
        <h7>Lebar: 26 cm</h7>
        <h7><br>Alas: 9 cm</br></h7>
        <h7>Panjang tali: 100 cm</h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 359.000 </a>
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
