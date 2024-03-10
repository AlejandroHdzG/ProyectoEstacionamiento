<?php

// Incluimos las clases necesarias
include(__DIR__.'/../../../data/class/accesscard.php');
include(__DIR__.'/../../../data/class/employee.php');
include_once(__DIR__.'/../../../data/conexion.php');

session_start();

// Establecemos los valores de los setters para el nuevo empleado
$employee = new Employee();
$employee->setName($_POST["nombreEmpleado"]);
$employee->setLastNameP($_POST["apPaternoEmpleado"]);
$employee->setLastNameM($_POST["apMaternoEmpleado"]);
$employee->setRol($_POST["rolEmpleado"]);
$employee->setFKclient($_SESSION['client_id']);

// Insertamos el empleado en la base de datos
$conexion = new conexion();
$conexion->connect();

$id = $employee->setEmployee(); // Obtenemos el ID del empleado recién insertado

if ($id > 0) {
    // Obtenemos el último ID de empleado insertado
    $query_last_employee = "SELECT MAX(pk_employee) AS last_employee_id FROM Employee";
    $result_last_employee = $conexion->execquery($query_last_employee);

    if ($result_last_employee && mysqli_num_rows($result_last_employee) > 0) {
        $row_last_employee = mysqli_fetch_assoc($result_last_employee);
        $employee_id = $row_last_employee['last_employee_id'];

        // Generamos el código QR
        function generateRandomCode($length = 12) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = '';
            $max = strlen($characters) - 1;

            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[mt_rand(0, $max)];
            }

            return $code;
        }

        $QR_code = generateRandomCode();

        $creation_date = date('Y-m-d H:i:s'); // Fecha actual
        $end_date = date('Y-m-d H:i:s', strtotime('+1 year', strtotime($creation_date))); // Un año después

        if (isset($_SESSION['client_id'])) {
            // Crear una instancia de AccessCard
            $access_card = new AccessCard();

            // Establecer los valores necesarios para la tarjeta de acceso
            $access_card->setQRCode($QR_code);
            $access_card->setCreationDate($creation_date);
            $access_card->setEndDate($end_date);
            $access_card->setCardType('Empleado');
            $access_card->setFKEmployee($employee_id); // Asignar el ID del último empleado
    
            // Insertar la tarjeta de acceso en la base de datos
            $insert_success = $access_card->insertAccessCard();
    
            if ($insert_success) {
                // Redirigir o mostrar un mensaje de éxito
                header('Location: ../../../view/client/empleados.php');
                exit(); // Finalizar el script después de redirigir
            } else {
                echo 'No se pudo generar la tarjeta de acceso.';
            }
        } else {
            echo "La sesión no está iniciada o el cliente no está identificado.";
        }
    } else {
        echo "No se encontró el último empleado insertado.";
    }
} else {
    echo "No se pudo insertar el empleado.";
}

