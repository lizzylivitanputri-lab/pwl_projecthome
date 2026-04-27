<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{route('mata_kuliah.edit', $mata_kuliah->id)}}"  method="post">
        @csrf
        <input type="hidden" name="id" value="{{$dosen->id}}">
        <input type="hidden" name="_method" value="PUT">
        <table class="table table-success table-striped-columns">
            <tr>
                <td>Jurusan ID</td>
                <td>:</td>
                <td><input type="text" name="Jurusan" value="{{$mata_kuliah->Jurusan}}"></td>
            </tr>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="Kode_Mata_Kuliah" value="{{$mata_kuliah->Kode_Mata_Kuliah}}"></td>
            </tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="Nama_Mata_Kuliah" value="{{$mata_kuliah->Nama_Mata_Kuliah}}"></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="text" name="SKS" value="{{$mata_kuliah->SKS}}"></td>
            </tr>
            <tr>
                <td>Dosen ID</td>
                <td>:</td>
                <td><input type="text" name="Dosen" value="{{$mata_kuliah->Dosen}}"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Update">
                    <input type="reset" value="Clear">
                </td>
            </tr>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>