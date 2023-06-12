<?php

class Problem1 extends Db{
    
    public function problem1(){
        $con = $this->connect();
        $stmt = "
            SELECT p.*
            FROM problem_one AS p
            JOIN (
                SELECT DISTINCT customer_name
                FROM problem_one
            ) AS c ON p.customer_name = c.customer_name ORDER BY customer_name;
        ;";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute();

        return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }
    public function subTotal($name){
        $con = $this->connect();
        $stmt = "SELECT SUM(trn_total) AS subtotal FROM `problem_one` WHERE customer_name = ?;";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute([$name]);

        return $stmt2->fetch(PDO::FETCH_ASSOC);
    }

}

