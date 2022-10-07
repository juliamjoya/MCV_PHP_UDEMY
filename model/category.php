<?php
class Category extends Connect{

    /* TODO: Obtener todas las categorias */
    public function getCategory(){
        $connect = parent::connection();
        parent::set_name();
        $sql = "SELECT * FROM tm_category WHERE cat_status=1";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $result = $sql->fetchAll();
    }
}
?>