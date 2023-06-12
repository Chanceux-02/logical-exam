<?php

class Problem2 extends Db{
    
    public function fetchProblem2(){
        $con = $this->connect();
        $stmt = "SELECT `problem_two_cusfile`.`city`, `problem_two_salesfile`.`customer_name`, `problem_two_salesfile`.`trn_total` 
                FROM `problem_two_salesfile` 
                JOIN `problem_two_cusfile` ON `problem_two_cusfile`.`customer_name` = `problem_two_salesfile`.`customer_name` 
                JOIN `problem_two_cityfile` ON `problem_two_cityfile`.`city` = `problem_two_cusfile`.`city` 
                ORDER BY `problem_two_salesfile`.`customer_name` ASC;";
        $stmt2 = $con->prepare($stmt);
        $stmt2->execute();

        return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }

    public function prob2SubTotal($cityName, $name){
        $con = $this->connect();
        $stmt = "SELECT SUM(`problem_two_salesfile`.`trn_total`) AS subTotal
                FROM `problem_two_salesfile` 
                JOIN `problem_two_cusfile` ON `problem_two_cusfile`.`customer_name` = `problem_two_salesfile`.`customer_name` 
                JOIN `problem_two_cityfile` ON `problem_two_cityfile`.`city` = `problem_two_cusfile`.`city`
                WHERE `problem_two_cityfile`.`city` = ? 
                AND `problem_two_salesfile`.`customer_name` = ? 
                ORDER BY `problem_two_salesfile`.`customer_name` ASC;";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute([$cityName, $name]);

        return $stmt2->fetch(PDO::FETCH_ASSOC);
    }

}

