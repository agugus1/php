<?php
session_start();

// Conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "escuela-db";

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("<div class='alert alert-danger'>Conexión fallida: " . $conn->connect_error . "</div>");
}

// Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === "admin@escuela.com" && $password === "123456") {
        $_SESSION['loggedin'] = true;
        header("Location: index.php?page=home");
        exit;
    } else {
        $login_error = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}

// Logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

// CRUD
if (isset($_POST['agregar'])) {
    $documento = $conn->real_escape_string($_POST['documento']);
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $edad = $conn->real_escape_string($_POST['edad']);

    $sql_insert = "INSERT INTO persona (documento, nombre, edad) VALUES ('$documento', '$nombre', '$edad')";
    $conn->query($sql_insert);
}

if (isset($_POST['eliminar'])) {
    $idpersona = $conn->real_escape_string($_POST['idpersona']);
    $sql_delete = "DELETE FROM persona WHERE idpersona = '$idpersona'";
    $conn->query($sql_delete);
}

if (isset($_POST['modificar'])) {
    $idpersona = $conn->real_escape_string($_POST['idpersona']);
    $documento = $conn->real_escape_string($_POST['documento']);
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $edad = $conn->real_escape_string($_POST['edad']);

    $sql_update = "UPDATE persona SET documento='$documento', nombre='$nombre', edad='$edad' WHERE idpersona='$idpersona'";
    $conn->query($sql_update);
}

// Cargar datos para modificar
$estudiante_a_modificar = null;
if (isset($_GET['edit'])) {
    $idpersona = $conn->real_escape_string($_GET['edit']);
    $sql = "SELECT * FROM persona WHERE idpersona = '$idpersona'";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows > 0) {
        $estudiante_a_modificar = $resultado->fetch_assoc();
    }
}

// Página actual
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
if (!isset($_SESSION['loggedin']) && $page !== 'login') {
    header("Location: index.php?page=login");
    exit;
}
?>

<?php if ($page === 'login'): ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Educativo - Login</title>
    <style>
        /* Estilos login */
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .login-container img {
            width: 80px;
            margin-bottom: 1rem;
        }
        h1 {
            margin-bottom: 1rem;
        }
        .input-group {
            margin-bottom: 1rem;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
        }
        input {
            width: 100%;
            padding: 0.75rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            background: linear-gradient(to right, #6e8efb, #a777e3);
            color: white;
            font-weight: bold;
        }
        .error-message {
            color: red;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
<div class="login-container">
    <img src="https://placehold.co/100x100" alt="Logo">
    <h1>Iniciar Sesión</h1>
    <form method="post">
        <div class="input-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="input-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" name="login">Ingresar</button>
    </form>
    <?php if (isset($login_error)): ?>
        <div class="error-message"><?php echo $login_error; ?></div>
    <?php endif; ?>
</div>
</body>
</html>

<?php elseif ($page === 'home'): ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Sistema Educativo</title>
    <style>
        /* Estilos home */
        body {
            background-color: #f5f7fa;
            font-family: sans-serif;
        }
        header {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            padding: 1.5rem;
            text-align: center;
        }
        .dashboard-cards {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        .card a {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background: linear-gradient(to right, #6e8efb, #a777e3);
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-form {
            text-align: center;
            margin-top: 1rem;
        }
        .logout-form button {
            background: #e74c3c;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<header>
    <h1>Sistema Educativo</h1>
    <p>Bienvenido, Administrador</p>
</header>

<div class="dashboard-cards">
    <div class="card">
        <h2>Datos de Estudiantes</h2>
        <p>Accede y gestiona la información de los estudiantes.</p>
        <a href="index.php?page=dashboard">Ir a Estudiantes</a>
    </div>
    <div class="card">
        <h2>Calificaciones</h2>
        <p>Visualiza y administra las calificaciones.</p>
        <a href="#">Próximamente</a>
    </div>
</div>

<div class="logout-form">
    <form method="post">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>
</div>
</body>
</html>

<?php elseif ($page === 'dashboard'): ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            padding: 2rem;
            font-family: sans-serif;
        }
        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table {
            background: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center mb-4">Gestión de Estudiantes</h2>

    <div class="form-container">
        <form method="post">
            <div class="mb-3">
                <label for="documento" class="form-label">Documento</label>
                <input type="text" name="documento" id="documento" class="form-control" value="<?php echo $estudiante_a_modificar['documento'] ?? ''; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $estudiante_a_modificar['nombre'] ?? ''; ?>" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $estudiante_a_modificar['edad'] ?? ''; ?>" required>
            </div>
            <input type="hidden" name="idpersona" value="<?php echo $estudiante_a_modificar['idpersona'] ?? ''; ?>">
            <button type="submit" name="<?php echo isset($estudiante_a_modificar) ? 'modificar' : 'agregar'; ?>" class="btn btn-success">
                <?php echo isset($estudiante_a_modificar) ? 'Modificar Persona' : 'Agregar Persona'; ?>
            </button>
            <a href="index.php?page=home" class="btn btn-secondary">Volver</a>
        </form>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark text-center">
        <tr>
            <th>#</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Acción</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM persona";
        $resultado = $conn->query($sql);
        $num = 1;
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>$num</td>
                        <td>{$row['documento']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['edad']}</td>
                        <td>
                            <a href='index.php?page=dashboard&edit={$row['idpersona']}' class='btn btn-warning btn-sm'>Modificar</a>
                            <form method='post' style='display:inline;'>
                                <input type='hidden' name='idpersona' value='{$row['idpersona']}'>
                                <button type='submit' name='eliminar' class='btn btn-danger btn-sm'>Eliminar</button>
                            </form>
                        </td>
                      </tr>";
                $num++;
            }
        } else {
            echo "<tr><td colspan='5' class='text-center'>No hay registros</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php endif; ?>
