<!DOCTYPE html>
<lang="en" data-bs-theme="dark" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titl>Web Day 13</titl>
    <link rel="stylesheet" href="bootstrap.css"/>
</head>
<body>

<div class="container">
    <div class="row">

    <div class="col-12 mt-5">
        <h1 class="text-center">Product Registration</h1>
    </div>

    <div class="col-6 offset-3">

    <form method="POST" action="register-product-process.php">

    <div class="mb-3">
        <label class="form-lable" for="">ID</label>
        <input class="form-control" type="text">
    </div>

    <div class="mb-3">
        <label class="form-label" for="">Name</label>
        <input class="form-control" type="text" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Price</label>
        <input class="form-control" type="number" name="price">
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col-6">
                    <label class="form-lable" for="">Brand</label>
                    <input class="form-control" type="text" name="brand">
                </div>
                <div class="col-6">
                    <label class="form-lable" for="">Model</label>
                    <input class="form-control" type="text" name="model">
            </div>
        </div>
        </div>
       
       <div class="mb-4">
                    <label class="form-lable" for="">Description</label>
                    <input class="form-control" rows="10" name="discription"></textare>
                </div>
                <div class="d-grid">
                    <button type="submit"class="btn btn-success">Registration</button>
                </div>
        </form>
    </div>
</div>
    
</body>
</html>