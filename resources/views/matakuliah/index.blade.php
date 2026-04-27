<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <a href={{route('mata_kuliah.add')}}>
        <input type="button" value="Create">
    </a>
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>Jurusan ID</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Dosen ID</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </thead>
        @foreach ($mata_kuliah as $mk)
        <tr>
            <td>{{$mk->id}}</td>
            <td>{{$mk->Jurusan}}</td>
            <td>{{$mk->Kode_Mata_Kuliah}}</td>
            <td>{{$mk->Nama_Mata_Kuliah}}</td>
            <td>{{$mk->SKS}}</td>
            <td>{{$mk->Dosen}}</td>
            <td>{{$mk->created_at}}</td>
            <td>
                <a href={{route('mata_kuliah.update', $m->id)}}>
                    <input type="button" value="Edit">
                </a>
                <form action="{{route('mata_kuliah.delete', $m->id)}}"  method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$m->id}}">
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