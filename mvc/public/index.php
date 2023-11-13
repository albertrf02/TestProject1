<?php



error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";
require "fpdf/fpdf.php";


// include "../src/config.php";

// include "../src/controllers/save.php";
// include "../src/controllers/login.php";
// include "../src/controllers/index.php";
// include "../src/controllers/error.php";
// include "../src/controllers/about.php";
// include "../src/controllers/exemple.php";
// include "../src/controllers/registre.php";
include "../src/controllers/index.php";
include "../src/controllers/registre.php";
include "../src/controllers/dades.php";
include "../src/controllers/validarDades.php";
include "../src/controllers/inscriptionCtrl.php";

include "../src/middleware/middleAdmin.php";


include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = '';
if (isset($_REQUEST["r"])) {
    $r = $_REQUEST["r"];
}


if ($r == "registre") {
    ctrlRegistre($request, $response, $container);
} elseif ($r == "dades") {
    getUserData($request, $response, $container, "ctrlDades");
} else {
    getUserData($request, $response, $container, "ctrlIndex");
}

$response->response();
