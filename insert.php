<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    
    <form action="actions/store.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">City</label>
            <input type="text" name="city" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Country</label>
            <input type="text" name="country" class="form-control">
        </div>

        <button class="btn btn-primary">Add</button>
    </form>

</body>
</html>