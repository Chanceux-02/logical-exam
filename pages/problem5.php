<?php
include_once '../class/Db.class.php';
include_once '../class/Problem5.class.php';
include '../partials/header.php';

$db = new Db;
$db->connect();

$problem5 = new Problem5;
$fetchProblem5 = $problem5->fetchProblem5();
// $duplicateProblem5 = $problem5->problem5();

if (isset($_POST['submit'])) {

    $prevCountry = "";
    $prevName = "";
    $prevCity = "";
    foreach ($fetchProblem5 as $data) {
        $country = $data['country'];
        $fullname = $data['fullname'];
        $city = $data['city'];

        if ($country === $prevCountry && $fullname === $prevName && $prevCity === $city) {
        //    echo 'Delete this ' . $data['id'] . '<br>';
           $problem5->deleteProblem5($data['id']);
        }

        $prevCountry = $country;
        $prevName = $fullname;
        $prevCity = $city;
    }
}

    $tr = "";
    foreach ($fetchProblem5 as $data) {
        $tr .= "<tr class=''>
            <td>" .$data['country'] . "</td>
            <td>" .$data['fullname'] . "</td>
            <td>" .$data['city'] . "</td>
        </tr>";
    }
?>

<section>
    <div class="table-fetch">
        <h1 class="mt-5 text-center">Logican Exam</h1>
        <h4 class="mt-3">Problem 5</h4>
        <p>Please refresh after deleting duplicated to update data/s</p>
        <a href="../index.php" class="btn btn-primary mb-2">Back</a>
        <form action="problem5.php" method="post">
            <button type="submit" name="submit" class="btn btn-primary">Delete Duplicates</button>
        </form>
        
        <table class="table-problem-1 ms-5 mt-2 mb-5 ">
            <thead>
                <tr>
                <th scope="col">Country</th>
                <th scope="col">Full Name</th>
                <th scope="col">City</th>
                </tr>
            </thead>
            <tbody>
                <?=$tr?>
            </tbody>
        </table>

    </div>
</section>

<?php include '../partials/footer.php'; ?>
