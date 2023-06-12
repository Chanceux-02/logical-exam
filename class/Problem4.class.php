<?php

class Problem4 extends Db{
    
    public function problem4(){
        $con = $this->connect();
       $stmt = "SELECT * FROM `problem_four`";
       $stmt2 = $con->prepare($stmt);
       $stmt2->execute();

       return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateProblem4($date, $id){
        $con = $this->connect();
       $stmt = "UPDATE `problem_four`
                SET `trn_date` = ?
                WHERE `id` = ?;";
       $stmt2 = $con->prepare($stmt);
       $stmt2->execute([$date, $id]);

    //    return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }

}

