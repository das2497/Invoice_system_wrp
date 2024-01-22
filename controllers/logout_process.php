<?php

session_start();
if (isset($_SESSION['SA'])) {
    $_SESSION['SA'] = null;
    session_destroy();
} elseif (isset($_SESSION['AA'])) {
    $_SESSION['AA'] = null;
    session_destroy();
}

header("Location: ../html/index.php");
