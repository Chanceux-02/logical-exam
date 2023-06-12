<?php

class Problem5 extends Db{
    
    public function fetchProblem5(){
        $con = $this->connect();
        $stmt = "SELECT * FROM problem_five ORDER BY country, fullname, city ;";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute();

        return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteProblem5($id){
        $con = $this->connect();
        $stmt = "DELETE FROM `problem_five` WHERE id = ?;";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute([$id]);

    }

    
    //to see the total of duplicates for debugging
    public function problem5(){
        $con = $this->connect();
        $stmt = "SELECT *, COUNT(*) as duplicated
                FROM problem_five
                GROUP BY country, fullname, city
                HAVING COUNT(*) > 1
        ;";

        $stmt2 = $con->prepare($stmt);
        $stmt2->execute();

        return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }

}

