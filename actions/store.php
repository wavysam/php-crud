<?php
require_once "../config/dbconfig.php";

$first_name_err = $last_name_err = $city_err = $country_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST['first_name']))){
        $first_name_err = "First name is required";
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty(trim($_POST['last_name']))) {
        $last_name_err = "Last name is required";
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty(trim($_POST['city']))) {
        $city_err = "City is required";
    } else {
        $city = $_POST['city'];
    }

    if (empty(trim($_POST['country']))) {
        $last_name_err = "Country is required";
    } else {
        $country = $_POST['country'];
    }

    $sql = "INSERT INTO employees (first_name, last_name, city, country) VALUES (:first_name, :last_name, :city, :country)";
    $query = $pdo->prepare($sql);
    $query->bindParam("first_name", $first_name, PDO::PARAM_STR);
    $query->bindParam("last_name", $last_name, PDO::PARAM_STR);
    $query->bindParam("city", $city, PDO::PARAM_STR);
    $query->bindParam("country", $country, PDO::PARAM_STR);
    $query->execute();
    $count = $query->rowCount();

    if ($count > 0) {
        header("Location: ../dashboard.php");
    }
}
