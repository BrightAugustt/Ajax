

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM VIEW</title>
</head>
<body>
    
<!-- Form -->
    <form action="../actions/post.php">
        <label for= "fname"> Enter First Name</label>
        <br>
        <br>
        <!-- ID is used for referencing activities on the frontend -->
        <input type= "text" id="fname" name="fname" required>
        <br>
        <br>
        <label for = "number">Enter Phone Number</label>
        <br>
        <br>
        <input type="tel" id="number" name="number">
        <br>
        <br>
        <button id="button" value="submit" name="submit">Submit</button>
    </form>
</body>
</html>

