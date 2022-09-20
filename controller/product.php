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
            $subArray[] = '<button type="button" onClick="editProduct('.$row["prod_id"].');" id="'.$row["prod_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $subArray[] = '<button type="button" onClick="deleteProduct('.$row["prod_id"].');" id="'.$row["prod_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
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

    case "editSaveProduct":
        //$data = $product->getProductID($_POST["prod_id"]);
        echo "El valor de prod_nom es: ".$_POST["prod_nom"]." y el valor de prod_id es: ".$_POST["prod_id"];
        $data = $product->getProductID($_POST["prod_id"]);

        //echo "El valor ANTES del if de prod_id es: ".$_POST["prod_id"];
        if(empty($_POST["prod_id"])) {
            //echo "El valor DESPUES del if de prod_id es: ".$_POST["prod_id"];
            if(is_array($data) == true and count($data) == 0){
                $product->createProduct($_POST["prod_nom"]);
            }
        }else{
            $product->updateProduct($_POST["prod_id"], $_POST["prod_nom"]);
        }
        break;

    case "showProduct":
        $data = $product->getProductID($_POST["prod_id"]);
        if(is_array($data) == true and count($data) > 0){
            foreach ($data as $row) {
                $output["prod_id"] = $row["prod_id"];
                $output["prod_nom"] = $row["prod_nom"];
            }
        }
        break;

    case "deleteProduct":
        $product->deleteProduct($_POST["prod_id"]);
        break;
}
?>