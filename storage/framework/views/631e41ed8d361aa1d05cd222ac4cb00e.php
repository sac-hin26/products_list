<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous">

<title>Create Your Product</title>

<style>
    body {
        background-color: #2597d9;
        text-align:center;
        padding-top: 25px;
        padding-left: 20px;
        font-family: cursive;
        font-weight: bolder;
    }
</style>

</head>

<body>
<div class="container">
<form action="<?php echo e(route('product.store')); ?>" method="POST">

<?php echo csrf_field(); ?>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Product Name</label>
<input type="text" class="form-control" name="product_name"
id="exampleFormControlInput1" placeholder="Product Name">
</div>

<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Description</label>
<input type="text" class="form-control" name="description"
id="exampleFormControlInput1" placeholder="Enter Product Description">
</div>

<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Product Price</label>
<input type="number" class="form-control" name="product_price"
id="exampleFormControlInput1" placeholder="Enter Price Amount">
</div>

<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Amount of Quantity</label>
<input type="number" class="form-control" name="quantity"
id="exampleFormControlInput1" placeholder="No.of Quantity">
</div>
<br>
<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous">
</script>

</body>
</html><?php /**PATH C:\laragon\www\product_list\resources\views/product/create.blade.php ENDPATH**/ ?>