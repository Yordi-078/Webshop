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