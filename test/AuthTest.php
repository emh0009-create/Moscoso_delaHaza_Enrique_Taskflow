<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../app/data.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
class AuthTest extends TestCase
{

public function testLoginConCredencialesValidas()
{

$resultado = handleLogin('usuario1@taskflow.com', 'pass123',
TAREAS_BBDD);

$this->assertTrue($resultado);
}

public function testLoginConCredencialesInvalidas()
{
global TAREAS_BBDD;

$resultado = handleLogin('usuario1@taskflow.com', 'pass_erroneo',
TAREAS_BBDD);

$this->assertFalse($resultado);
}
}
?>
