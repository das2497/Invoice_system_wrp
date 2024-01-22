<?php

session_start();
require '../models/connection.php';

if (empty($_POST['lg_uname'])) {
    echo "Please enter Username";
} elseif (empty($_POST['lg_pass'])) {
    echo "Please enter Password";
} else {

    $rs1 = Database::search("SELECT * FROM admin
    INNER JOIN admin_type ON admin.admin_type_admntp_id=admin_type.admntp_id
    WHERE admn_uname='" . $_POST['lg_uname'] . "' AND admn_pass='" . $_POST['lg_pass'] . "';");
    if ($rs1 != null && $rs1->num_rows > 0) {
        $d = $rs1->fetch_assoc();
        if ($d['admin_type_admntp_id'] == 1) {
            $_SESSION['SA'] = $d;
            echo "super_admin";
        } elseif ($d['admin_type_admntp_id'] == 2) {
            $_SESSION['AA'] = $d;
            echo "super_admin";
        }
    } else {
        echo "Your login details invalid";
    }
}
