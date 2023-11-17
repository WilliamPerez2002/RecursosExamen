    <?php
include_once("Conexion.php");

class Crud{

    public static function select(){

    $con = new Conexion();

    $conexion = $con->conectar();

    $sql = "SELECT * FROM usuarios";

    $resultado = $conexion->prepare($sql);

    $resultado->execute();

    $cont = 0;
    while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    
    $datos[$cont] = $fila;
    $cont++;
    }
    $json = json_encode($datos);

    echo $json;


    }

    public static function insert(){
        $cedula = $_POST['CEDULA'];
        $nombre = $_POST['NOMBRE'];
        $apellido = $_POST['APELLIDO'];
        $direccion = $_POST['DIRECCION'];
        $telefono = $_POST['TELEFONO'];


        $con = new Conexion();

        $conexion = $con->conectar();

        $sql = "INSERT INTO usuarios (CEDULA, NOMBRE, APELLIDO, DIRECCION, TELEFONO) 
        VALUES ('$cedula', '$nombre', '$apellido', '$direccion', '$telefono')";

        $resultado = $conexion->prepare($sql);

        $resultado->execute();

        echo json_encode($_POST);



    }

    public static function update(){
        $cedula = $_GET['CEDULA'];

        $data = file_get_contents("php://input");

        $obj = json_decode($data);

        $nombre = $obj['NOMBRE'];
        $apellido = $obj['APELLIDO'];
        $direccion = $obj['DIRECCION'];
        $telefono = $obj['TELEFONO'];
        


        $con = new Conexion();

        $conexion = $con->conectar();

        $sql = "UPDATE usuarios 
        SET NOMBRE='$nombre',APELLIDO='$apellido', DIRECCION='$direccion', TELEFONO='$telefono'
        WHERE CEDULA='$cedula'";

        $resultado = $conexion->prepare($sql);

        $resultado->execute();

        echo json_encode($_POST);


    }

    public static function delete($cedula){


        echo json_encode($cedula);

        $con = new Conexion();

        $conexion = $con->conectar();

        $sql = "DELETE FROM usuarios WHERE CEDULA='$cedula'";

        $resultado = $conexion->prepare($sql);

        $resultado->execute();

        echo json_encode('ELIMINADO EXITOSAMENTE');

    }


}

?>