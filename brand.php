<?php

session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['user_role']!= 1) )
   {
      header('Location:../view/home.php');
   };


?>

<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Brand Page</title>
    <meta charset="UTF-8" />
  </head>

  <body>
    <div class="container">
      <div class="header">
        <h2>Add Brand</h2>
      </div>
      <form class="form" id="form">
        <div class="form__control">
          <label>Add Product Brand</label>
          <input
            type="text"
            placeholder="Add product brand"
            id="addbrand"
            name="addbrand"
            required
          />
          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form__control">
          <label>Add Product Category</label>
          <input 
            type="text"
            placeholder="Add Product Category" 
            id="addcategory" 
            name="addcategory"
            required
            />
          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form__control">
          <label>Add Product</label>
          <input type="text"
            placeholder="Add new product"
            id="addproduct"
            name="addproduct"
            required
            />
          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <button id="brandadd" value="login" name="brandadd">Add Brand</button>
      </form>
    </div>

    <script src="brand.js"></script>
  </body>
</html>
