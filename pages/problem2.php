<?php
include_once '../class/Db.class.php';
include_once '../class/Problem2.class.php';
include '../partials/header.php';

$db = new Db;
$db->connect();

$problem2 = new Problem2;
$fetchProblem2 = $problem2->fetchProblem2();

$tr = "";
$previousName = "";
$previousCity = "";
$grandTotal = 0;

foreach ($fetchProblem2 as $data) {
    $subtotalToAdd = $data['trn_total'];
    $grandTotal += $subtotalToAdd;
    $subtotal = $problem2->prob2SubTotal($data['city'], $data['customer_name']);
   
    if ($data['customer_name'] !== $previousName && $data['city'] !== $previousCity) { 
        $tr .= "<tr class='subtotal'>
            <td>Sub Total</td>
            <td></td>
            <td>".$subtotal['subTotal']."</td>
        </tr>";
        $tr .= "<tr class='space'>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>";
        $tr .= "<tr class='cus-name'>
                    <td> <h5>" .$data['city'] . " </h5></td>
                    <td></td>
                    <td></td>
                </tr>";
    } 
    $tr .=  "<tr class='tr2'>
                <td></td>
                <td>" . $data['customer_name'] . "</td>
                <td>" . $data['trn_total'] . "</td>
            </tr>";

    $previousName = $data['customer_name'];
    $previousCity = $data['city'];
} 
?>


<section>
    <div class="table-fetch">
        <h1 class="mt-5 text-center">Logican Exam</h1>
        <h4 class="mt-3">Problem 2</h4>
        <p>Please refresh the page after inserting a new row/s in database</p>
        <a href="../index.php" class="btn btn-primary mb-2">Back</a>
        <table class="table-problem-1 ms-5 mt-0 mb-5 ">
            <thead>
                <tr>
                <th scope="col">Territory</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Total</th>
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


<?php include '../partials/footer.php'; ?>