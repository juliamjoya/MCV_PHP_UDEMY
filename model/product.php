<?php
class Product extends Connect{
    public function getProduct(){
        $connect = parent::connection();
        parent::set_name();
        $sql = "SELECT tm_product.prod_id, tm_product.cat_id, tm_product.prod_name, tm_product.prod_desc, tm_product.prod_cant, tm_category.cat_name FROM tm_product INNER JOIN tm_category ON tm_product.cat_id = tm_category.cat_id WHERE tm_product.prod_status = 1;";
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

    public function createProduct($catId, $prodName, $prodDesc, $prodCant){
        $connect = parent::connection();
        parent::set_name();
        $sql = "INSERT INTO tm_product (prod_id, cat_id, prod_name, prod_desc, prod_cant, date_create, date_upd, date_dele, prod_status) VALUES (NULL, ?, ?, ?, ?, now(), NULL, NULL, 1);";
        $sql = $connect->prepare($sql);
        $sql->bindValue(1,$catId);
        $sql->bindValue(2,$prodName);
        $sql->bindValue(3,$prodDesc);
        $sql->bindValue(4,$prodCant);
        $sql->execute();
        return $result = $sql->fetchAll();
    }

    public function updateProduct($prodID, $catId, $prodName, $prodDesc, $prodCant){
        $connect = parent::connection();
        parent::set_name();
        $sql = "UPDATE tm_product 
            SET
                cat_id = ?,
                prod_name = ?,
                prod_desc = ?,
                prod_cant = ?,
                date_upd = now()
            WHERE
                prod_id = ?";
        $sql = $connect->prepare($sql);
        $sql->bindValue(1,$catId);
        $sql->bindValue(2,$prodName);
        $sql->bindValue(3,$prodDesc);
        $sql->bindValue(4,$prodCant);
        $sql->bindValue(5,$prodID);
        $sql->execute();
        return $result = $sql->fetchAll();
    }
}
?>