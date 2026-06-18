<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <img src="https://112005.sgp1.vultrobjects.com/sikad/gambar/Logo.gA1qr7iMLX.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=YGIP9T9E1N7J9K1U7NIC%2F20260514%2Fsgp1%2Fs3%2Faws4_request&X-Amz-Date=20260514T203745Z&X-Amz-Expires=604800&X-Amz-SignedHeaders=host&x-id=GetObject&X-Amz-Signature=97c43795bdcaa209764f375d74ba8e93da28661f2c79cdeba4bb0f4b9ea321f6" style="width:40px; height:40px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('dashboard')}}">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item active" href="{{ action([App\Http\Controllers\DosenController::class, 'index']) }}">Dosen</a></li>
                <li><a class="dropdown-item" href="{{ action([App\Http\Controllers\MahasiswaController::class, 'index']) }}">Mahasiswa</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ action([App\Http\Controllers\JurusanController::class, 'index']) }}">Jurusan</a></li>
                <li><a class="dropdown-item" href="{{ action([App\Http\Controllers\MataKuliahController::class, 'index']) }}">Mata Kuliah</a></li>
              </ul>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>
          <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
    <a href={{ action([App\Http\Controllers\DosenController::class, 'create']) }}>
        <input type="button" value="Create">
    </a>
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIP</th>
            <th>NIDN</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Pendidikan Terakhir</th>
            <th>Jurusan</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </thead>
        @foreach ($dosen as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->Fullname}}</td>
            <td>{{$d->NIP}}</td>
            <td>{{$d->NIDN}}</td>
            <td>{{$d->Tempat_Lahir}}</td>
            <td>{{$d->Tanggal_Lahir}}</td>
            <td>{{$d->Pendidikan_Terakhir}}</td>
            <td>{{$d->Jurusan_id}}</td>
            <td>{{$d->created_at}}</td>
            <td>
                <a href={{ action([App\Http\Controllers\DosenController::class, 'edit'], $d->id)}}>
                    <input type="button" value="Edit">
                </a>
                <form action="{{ action([App\Http\Controllers\DosenController::class, 'destroy'], $d->id)}}"  method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$d->id}}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>