<?php
class Estudiante
{
    private $nombre, $apellido, $idcurso , $id;

    public function __construct( $nombre, $apellido, $idcurso , $id = null)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->idcurso = $idcurso;
        
        
        
        
        
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO alumnos
            (nombre, apellido,idcurso)
                VALUES
                (?, ?, ?)");
        $sentencia->bind_param("ssi", $this->nombre, $this->apellido, $this->idcurso);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre, apellido , idcurso  FROM alumnos");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre, apellido , idcurso FROM alumnos WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update estudiantes set nombre = ?, grupo = ? where id = ?");
        $sentencia->bind_param("ssi", $this->nombre, $this->grupo, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
