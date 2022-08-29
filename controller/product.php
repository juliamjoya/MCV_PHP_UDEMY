<?php
require_once("../config/connection.php");
require_once("../model/product.php");
$product = new Product();

switch ($_GET["op"]) {
    case "list":
        $dates = $product->getProduct();
        $data = Array();
        foreach ($dates as $row) {
            $subArray = array();
            $subArray[] = $row["prod_name"];
            $subArray[] = '<button type="button" onClick="editar('.$row["prod_id"].');" id="'.$row["prod_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $subArray[] = '<button type="button" onClick="eliminar('.$row["prod_id"].');" id="'.$row["prod_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
            $data[] = $subArray;
        }

        $results = array(
            "sEcho"                => 1,
            "iTotalRecords"        => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData"               => $data
        );
        echo json_encode($results);
        break;
    
    default:
        # code...
        break;
}
?>