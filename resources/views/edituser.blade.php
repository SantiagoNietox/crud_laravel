<!-- FILEPATH: /c:/laragon/www/prueba-santiago/resources/views/register.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Editar usuario</div>
                    <div class="card-body">
                        <form action="{{ route('viewusers.update', ['viewuser' => $users->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="id">ID:</label>
                                <input type="text" class="form-control" name="id" value="{{$users->id}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="name" value="{{$users->name}}" required>
                            </div>
                            <div></div>
                            <div class="form-group">
                                <label for="precio">Email:</label>
                                <input type="text" class="form-control" name="email" value="{{$users->email}}" required>
                            </div>
                            <div class="form-group">
                                <label for="cantidad">Edad:</label>
                                <input type="number" class="form-control" name="age" value="{{$users->age}}" required>
                            </div>
                            <div class="form-group">
                                <label for="cantidad">sexo:</label>
                                <input type="text" class="form-control" name="sexo" value="{{$users->sexo}}" required>
                            </div>
                            <div class="form-group" id="divs">
                                <label for="cantidad">Direccion:</label>
                                <input type="text" class="form-control" name="address" value="{{$users->address}}" required>
                            </div>



                            <div class="form-group text-center" style="margin-top: 20px;">
                                <button type="submit" class="btn btn-primary" style=" border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Editar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>