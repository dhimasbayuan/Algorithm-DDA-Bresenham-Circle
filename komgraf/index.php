<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Komputer Grafik Simulator</title>

    <!-- Bootstrap core CSS -->
    <link href="../komgraf/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../komgraf/template/bayu/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../komgraf/template/bayu/css/style.css"/>

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Komputer Grafik Simulator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Simulator Algoritma</h1>
          <h4>DDA, Bresenham, dan Lingkaran</h4>
          <!--<ul class="list-unstyled">
            <li>Bootstrap 4.0.0-beta</li>
            <li>jQuery 3.2.1</li>
          </ul>-->
		   <div class="row">
      <div class="col s12 m4">
        <div class="card blue-grey darken-1 z-depth-3">
          <div class="card-content white-text">
            <span class="card-title">DDA Algorithm</span>
            <p></p>
            <div class="row">
              <div class="input-field col s12">
                <input id="dda-x1" type="number" class="validate">
                <label for="dda-x1">X1</label>
              </div>
              <div class="input-field col s12">
                <input id="dda-y1" type="number" class="validate">
                <label for="dda-y2">Y1</label>
              </div>
              <div class="input-field col s12">
                <input id="dda-x2" type="number" class="validate">
                <label for="dda-x2">X2</label>
              </div>
              <div class="input-field col s12">
                <input id="dda-y2" type="number" class="validate">
                <label for="dda-y2">Y2</label>
              </div>
            </div>
          </div>
          <div class="card-action">
            <button class="btn waves-effect waves-light" id="btn-buat-dda" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
			<br>
			<br>
            <button class="btn waves-effect waves-light red" id="btn-reset" name="action">reset
              <i class="material-icons right">replay</i>
            </button>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card blue-grey darken-1 z-depth-3">
          <div class="card-content white-text">
            <span class="card-title">Circle Algorithm</span>
            <p></p>
            <div class="row">
              <div class="input-field col s12">
                <input id="circle-r" type="number" class="validate">
                <label for="circle-r">r</label>
              </div>
              <div class="input-field col s12">
                <input id="circle-xc" type="number" class="validate">
                <label for="circle-xc">xc</label>
              </div>
              <div class="input-field col s12">
                <input id="circle-yc" type="number" class="validate">
                <label for="circle-yc">yc</label>
              </div>
            </div>
          </div>
          <div class="card-action">
            <button class="btn waves-effect waves-light" id="btn-buat-circle" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
			<br>
			<br>
            <button class="btn waves-effect waves-light red" id="btn-reset" name="action">reset
              <i class="material-icons right">replay</i>
            </button>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card blue-grey darken-1 z-depth-3">
          <div class="card-content white-text">
            <span class="card-title">Bresenham Algorithm</span>
            <p></p>
            <div class="row">
              <div class="input-field col s12">
                <input id="bres-x1" type="number" class="validate">
                <label for="bres-x1">X1</label>
              </div>
              <div class="input-field col s12">
                <input id="bres-y1" type="number" class="validate">
                <label for="bres-y2">Y1</label>
              </div>
              <div class="input-field col s12">
                <input id="bres-x2" type="number" class="validate">
                <label for="bres-x2">X2</label>
              </div>
              <div class="input-field col s12">
                <input id="bres-y2" type="number" class="validate">
                <label for="bres-y2">Y2</label>
              </div>
            </div>
          </div>
          <div class="card-action">
            <button class="btn waves-effect waves-light" id="btn-buat-bresenham" name="action" href="#row-table">Submit
              <i class="material-icons right">send</i>
            </button>
			<br>
			<br>
            <button class="btn waves-effect waves-light red" id="btn-reset" name="action">reset
              <i class="material-icons right">replay</i>
            </button>
          </div>
		  
        </div>
      </div>
    </div>
        </div>
		  </div>
    </div>

      <div class="row">
	   <div class="row white z-depth-3" id="row-table">
        <div class="col-lg-12 text-center">
		
        <table class="table" id="tabel"></table>
		</div>
		</div>
      </div>
  
    

    <!-- Bootstrap core JavaScript -->
    <script src="../komgraf/template/vendor/jquery/jquery.min.js"></script>
    <script src="../komgraf/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../komgraf/template/bayu/js/jquery.js"></script>
    <script src="../komgraf/template/bayu/js/materialize.min.js"></script>
    <!--<script src="../komgraf/template/bayu/js/main.js"></script>-->
	<script>
	// Panggil Fungsi Buat Tabel
buatTabel();

// Inisiasi Awal Fungsi
//buatLingkaran(5,10,10);
//buatBresenham(10,10,150,150);
//buatDDA(10,10,150,150);

$(document).ready(function(){
  // Binding Tombol Buat
  $(document).on('click','#btn-buat-dda',function(){

    resetTabel();

    //Terima Value dari HTML
    var dda_x1 = parseInt($('#dda-x1').val());
    var dda_x2 = parseInt($('#dda-x2').val());
    var dda_y1 = parseInt($('#dda-y1').val());
    var dda_y2 = parseInt($('#dda-y2').val());

    //Kirim untuk Eksekusi
    buatDDA(dda_x1 ,dda_y1 ,dda_x2 ,dda_y2)
  });
  $(document).on('click','#btn-buat-bresenham',function(){

    resetTabel();

    //Terima Value dari HTML
    var bres_x1 = parseInt($('#bres-x1').val());
    var bres_x2 = parseInt($('#bres-x2').val());
    var bres_y1 = parseInt($('#bres-y1').val());
    var bres_y2 = parseInt($('#bres-y2').val());

    //Kirim untuk Eksekusi
    buatBresenham(bres_x1 ,bres_y1 ,bres_x2 ,bres_y2)
  });
  $(document).on('click','#btn-buat-circle',function(){

    resetTabel();

    //Terima Value dari HTML
    var circle_r = parseInt($('#circle-r').val());
    var circle_xc = parseInt($('#circle-xc').val());
    var circle_yc = parseInt($('#circle-yc').val());

    //Kirim untuk Eksekusi
    buatLingkaran(circle_r,circle_xc,circle_yc);
  });
  $(document).on('click','#btn-reset',function(){
    resetTabel();
  });

});

// Buat Table sebagai Piksel
function buatTabel(){
  var table = document.getElementById("tabel");

  var baris = 50;
  var kolom = 50;
  for(var x = 0;x < baris;x++){
    var tr = document.createElement("tr");
    tr.setAttribute("class","pixel x");
    tr.setAttribute("id","row-"+x);
    table.appendChild(tr);

    for(var y = 0;y < kolom;y++){
      var td = document.createElement("td");
      td.setAttribute("class","pixel y");
      td.setAttribute("id",y);
      var t = tr.appendChild(td);
    }
  }
}

function resetTabel() {
  //Hapus Table
  $('#tabel').empty();
  // Buat Ulang Tabel
  buatTabel();
}

// Algoritma Lingkaran
function buatLingkaran(r, xc, yc){
  // Deklarasi Variabel
  var r,xc,yc,p,x,y;

  // Titik Awal
  p = 1-r;
  x = 0;
  y = r;

  while (x <= y) {
    x = x+1;
    if (p < 0){
      p += 2 * x + 1;
    } else {
      y = y - 1;
      p += 2 * (x - y) + 1;
    }

    // Gambar Titik
    setInterval(buatTitik(xc + x,yc +y),1000);
    setInterval(buatTitik(xc - x,yc +y),1000);
    setInterval(buatTitik(xc + x,yc -y),1000);
    setInterval(buatTitik(xc - x,yc -y),1000);
    setInterval(buatTitik(xc + y,yc +x),1000);
    setInterval(buatTitik(xc - y,yc +x),1000);
    setInterval(buatTitik(xc + y,yc -x),1000);
    setInterval(buatTitik(xc - y,yc -x),1000);
  }
}

function buatBresenham(x1 ,y1 ,x2 ,y2) {
  var x1, y1, x2, y2, x, y, dx, dy, xend, p, duady, duadydx;
  
  //tentukan titik awal dan akhir
  x = x1;
  y = y1;

  //hitung dx dan dy
  dx = Math.abs(x2 - x1);
  dy = Math.abs(y2 - y1);
  
  //hitung p 
  p = 2 * dy - dx;
  duady = 2 * dy;
  duadydx = 2 * (dy - dx);
  
  //tentukan titik awal dan akhir
  if (x1 > x2) {
    x = x2;
    y = y2;
    xend = x1;
  }
  else
  {
    x = x1;
    y = y1;
    xend = x2;
  }

  //gambar titik awal
  setInterval(buatTitik(x,y),1000);

  //perulangan untuk menggambar titik-titik 
  while (x < xend) {
    x++;
    if (p < 0) {
      p += duady;
    }
    else
    {
      if (y1 > y2) {
        y--;
      }
      else y++;
    
      p += duadydx;
    }
    setInterval(buatTitik(x,y),1000);
  }
}

function buatDDA(x1 ,y1 ,x2 ,y2) {
  var x1, y1, x2, y2, x,y,dx, dy, steps, x_inc, y_inc;
  //tentukan titik awal dan akhir
  x = x1;
  y = y1;

  //hitung dx dan dy
  dx = x2 - x1;
  dy = y2 - y1;

  //hitung steps
  if (dx > dy) {
    steps = dx;
  }
  else steps = dy;

  //hitung perubahan nilai x (x_inc) dan y (y_inc)
  x_inc = dx / steps;
  y_inc = dy / steps;

  //gambar titik awal
  setInterval(buatTitik(x,y),1000);

  //perulangan untuk menggambar titik-titik 
  do {
    x += x_inc; // x = x + x_inc
    y += y_inc; // y = y + y_inc
    setInterval(buatTitik(Math.round(x),Math.round(y)),1000);
  } while (x < x2);
}

// Fungsi untuk Menentukan Posisi Titik pada Tabel Piksel.
function buatTitik(x,y){
  var row = $("#row-"+y+" #"+x).css('backgroundColor','red');
}

	</script>

  </body>

</html>
