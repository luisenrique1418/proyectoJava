<?php
include_once 'db.php';

class Survey extends DB{

    private $totalVotes;
    private $optionSelected;

    public function setOptionSelected($option){
        $this->optionSelected = $option;
    }

    public function getOptionSelected(){
        return $this->optionSelected;
    }

    public function vote($t){
        // $query = $this->connect()->prepare('UPDATE lenguajes SET votos = votos + 1 WHERE opcion = :opcion');
        // $query->execute(['opcion' => $this->optionSelected]);
        $stm = "UPDATE `".$t."` SET votos = votos + 1 WHERE opcion = '".$this->optionSelected."'";
        $query = $this->connect()->query($stm);
    }

    public function showResults($t){
        return $this->connect()->query("SELECT * FROM `$t`");
    }

    public function getTotalVotes($t){
        $query =$this->connect()->query("SELECT SUM(votos) AS votos_totales FROM $t");
        $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->votos_totales;
        return $this->totalVotes;
    }

    public function getPercentageVotes($votes){
        return round(($votes / $this->totalVotes) * 100, 0);
    }
}
?>
