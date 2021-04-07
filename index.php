<?php
if (!empty($_GET["page"])) {
    include "pages/header.php";
    $page = $_GET["page"];
} else {
    $page = "index";
}
include "pages/$page.php";
include "pages/footer.php";
