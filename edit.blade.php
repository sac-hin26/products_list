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

<title>Edit Product Details</title>

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
<form action="{{ route('product.update', $product->s_no) }}" method="POST">

@csrf
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Product Name</label>
<input type="text" class="form-control" name="product_name"
id="exampleFormControlInput1" value="{{ $product->product_name }}" placeholder="Re-Enter Your Product Name">
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Product Description</label>
<input type="text" class="form-control" name="description"
id="exampleFormControlInput1" value="{{ $product->description }}" placeholder="Re-Enter Your Description">
</div>

<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Product Price</label>
<input type="number" class="form-control" name="product_price"
id="exampleFormControlInput1" value="{{ $product->product_price }}" placeholder="Re-Enter the Price">
</div>

<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Product Quantity</label>
<input type="number" class="form-control" name="quantity"
id="exampleFormControlInput1" value="{{ $product->quantity }}" placeholder="Re-Enter the Quantity">
</div>

<br><br>
<button type="submit" class="btn btn-success">Update Data</button>
</form>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous">

</script>

</body>
</html>
