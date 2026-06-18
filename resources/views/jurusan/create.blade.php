<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{ action([App\Http\Controllers\KelasController::class, 'store']) }}"  method="post">
        @csrf
        <table class="table table-dark table-striped-columns">
            <tr>
                <td>Kode Jurusan</td>
                <td>:</td>
                <td><input type="text" name="Kode_Jurusan" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Jurusan</td>
                <td>:</td>
                <td><input type="text" name="Nama_Jurusan" class="form-control"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Add" class="form-control"><br>
                    <input type="reset" value="Clear" class="form-control">
                </td>
            </tr>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>