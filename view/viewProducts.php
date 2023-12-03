<?php

include "../connect.php";



$stmt = $con->prepare("SELECT `products`.`product` , `companies`.`company` , `products`.`image`
FROM `products`
INNER JOIN `companies` ON `products`.`company` = `companies`.`company_id` 
ORDER BY RAND();
");


$stmt->execute(array());

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);


$count = $stmt->rowCount();

if($count > 0 ){
    echo json_encode(array("status" => "success" , "data" => $data )) ;
}else{
    echo json_encode(array("status" => "fail" )) ;
}

?>
