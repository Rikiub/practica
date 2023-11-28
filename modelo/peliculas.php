<?php

require_once "modelo/basedatos.php";

class Pelicula
{
    private $conn;
    private $codigo;
    private $titulo;
    private $fecha_estreno;
    private $genero;

    function __construct()
    {
        $this->conn = new BaseDatos();
        $this->conn = $this->conn->Conex();
    }

    public function insertar()
    {
        $query = "INSERT INTO
                peliculas 
                (titulo, fecha_estreno, genero)
            VALUES
                (:titulo, :fecha_estreno, :genero)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':fecha_estreno', $this->fecha_estreno);
        $stmt->bindParam(':genero', $this->genero);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function consultar()
    {
        $query = "SELECT * FROM peliculas";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        if ($result) {
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } else {
            return false;
        }
    }

    public function eliminar($query)
    {
        $query = "DELETE FROM peliculas WHERE codigo='" . $query . "'";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        if ($result) {
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } else {
            return false;
        }
    }

    public function buscar($query)
    {
        $this->codigo = $query;
        $query = "SELECT * FROM peliculas WHERE codigo='" . $this->codigo . "'";
        $data = $this->conn->prepare($query);
        $result = $data->execute();

        if ($result) {
            $data = $data->fetch(PDO::FETCH_ASSOC);
            return $data;
        } else {
            return false;
        }
    }

    // Getter y Setter

    public function set_codigo($value)
    {
        $this->codigo = $value;
    }
    public function get_codigo()
    {
        return $this->codigo;
    }

    public function set_titulo($value)
    {
        $this->titulo = $value;
    }
    public function get_titulo()
    {
        return $this->titulo;
    }

    public function set_fecha($value)
    {
        $this->fecha_estreno = $value;
    }
    public function get_fecha()
    {
        return $this->fecha_estreno;
    }

    public function set_genero($value)
    {
        $this->genero = $value;
    }
    public function get_genero()
    {
        return $this->genero;
    }
}
