<?php

class Tipo_Habitacion
{

    private $tipo_habitacion;
    private $db;

    public function __construct()
    {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_reserva', "root", "maxpower3");
    }

    public function truncateTipo_Habitacion()
    {
        $sql = "TRUNCATE TABLE tipo_habitacion";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getTipo_Habitacion()
    {


        $sql = "SELECT * FROM tipo_habitacion";
        foreach ($this->db->query($sql) as $res) {
            $this->tipo_habitacion[] = $res;
        }
        return $this->tipo_habitacion;
        $this->db = null;
    }
    public function insertTipo_Habitacion($id_tipohabitacion)
    {
        $sql = "INSERT INTO tipo_habitacion SET Tipo_habitacion =$id_tipohabitacion";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //Tendra su informacion completa por ahora solo el id

    public function setTipo_Habitacion($id_tipohabitacion)
    {


        $sql = "UPDATE tipo_habitacion SET Tipo_habitacion =$id_tipohabitacion";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTipo_Habitacion($id_tipohabitacion)
    {
        # code...
        $sql = "DELETE FROM tipo_habitacion WHERE Tipo_habitacion= $id_tipohabitacion";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
