
<!DOCTYPE html>
<html lang="id">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Absensi</title>
    </head>
   
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-warning"  href="#">Ranking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Input Data<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Daftar Ranking
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn bg-warning" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container p-4 border">
  <div class="row">
    <div class="col-md-4">
      <h3 class="text-center">Input Data</h3>
      
      <div class="mb-3">
      <label>Nama</label>
      <input type="text" class="form-control">
      </div>
      
      <div class="mb-3">
      <label>Nilai</label>
      <input type="text" class="form-control">
      </div>

 <input type="submit" class="btn bg-warning">
 
    </div>
    <div class="col-md-8">
<h3 class="text-center">Daftar Ranking</h3>
        <table border="1" class="table-bordered table text-center">
           <thead class="bg-warning">
            <tr>
              <th>No.</th>
            <th>Name</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
          </table>
    </div>
  </div>
  </div>
  <footer class="p-3 mb-2 bg-dark text-white text-center">
    <p class="fw-bold">© 2023 Copyright Ananda David Saputra</p>
  </footer>
    </body>
</html>