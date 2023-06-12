<?php
include_once 'class/Db.class.php';
include_once 'class/Problem1.class.php';
include 'partials/header.php';

$db = new Db;
$db->connect();

$problem1 = new Problem1;
$fetchProblem1 = $problem1->Problem1();

$previousName = "";
$tr = "";
// $subtotal = "";
$grandTotal = 0;
$lastData = 0;

foreach ($fetchProblem1 as $data) {
    $subtotal = $data['customer_name'];

    $initialtotal = $problem1->subTotal($subtotal);
    // print_r($initialtotal);
    $grandTotal += $data["trn_total"];

    if ($data['customer_name'] !== $previousName) { 
            $tr .= "<tr class='subtotal'>
                <td>Sub Total</td>
                <td></td>
                <td>".$initialtotal["subtotal"]."</td>
            </tr>";
        $tr .= "<tr class='space'>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>";
        $tr .= "<tr class='cus-name'>
                    <td> <h5>" .$data['customer_name'] . " </h5></td>
                    <td></td>
                    <td></td>
                </tr>";
    } 
    $tr .=  "<tr class='tr2'>
                <td>" . $data['trn_dte'] . "</td>
                <td>" . $data['doc_no'] . "</td>
                <td>" . $data['trn_total'] . "</td>
            </tr>";

    $previousName = $data['customer_name'];
} 
?>

<section class="d-flex justify-content-center mt-4">
    <a href="#" class="btn btn-primary mx-2">Problem 1</a>
    <a href="pages/problem2.php" class="btn btn-primary mx-2">Problem 2</a>
    <a href="pages/problem3.php" class="btn btn-primary mx-2">Problem 3</a>
    <a href="pages/problem4.php" class="btn btn-primary mx-2">Problem 4</a>
    <a href="pages/problem5.php" class="btn btn-primary mx-2">Problem 5</a>
</section>

<section>
    <div class="table-fetch">
        <h1 class="mt-5 text-center">Logican Exam</h1>
        <h4 class="mt-3">Problem 1</h4>
        <p>Please refresh the page after inserting a new row/s in database</p>
        <table class="table-problem-1 ms-5 mt-0 mb-5 ">
            <thead>
                <tr>
                <th scope="col">Trn_Date</th>
                <th scope="col">Document Number</th>
                <th scope="col">Ammount</th>
                </tr>
            </thead>
            <tbody>
                <?=$tr?>
                <tr class='space'>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class='space border border-dark '>
                    <td><h5>Grand Total</h5></td>
                    <td></td>
                    <td><h5><?=$grandTotal?></h5></td>
                </tr>
            </tbody>
        </table>

    </div>
</section>


<?php include 'partials/footer.php'; ?>