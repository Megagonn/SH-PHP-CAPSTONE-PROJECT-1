<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<h1>Chess Board</h1>
    <table border="1px" class="table table-bordered mx-auto my-auto" style="width: 400px; height: 400px;">
        <?php
        $_chess_box_count = 8;
        $chess_box = '';
        $chess_row = '';
        $alt_color = true;
        for ($i = 1; $i <= $_chess_box_count; $i++) {
            $chess_box = "<td style='width: 30px; height: 30px;'></td>".$chess_box."";
            // if ($i%2 == 0) {
            // }
            // else{
            //     $chess_box = "<td style='width: 30px; height: 30px;'></td>".$chess_box."";
            // }
            for ($j = 0; $j < $i; $j++) {
            $chess_row = "<tr>" . $chess_box . "</tr>";
            }
        }
        echo $chess_row;
        // for ($i = 0; $i < $_chess_box_count; $i++) {
        //     $chess_row = "<tr>" . $chess_box . "</tr>";
        //     echo $chess_row;
        // }
        ?>
    </table>
</body>

</html>