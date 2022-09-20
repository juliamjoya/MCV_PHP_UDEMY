<?php
class Product extends Connect{
    public function getProduct(){
        $connect = parent::connection();
        parent::set_name();
        $sql = "SELECT * FROM tm_product WHERE prod_status=1";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $result = $sql->fetchAll();
    }

    public function getProductID($prodID){
        $connect = parent::connection();
        parent::set_name();
        $sql = "SELECT * FROM tm_product WHERE prod_id = ?";
        $sql = $connect->prepare($sql);
        $sql->bindValue(1,$prodID);
        $sql->execute();
        return $result = $sql->fetchAll();
    }

    public function deleteProduct($prodID){
        $connect = parent::connection();
        parent::set_name();
        $sql = "UPDATE tm_product 
            SET
                prod_status = 0,
                date_dele = now()
            WHERE
                prod_id = ?";
        $sql = $connect->prepare($sql);
        $sql->bindValue(1,$prodID);
        $sql->execute();
        return $result = $sql->fetchAll();
    }

    public function createProduct($prodName){
        $connect = parent::connection();
        parent::set_name();
        $sql = "INSERT INTO tm_product (prod_id, prod_name, date_create, date_upd, date_dele, prod_status) VALUES (NULL, ?, now(), NULL, NULL, 1);";
        $sql = $connect->prepare($sql);
        $sql->bindValue(1,$prodName);
        $sql->execute();
        return $result = $sql->fetchAll();
    }

    public function updateProduct($prodID, $prodName){
        $connect = parent::connection();
        parent::set_name();
        $sql = "UPDATE tm_product 
            SET
                prod_name = ?,
                date_upd = now()
            WHERE
                prod_id = ?";
        $sql = $connect->prepare($sql);
        $sql->bindValue(1,$prodName);
        $sql->bindValue(2,$prodID);
        $sql->execute();
        return $result = $sql->fetchAll();
    }
}
?>