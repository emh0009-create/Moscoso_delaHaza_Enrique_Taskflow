<?php
<<<<<<< HEAD
require_once __DIR__ . '/../app/functions.php';
// Datos de las tareas (simulando una base de datos)
$tareas = [
    ['titulo' => 'Configurar el entorno de desarrollo', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la estructura de carpetas', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Diseñar la base de datos', 'completado' => false, 'prioridad' => 'media'],
    ['titulo' => 'Implementar el sistema de login', 'completado' => false, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la vista de tareas', 'completado' => false, 'prioridad' => 'baja']
];

include '../app/views/header.php';
?>

<h2>Tareas Pendientes</h2>
<ul>
    <?php foreach ($tareas as $tarea) : 
         echo renderizarTarea($tarea); 
    endforeach; ?>
</ul>

<?php include '../app/views/footer.php'; ?>
=======
require_once '../app/functions.php'; 
require_once '../app/data.php';
require_once '../app/controllers/AuthController.php'; 

$accion = $_GET['accion'] ?? 'login';
switch ($accion) {
case 'login':

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$email = $_POST['email'];
$password = $_POST['password'];
if (handleLogin($email, $password, $usuarios_bbdd)) {
header('Location: index.php?accion=dashboard'); 
exit;
} else {
$error = "Credenciales incorrectas."; 
vista
}
}

include '../app/views/login.view.php';
break;
case 'dashboard':

if (!checkAuth()) {header('Location: index.php?accion=login');
exit;
}

$tareas = [
['titulo' => 'Implementar Login', 'completado' => true,
'prioridad' => 'alta'],
['titulo' => 'Añadir Pruebas Unitarias', 'completado' => false,
'prioridad' => 'media']
];

include '../app/views/tareas.view.php';
break;
case 'logout':
handleLogout();
break;
default:
echo "Error 404: Página no encontrada.";
break;
}
?>
>>>>>>> 13f3020 (Refactorizar el código para usar funciones, creación de registro y login, convertir el index.php en controlador final (Router), creación de formularios POST y Sesiones PHP para crear un sistema de login seguro y por último Pruebas unitarias.)
