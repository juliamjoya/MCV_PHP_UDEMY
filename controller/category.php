<?php
require_once("../config/connection.php");
require_once("../model/category.php");
$category = new Category();

switch ($_GET["op"]) {
    case "combo":
        $datos=$category->getCategory();
        if(is_array($datos)==true and count($datos)>0){
            $html = "<option label='Seleccione'></option>";
            foreach($datos as $row){
                $html.="<option value='".$row["cat_id"]."'>".$row["cat_name"]."</option>";
            }
            echo $html;
        }
        break;
}
?>