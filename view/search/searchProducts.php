<?php

include "../../connect.php";


$search =  filterRequset('searchProducts');

$stmt = $con->prepare("SELECT `products`.`product` , `companies`.`company` , `products`.`image` 
FROM `products` INNER JOIN `companies` ON `products`.`company` = `companies`.`company_id`
WHERE `products`.`product` LIKE ?  ");


$stmt->execute(array("%$search%"));

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);


$count = $stmt->rowCount();

if($count > 0 ){
    echo json_encode(array("status" => "success" , "data" => $data )) ;
}else{
    echo json_encode(array("status" => "fail" )) ;
}

?>
