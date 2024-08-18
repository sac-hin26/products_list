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

<title>Product List</title>
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
<a href="<?php echo e(route('product.create')); ?>" class="btn btn-success">Create a New Data</a>
<br><br>
<table class="table">
<thead>
<tr>
<th scope="col">S.no</th>
<th scope="col">Product Name</th>
<th scope="col">Description</th>
<th scope="col">Price</th>
<th scope="col">Quantity</th>
<th scope="col">Action</th>
</tr>

</thead>
<tbody>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<th scope="row"><?php echo e($product->s_no); ?></th>
<td><?php echo e($product->product_name); ?></td>
<td><?php echo e($product->description); ?></td>
<td><?php echo e($product->product_price); ?></td>
<td><?php echo e($product->quantity); ?></td>
<td>

<a href="<?php echo e(route('product.edit', $product->s_no)); ?>" class="btn btn-warning">Edit</a>
<a href="<?php echo e(route('product.destroy', $product->s_no)); ?>" class="btn btn-danger">Delete</a>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous">
</script>

</body>
</html><?php /**PATH C:\laragon\www\demo_project\resources\views/product/list.blade.php ENDPATH**/ ?>