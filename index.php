<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <!-- LOGO HEADER END-->
    
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <div class="p-3 mb-2 bg-warning judul"><i class="fa fa-arrow-left fa-2x" style="color: #cc2900;"></i>&nbsp;&nbsp;&nbsp;<b style="font-size: 28px; color: #cc2900;">Form Cuti</b></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-success">
                <div class="Compose-Message">               
                  <div class="panel panel-success">
                    <div class="panel-body">
                      <label>Jenis cuti : </label>
                     
                        <select class="form-control isi" id="exampleFormControlSelect1">
                          <option selected> - Pilih jenis cuti - </option>
                          <option value="1">Cuti tahunan</option>
                          <option value="1">Cuti besar</option>
                          <option value="1">Cuti sakit</option>
                          <option value="1">Cuti melahirkan</option>
                          <option value="1">Cuti karena alasan penting</option>
                        </select>
                         
                      <label>Alasan : </label>
                      <textarea rows="9" class="form-control"></textarea>
                      <label>Tanggal cuti : </label>
                      <!-- <input placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir"> -->
                      <select class="form-control isi" id="exampleFormControlSelect1">
                        <option selected>Masukkan tanggal cuti</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                      </select>  
                      <label>Lama cuti : </label>
                      <div class="row">
                      <div class="col-md-6">
                      <select class="form-control isi" id="exampleFormControlSelect1">
                        <option selected>Masukkan lama cuti</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select> 
                    </div>
                    <div class="col-md-6">
                      <select class="form-control isi" id="exampleFormControlSelect1">
                        <!-- <option selected>Open this select menu</option> -->
                        <option value="1">Hari</option>
                        <option value="2">Bulan</option>
                        <option value="3">Tahun</option>
                      </select>     
                    </div>
                  </div>
                      <label>Alamat : </label>
                      <textarea rows="9" class="form-control"></textarea>
                      <hr />
                      <div class="kirim">
                      <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-envelope"></span> Kirim </a>
                    </div>
                    </div>
                  <div class="panel-footer text-muted">
                </div>
              </div>
            </div>
        </div>                            
      </div>
    </div>
  </div>
</div>
                      
</body>
</html>