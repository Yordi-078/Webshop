<?php

function getAllProducts() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM producten";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createP($name, $image, $description, $category, $price){
	$conn= openDatabaseConnection();
	$stmt = $conn->prepare("INSERT INTO producten (name, image, description, category, price) VALUES (:name, :image, :description, :category, :price)");
	$stmt->bindParam(":name" , $name);
	$stmt->bindParam(":image" , $image);
	$stmt->bindParam(":description" , $description);
	$stmt->bindParam(":category" , $category);
	$stmt->bindParam(":price" , $price);
	$stmt->execute();
 }

 function getProductById($id){
    $conn = openDataBaseConnection();
	$stmt = $conn->prepare("SELECT * from producten where id = :id");
	$stmt->bindParam(':id' , $id);
    $stmt->execute();
    return $stmt->fetch();

}

function deleteProduct2($id){
    $conn= openDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM producten where id = :id ");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
 }

 
 function updateProduct2($name, $image, $description, $category, $price, $id){
    $conn = openDataBaseConnection();
    $stmt = $conn->prepare("UPDATE producten SET name=:name, image=:image, description=:description, category=:category, price=:price WHERE id=:id");
    $stmt->bindParam(":name" , $name);
	$stmt->bindParam(":image" , $image);
	$stmt->bindParam(":description" ,  $description);
	$stmt->bindParam(":category" , $category);
	$stmt->bindParam(":price" , $price);
    $stmt->bindParam(":id" , $id);
    $stmt->execute();
    $conn = null;
    return $stmt; 
 }