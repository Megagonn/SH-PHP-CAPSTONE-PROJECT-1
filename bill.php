

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="w-50 mx-auto my-5 p-4 rounded border border-secondary">
        <h2 class="h2">Electricity Bill Calculator</h2>
        <hr>
        <form action="bill.php" method="post">
            <div class="form-floating">
                <input type="number" class="form-control my-2"  id="units" name="units" placeholder="Enter units...">
                <label for="units">Enter units...</label>
            </div>
            <?php
                include 'bill.processor.php';
                if (isset($_SESSION['result'])) {
                    $ss = $_SESSION['result'];
                    echo "<div class='text-info text-center h4 w-100 mx-auto'>".$ss."<div/>";
                }
                // unset($_SESSION['result']);
            ?>
            <!-- <div class='text-info h3'>  <div/> -->
            <input type="submit" value="Calculate" name="bill" id="bill" class="btn btn-outline-secondary w-100">
        </form>
    </div>
</body>

</html>