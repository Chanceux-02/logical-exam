<?php
include_once '../class/Db.class.php';
include_once '../class/Problem4.class.php';
include '../partials/header.php';

$db = new Db;
$db->connect();

$problem4 = new Problem4;
$fetchProblem4 = $problem4->Problem4();

$tr = "";

// if (isset($_POST['submit'])) {
    $year = 2020;
    $month = 7;
    $tr = "";
    // $fetchProblem4 = $problem4->fetchProblem4();
    foreach ($fetchProblem4 as $data) {

        $month = $data['cre_month'];
        $year = $data['cre_year'];

        $firstDateType = 'F';
        $first_day = date('Y-m-', strtotime("$year-$month-01")) . '01';
        $last_day = date('Y-m-', strtotime("$year-$month-01")) . date('t', strtotime("$year-$month-01"));

        if ($data['date_type'] === $firstDateType) {
            // echo $first_day . "<br>";
            $problem4->updateProblem4($first_day, $data['id']);
        } else {
            // echo $last_day . "<br>";
            $problem4->updateProblem4($last_day, $data['id']);
        }

        $tr .= "<tr class=''>
            <td>" .$data['trn_date'] . "</td>
            <td>" .$data['cre_month'] . "</td>
            <td>" .$data['cre_year'] . "</td>
            <td>" .$data['date_type'] . "</td>
        </tr>";
    }

// }
?>

<section>
    <div class="table-fetch">
        <h1 class="mt-5 text-center">Logican Exam</h1>
        <h4 class="mt-3">Problem 4</h4>
        <a href="../index.php" class="btn btn-primary mb-2">Back</a>
        <p>Please refresh the page and show/update the data after inserting a new row/s in database</p>
        <form action="problem4.php" method="post">
            <button type="submit" name="submit" class="btn btn-primary">Update/Show Data</button>
        </form>
        
        <table class="table-problem-1 ms-5 mt-2 mb-5 ">
            <thead>
                <tr>
                <th scope="col">Trn_Date</th>
                <th scope="col">Cre Month Number</th>
                <th scope="col">Cre Year</th>
                <th scope="col">Date Type</th>
                </tr>
            </thead>
            <tbody>
                <?=$tr?>
            </tbody>
        </table>

    </div>
</section>

<?php include '../partials/footer.php'; ?>
