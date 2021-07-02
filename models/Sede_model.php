<?php

class Sede
{

    private $sede;
    private $db;

    public function __construct()
    {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_reserva', "root", "maxpower3");
    }

    public function truncateSede()
    {
        $sql = "TRUNCATE TABLE sede";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getSede()
    {


        $sql = "SELECT * FROM sede";
        foreach ($this->db->query($sql) as $res) {
            $this->sede[] = $res;
        }
        return $this->sede;
        $this->db = null;
    }
    public function insertSede($precio, $tipo_habitacion, $temporada)
    {
        $sql = "INSERT INTO sede SET Precio =$precio ,Tipo_habitacion = $tipo_habitacion, Temporada = $temporada";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //Tendra su informacion completa por ahora solo el id

    public function setSede($id_precio, $precio, $tipo_habitacion, $temporada)
    {


        $sql = "UPDATE sede SET Precio =$precio ,Tipo_habitacion = $tipo_habitacion, Temporada = $temporada WHERE Id_precio= $id_precio";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteSede($id_precio)
    {
        # code...
        $sql = "DELETE FROM sede WHERE Id_precio= $id_precio";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
