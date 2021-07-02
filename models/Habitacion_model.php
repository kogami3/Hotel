<?php

class Habitacion
{

    private $habitacion;
    private $db;

    public function __construct()
    {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_reserva', "root", "maxpower3");
    }

    public function truncateHabitacion()
    {
        $sql = "TRUNCATE TABLE habitacion";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getHabitacion()
    {


        $sql = "SELECT * FROM habitacion";
        foreach ($this->db->query($sql) as $res) {
            $this->habitacion[] = $res;
        }
        return $this->habitacion;
        $this->db = null;
    }
    public function insertHabitacion($capacidad, $tipo_habitacion)
    {
        $sql = "INSERT INTO habitacion SET Capacidad=$capacidad ,Tipo_habitacion = $tipo_habitacion";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //Tendra su informacion completa por ahora solo el id

    public function setHabitacion($IdHabitacion, $capacidad, $tipo_habitacion)
    {


        $sql = "UPDATE habitacion SET Capacidad=$capacidad ,Tipo_habitacion = $tipo_habitacion WHERE Id_habitacion= $IdHabitacion";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteHabitacion($IdHabitacion)
    {
        # code...
        $sql = "DELETE FROM habitacion WHERE Id_habitacion= $IdHabitacion";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
