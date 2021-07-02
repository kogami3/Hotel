<?php

class Reserva
{

    private $reserva;
    private $db;

    public function __construct()
    {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_reserva', "root", "maxpower3");
    }

    public function truncateReserva()
    {
        $sql = "TRUNCATE TABLE reserva";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getReserva()
    {


        $sql = "SELECT * FROM reserva";
        foreach ($this->db->query($sql) as $res) {
            $this->reserva[] = $res;
        }
        return $this->reserva;
        $this->db = null;
    }
    public function insertReserva($f_entrada, $f_salida, $id_habitacion, $cliente)
    {
        $sql = "INSERT INTO reserva SET F_Entrada =$f_entrada ,F_Salida = $f_salida, Id_Habitacion    = $id_habitacion, Cliente = $cliente";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //Tendra su informacion completa por ahora solo el id

    public function setReserva($id_reserva, $f_entrada, $f_salida, $id_habitacion, $cliente)
    {


        $sql = "UPDATE reserva SET F_Entrada =$f_entrada ,F_Salida = $f_salida, Id_Habitacion    = $id_habitacion, Cliente = $cliente WHERE IdReserva= $id_reserva";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteReserva($id_reserva)
    {
        # code...
        $sql = "DELETE FROM reserva WHERE IdReserva= $id_reserva";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
