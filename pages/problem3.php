<?php
include_once '../class/Db.class.php';
include_once '../class/Problem3.class.php';
include '../partials/header.php';

$db = new Db;
$db->connect();

$problem3 = new Problem3;
$fetchProblem3 = $problem3->fetchProblem3();
$joinProblem3 = $problem3->joinProblem3();

if (isset($_POST['submit'])) {
    foreach ($joinProblem3 as $data) {
        // print_r($data);
        // echo 'Insert this -' . $data['fullname']. "- to -" . $data['customer_code'] . "<br>";
        $fullname = $data['fullname'];
        $customerCode = $data['customer_code'];
        $problem3->updateProblem3($fullname, $customerCode);
    }
}

$tr = "";

    foreach ($fetchProblem3 as $data) {

        $tr .= "<tr class=''>
            <td>" .$data['recid'] . "</td>
            <td>" .$data['document_no'] . "</td>
            <td>" .$data['trn_dte'] . "</td>
            <td>" .$data['customer_code'] . "</td>
            <td>" .$data['fullname'] . "</td>
        </tr>";
    }

?>

<section>
    <div class="table-fetch">
        <h1 class="mt-5 text-center">Logican Exam</h1>
        <h4 class="mt-3">Problem 3</h4>
        <p>After you click update data please refresh the page to see the updated data from database</p>
        <a href="../index.php" class="btn btn-primary mb-2">Back</a>
        <form action="problem3.php" method="post">
            <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
        </form>
        
        <table class="table-problem-1 ms-5 mt-2 mb-5 ">
            <thead>
                <tr>
                <th scope="col" class="px-3">RECID</th>
                <th scope="col">Document Number</th>
                <th scope="col">Trn Dte</th>
                <th scope="col">Customer Code</th>
                <th scope="col">Full Name</th>
                </tr>
            </thead>
            <tbody>
                <?=$tr?>
            </tbody>
        </table>

    </div>
</section>

<?php include '../partials/footer.php'; ?>
