<?php

class Precio_Habitacion
{

    private $precio_habitacion;
    private $db;

    public function __construct()
    {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_reserva', "root", "maxpower3");
    }

    public function truncatePrecioHabitacion()
    {
        $sql = "TRUNCATE TABLE precio_habitacion";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getPrecioHabitacion()
    {


        $sql = "SELECT * FROM precio_habitacion";
        foreach ($this->db->query($sql) as $res) {
            $this->precio_habitacion[] = $res;
        }
        return $this->precio_habitacion;
        $this->db = null;
    }
    public function insertPrecioHabitacion($precio, $tipo_habitacion, $temporada)
    {
        $sql = "INSERT INTO precio_habitacion SET Precio =$precio ,Tipo_habitacion = $tipo_habitacion, Temporada = $temporada";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //Tendra su informacion completa por ahora solo el id

    public function setPrecioHabitacion($id_precio, $precio, $tipo_habitacion, $temporada)
    {


        $sql = "UPDATE precio_habitacion SET Precio =$precio ,Tipo_habitacion = $tipo_habitacion, Temporada = $temporada WHERE Id_precio= $id_precio";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePrecioHabitacion($id_precio)
    {
        # code...
        $sql = "DELETE FROM precio_habitacion WHERE Id_precio= $id_precio";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
