<?php

class Temporada
{

    private $temporada;
    private $db;

    public function __construct()
    {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=hotel_reserva', "root", "maxpower3");
    }

    public function truncateTemporada()
    {
        $sql = "TRUNCATE TABLE temporada";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getTemporada()
    {


        $sql = "SELECT * FROM temporada";
        foreach ($this->db->query($sql) as $res) {
            $this->temporada[] = $res;
        }
        return $this->temporada;
        $this->db = null;
    }
    public function insertTemporada($F_inicio, $F_Fin)
    {
        $sql = "INSERT INTO temporada SET F_inicio =$F_inicio ,F_Fin = $F_Fin";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //Tendra su informacion completa por ahora solo el id

    public function setTemporada($IdTemporada, $F_inicio, $F_Fin)
    {


        $sql = "UPDATE temporada SET F_inicio =$F_inicio ,F_Fin = $F_Fin WHERE Id_temporada= $IdTemporada";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTemporada($IdTemporada)
    {
        # code...
        $sql = "DELETE FROM temporada WHERE Id_temporada= $IdTemporada";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
