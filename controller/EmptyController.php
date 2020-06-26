<?php
require(ROOT . "model/EmptyModel.php");



function index()
{
	$products= getAllProducts();
    render('empty/index', ['webshop' => $products]);

  
}



function createProduct(){
   render("empty/createProduct");

}

function storeProduct(){
    $name = $_POST["name"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $category = $_POST["category"];
	$price = $_POST['price'];

	 createP($name, $image, $description, $category, $price);

	 
	 header("Location:" . URL . "empty/index");

}

function oneProduct($id){
    $products = getProductById($id);
    render('empty/oneProduct', ['products' => $products]);
 
 }

 function deleteProduct($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
      $id = getProductById($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('empty/deleteProduct', ['id' => $id]);
}

function destroyProduct($id){
    //1. Delete een medewerker uit de database
    deleteProduct2($id);
	//2. Bouw een url en redirect hierheen
   header("Location:" . URL . "empty/index");
}

function editProduct($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $id = getProductById($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('empty/updateProduct', ['id' => $id]);
}

function updateProduct(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $name =$_POST['name'];
    $image =$_POST['image'];
    $description =$_POST['description'];
    $category =$_POST['category'];
	$price = $_POST['price'];
	$id = $_POST['id'];

	updateProduct2($name, $image, $description, $category, $price, $id);
    //2. Bouw een url en redirect hierheen
    header("Location:" . URL . "empty/index");

}