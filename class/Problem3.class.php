<?php

class Problem3 extends Db{
    
    public function joinProblem3(){
        $con = $this->connect();
        $stmt = "SELECT `problem_three_salesfile`.`customer_code`, `problem_three_cusfile`.`fullname`
                    FROM problem_three_cusfile
                    JOIN problem_three_salesfile 
                    ON `problem_three_cusfile`.`customer_code` = `problem_three_salesfile`.`customer_code`;";
        $stmt2 = $con->prepare($stmt);
        $stmt2->execute();

        return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }
    public function fetchProblem3(){
        $con = $this->connect();
        $stmt = "SELECT * FROM `problem_three_salesfile`";
        $stmt2 = $con->prepare($stmt);
        $stmt2->execute();

        return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }


    public function updateProblem3($fullname, $cusCode){
        $con = $this->connect();
       $stmt = "UPDATE `problem_three_salesfile`
                SET `fullname` = ?
                WHERE `customer_code` = ?;";
       $stmt2 = $con->prepare($stmt);
       $stmt2->execute([$fullname, $cusCode]);

    //    return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }

}

