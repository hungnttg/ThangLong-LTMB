<?php
//them header full control
header('Access-Control-Allow-Origin: *');
//khai bao thong tin server
$ser="localhost";
$u="id10840443_user";
$p="12345678Aa@123";
$dbname="id10840443_springbootdb";
//thuc hien ket noi voi db
$conn=new mysqli($ser,$u,$p,$dbname);
//khai bao lenh thuc thi
$sql="select * from mytable";
//thuc thi ket noi
$result=$conn->query($sql);
//doc ket qua
while ($row[]=$result->fetch_assoc()) //line.Readline
{
    $json=json_encode($row);
}
echo '{"products":'.$json.'}';
$conn->close();
?>