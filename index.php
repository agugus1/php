<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Datos Presentable con Carga de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Estilos personalizados para mejorar la apariencia */
        body {
            background-color: #e9ecef; /* Gris claro */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 900px; /* Ancho máximo del contenedor */
        }

        .table-container {
            border: none; /* Elimina el borde */
            border-radius: 15px; /* Aumenta el radio del borde */
            overflow: hidden;
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.15); /* Sombra más suave */
            margin-bottom: 4rem; /* Aumenta el espacio inferior */
        }

        .table {
            font-size: 1.1rem; /* Tamaño de fuente ligeramente más pequeño */
            color: #495057; /* Color de texto más oscuro */
        }

        .table thead th {
            background-color: #343a40; /* Gris oscuro */
            color: #fff; /* Texto blanco */
            border-bottom: 5px solid #212529; /* Borde inferior más grueso */
            padding: 1.2rem; /* Espaciado interno */
            font-weight: 600; /* Fuente más gruesa */
            text-transform: uppercase;
            letter-spacing: 0.06em; /* Espaciado entre letras */
            text-align: center;
        }

        .table tbody td {
            padding: 1.2rem; /* Espaciado interno */
            vertical-align: middle;
            text-align: center;
        }

        .table tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.03); /* Gris muy claro */
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.07); /* Resaltado sutil */
            transform: scale(1.01); /* Ligero efecto de zoom */
            transition: transform 0.2s ease-in-out; /* Transición suave */
        }

        .highlight {
            font-weight: 700; /* Fuente aún más gruesa */
            color: #007bff;
        }

        .form-container {
            background-color: #fff; /* Fondo blanco */
            padding: 2.5rem; /* Espaciado interno */
            border-radius: 15px; /* Aumenta el radio del borde */
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.1); /* Sombra más suave */
            margin-bottom: 3rem; /* Aumenta el espacio inferior */
        }

        .form-label {
            font-weight: 500;
            color: #495057; /* Color de texto más oscuro */
        }

        .form-control {
            border: 1px solid #ced4da; /* Borde más claro */
            border-radius: 8px; /* Bordes más redondeados */
            padding: 0.75rem; /* Espaciado interno */
        }

        .btn-primary {
            background-color: #28a745; /* Verde */
            border-color: #28a745;
            transition: background-color 0.3s ease; /* Transición suave */
        }

        .btn-primary:hover {
            background-color: #218838; /* Verde más oscuro */
            border-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545; /* Rojo */
            border-color: #dc3545;
            transition: background-color 0.3s ease; /* Transición suave */
        }

        .btn-danger:hover {
            background-color: #c82333; /* Rojo más oscuro */
            border-color: #c82333;
        }

        .alert {
            border-radius: 8px; /* Bordes más redondeados */
            margin-top: 1rem; /* Espacio superior */
        }

        h2 {
            color: #343a40; /* Color de texto más oscuro */
            font-weight: 700; /* Fuente más gruesa */
            margin-bottom: 2.5rem; /* Aumenta el espacio inferior */
            text-align: center;
        }

        /* Iconos */
        .table thead th i {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body class="container py-5">

    <h2 class="mb-4 text-center">
        <i class="fas fa-users"></i>
        Tabla de Datos Presentable
    </h2>

    <!-- Formulario para agregar datos -->
    <div class="form-container">
        <form method="post" action="">
            <div class="mb-3">
                <label for="documento" class="form-label">
                    <i class="fas fa-id-card"></i>
                    Documento:
                </label>
                <input type="text" class="form-control" id="documento" name="documento" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">
                    <i class="fas fa-user"></i>
                    Nombre:
                </label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">
                    <i class="fas fa-birthday-cake"></i>
                    Edad:
                </label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>
            <button type="submit" class="btn btn-primary" name="agregar">
                <i class="fas fa-plus-circle"></i>
                Agregar Persona
            </button>
        </form>
    </div>

    <div class="table-container">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">
                        <i class="fas fa-hashtag"></i>
                        #
                    </th>
                    <th scope="col">
                        <i class="fas fa-id-card-alt"></i>
                        Documento
                    </th>
                    <th scope="col">
                        <i class="fas fa-signature"></i>
                        Nombre
                    </th>
                    <th scope="col">
                        <i class="fas fa-child"></i>
                        Edad
                    </th>
                    <th scope="col">
                        <i class="fas fa-trash-alt"></i>
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = "localhost";
                $usuario = "root";
                $contrasena = "";
                $base_datos = "escuela-db";

                $conn = new mysqli($host, $usuario, $contrasena, $base_datos);

                // Verificar conexión
                if ($conn->connect_error) {
                    die("<div class='alert alert-danger'>Conexión fallida: " . $conn->connect_error . "</div>");
                }

                // Procesar el formulario si se envía
                if (isset($_POST['agregar'])) {
                    $documento = $_POST['documento'];
                    $nombre = $_POST['nombre'];
                    $edad = $_POST['edad'];

                    $sql_insert = "INSERT INTO persona (documento, nombre, edad) VALUES ('$documento', '$nombre', '$edad')";
                    if ($conn->query($sql_insert) === TRUE) {
                        echo "<div class='alert alert-success'>
                                <i class='fas fa-check-circle'></i>
                                Persona agregada correctamente.
                              </div>";
                    } else {
                        echo "<div class='alert alert-danger'>
                                <i class='fas fa-exclamation-triangle'></i>
                                Error al agregar persona: " . $conn->error . "
                              </div>";
                    }
                }

                // Procesar eliminación
                if (isset($_POST['eliminar'])) {
                    $idpersona = $_POST['idpersona'];
                    $sql_delete = "DELETE FROM persona WHERE idpersona = '$idpersona'";
                    if ($conn->query($sql_delete) === TRUE) {
                        echo "<div class='alert alert-success'>
                                <i class='fas fa-check-circle'></i>
                                Persona eliminada correctamente.
                              </div>";
                    } else {
                        echo "<div class='alert alert-danger'>
                                <i class='fas fa-exclamation-triangle'></i>
                                Error al eliminar persona: " . $conn->error . "
                              </div>";
                    }
                }

                // Consulta a la base de datos
                $sql = "SELECT idpersona, documento, nombre, edad FROM persona";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                    $row_number = 1;
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>{$row_number}</th>
                                <td>{$fila['documento']}</td>
                                <td><span class='highlight'>{$fila['nombre']}</span></td>
                                <td>{$fila['edad']}</td>
                                <td>
                                    <form method='post' action='' style='display:inline;'>
                                        <input type='hidden' name='idpersona' value='{$fila['idpersona']}'>
                                        <button type='submit' class='btn btn-danger btn-sm' name='eliminar'>
                                            <i class='fas fa-trash-alt'></i>
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                              </tr>";
                        $row_number++;
                    }
                } else {
                    echo "<tr>
                            <td colspan='5'>
                                <div class='alert alert-info'>
                                    <i class='fas fa-info-circle'></i>
                                    No se encontraron resultados.
                                </div>
                            </td>
                          </tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
</html>
