<?php
/**
 * Created by PhpStorm.
 * User: v-datatu
 * Date: 1/3/2018
 * Time: 9:02 AM
 */

include('connect.php');

//get variables from index.php
$pId = filter_input(INPUT_GET, 'pId');
$pName = filter_input(INPUT_GET, 'pName');
$pDesc = filter_input(INPUT_GET, 'pDesc');
$pDesc = nl2br($pDesc, false);
$dDate = filter_input(INPUT_GET, 'dDate');
$date1 = filter_input(INPUT_GET, 'date1');

echo $userid;

try {

    $result = $conn->prepare("SELECT pId FROM projecttable");
    $result->execute();
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){
        $pId = $row['pId'];
    }
    echo $userid;
    $sql2= "INSERT INTO datetable (pId, date1)
        VALUES ('$pId', '$date1') ";
    $conn->exec($sql2);
    header("Location: BEdisplay.php");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}