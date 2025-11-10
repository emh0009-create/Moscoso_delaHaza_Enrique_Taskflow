<?php
$tareas = [
    ['titulo' => 'Configurar el entorno de desarrollo', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la estructura de carpetas', 'completado' => true, 'prioridad' => 'alta'],
    ['titulo' => 'Diseñar la base de datos', 'completado' => false, 'prioridad' => 'media'],
    ['titulo' => 'Implementar el sistema de login', 'completado' => false, 'prioridad' => 'alta'],
    ['titulo' => 'Crear la vista de tareas', 'completado' => false, 'prioridad' => 'baja']
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow</title>
    <style>
        body { font-family: sans-serif; margin: 2em; background-color: #f1f5f9; }
        ul { list-style-type: none; padding: 0; }
        .completed { text-decoration: line-through; color: #9ca3af; }
        .task-item { padding: 10px; border-left: 5px solid; margin-bottom: 8px; background-color: #ffffff; box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1); border-radius: 0 4px 4px 0; transition: transform 0.2s ease; }
        .task-item:hover { transform: translateX(5px); }
        .priority-alta { border-left-color: #ef4444; }
        .priority-media { border-left-color: #f59e0b; }
        .priority-baja { border-left-color: #22c55e; }
        header, footer { text-align: center; color: #475569; }
    </style>
</head>
<body>
    <header>
        <h1>Mi Lista de Tareas</h1>

        <ul>
            <?php foreach ($tareas as $tarea) : 
            echo renderizarTarea($tarea); 
            endforeach; ?>
        </ul>

    </header>
    
    <main>
        
    <footer>
        <p>© <?php echo date('Y'); ?> TaskFlow</p>
    </footer>
    </main>
</body>
</html>