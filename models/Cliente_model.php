<?php

class Cliente
{

    private $cliente;
    private $db;

    public function __construct()
    {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_reserva', "root", "maxpower3");
    }

    public function truncateCliente()
    {
        $sql = "TRUNCATE TABLE cliente";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getClientes()
    {


        $sql = "SELECT * FROM cliente";
        foreach ($this->db->query($sql) as $res) {
            $this->cliente[] = $res;
        }
        return $this->cliente;
        $this->db = null;
    }
    public function insertCliente($cliente_id)
    {
        $sql = "INSERT INTO cliente SET Id_Cliente=$cliente_id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //Tendra su informacion completa por ahora solo el id

    public function setCliente($cliente_id)
    {


        $sql = "UPDATE cliente SET Id_Cliente= $cliente_id WHERE cliente_id= $cliente_id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCliente($cliente_id)
    {
        # code...
        $sql = "DELETE FROM cliente WHERE Id_Cliente=$cliente_id";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
