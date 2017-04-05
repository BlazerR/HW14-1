<?php
require('../model/database.php');
require('../model/category.php');
require('../model/category_db.php');
require('../model/product.php');
require('../model/product_db.php');

// create the CategoryDB and ProductDB objects 
 $categoryDB = new CategoryDB(); 
 $productDB = new ProductDB 

if (isset($_POST['action'])) { 
     $action = $_POST['action']; 
 } else if (isset($_GET['action'])) { 
     $action = $_GET['action']; 
 } else { 
     $action = 'list_products'; 
 } 


if ($action == 'list_products') {
    $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }

    $current_category = CategoryDB::getCategory($category_id);
    $categories = CategoryDB::getCategories();
    $products = ProductDB::getProductsByCategory($category_id);

    include('product_list.php');
} else if ($action == 'view_product') {
    $categories = CategoryDB::getCategories();

    $product_id = filter_input(INPUT_GET, 'product_id', 
            FILTER_VALIDATE_INT);   
    $product = ProductDB::getProduct($product_id);

    include('product_view.php');
}
?>