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
include "../src/controllers/login.php";
include "../src/controllers/registre.php";
include "../src/controllers/registreAdmin.php";
include "../src/controllers/registreGestor.php";
include "../src/controllers/Apartament.php";
include "../src/controllers/logout.php";
include "../src/controllers/userpage.php";
include "../src/controllers/adminPanelCtrl.php";
include "../src/controllers/uploadApartament.php";
include "../src/controllers/reservaCtrl.php";
include "../src/controllers/apartament_ajax.php";
include "../src/controllers/temporadaCtrl.php";
include "../src/controllers/buscarReservaCtrl.php";
include "../src/controllers/apartamentPage.php";
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


if ($r == "login") {
    ctrlLogin($request, $response, $container);

} elseif ($r == "registre") {
    ctrlRegistre($request, $response, $container);
} elseif ($r == "apartament") {
    isLogged($request, $response, $container, "ctrlApartament");
} elseif ($r == "logout") {
    ctrlLogout($request, $response, $container);
}
else {
    getUserData($request, $response, $container, "ctrlIndex");
}

$response->response();
