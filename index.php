<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 p-4">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <legend>Modificar Cuentas</legend>
                        <div class="form-group">
                            <label for="modificar">Seleccionar Usuario</label>
                            <select class="custom-select" name="modificar">
                                <?php
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo '<option value="' . $fila["id"] . '">' . $fila["nombre"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Modificar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 p-4">
            <div class="card">
                <div class="card-body">
                    <h4>Usuarios en el sistema</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Cuenta</th>
                                <th>Contraseña</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_all_query = 'SELECT * FROM usuarios';
                            $res = $conexion->query($sql_all_query);
                            while ($fila = $res->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $fila['id'] . "</td>";
                                echo "<td>" . $fila['nombre'] . "</td>";
                                echo "<td>" . $fila['cuenta'] . "</td>";
                                echo "<td>" . $fila['contrasena'] . "</td>";
                            }
                            ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>