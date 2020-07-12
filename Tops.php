<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  color: White;
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
  <h2> <img src="img/logo1.png" alt="logo" width="7%" height="50px"> TOPS</h2>
 
</header>

<section>
    <nav>
        <ul>
            <div class="text-center">
                <img src="img/baju1.jpg" alt="baju1" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Tweed Blouse White</h2>
        <h7><br>Lebar Bahu : 60 cm</br></h7>
        <h7>Lingkar Dada : 116 cm</h7>  
        <h7><br>Panjang Tangan : 11 cm</br></h7>
        <h7>Lingkar Tangan : 34 cm</h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 219.000</a>
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
            <form action="simpandata.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name ="Email_Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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
                <img src="img/baju2.jpg" alt="baju2" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Puffy Top Green</h2>
        <h7><br>Lebar Bahu : 56 cm</br></h7>
        <h7>Lingkar Dada : 110 cm </h7>
        <h7><br>Panjang Tangan : 15 cm</br></h7>
        <h7>Lingkar Tangan : 40 cm </h7>
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
          <button type="button" class="btn btn-primary">Save</button>
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
                <img src="img/baju3.jpg" alt="baju3" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Collar Shirt Brown</h2>
        <h7><br>Lebar Bahu : 40 cm</br></h7>
        <h7>Lingkar Dada : 94 cm</h7>
        <h7><br>Panjang Tangan : 28 cm</br></h7>
        <h7>Lingkar Pinggang : 94 cm  </h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 219.000 </a>
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
          <button type="button" class="btn btn-primary">Save</button>
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
    <nav>
        <ul>
            <div class="text-center">
                <img src="img/baju4.jpg" alt="baju4" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Turtleneck Top Maroon</h2>
        <h7><br>Lebar Bahu : 83 cm </br></h7>
        <h7>Lingkar Dada : 136 cm </h7>
        <h7><br>Lingkar Pinggang : 130 cm</br> </h7>
        <h7>Panjang : 64 cm</h7>
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
          <button type="button" class="btn btn-primary">Save</button>
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
                <img src="img/baju5.jpg" alt="baju5" width="210px" height="260px" class="rounded-sm">
            </div>
        </ul>
    </nav>
    <article>
        <h2>Corduroy Top Brown</h2>
        <h7><br>Lebar Bahu : 70 cm </br></h7>
        <h7>Lingkar Dada : 128 cm </h7>
        <h7><br>Panjang Tangan : 22 cm </br></h7>
        <h7>Lingkar Pinggang : 128 cm</h7>
        <div class="" role="alert"><a href="#" class="alert-link">IDR 249.000 </a>
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
          <button type="button" class="btn btn-primary">Save</button>
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

