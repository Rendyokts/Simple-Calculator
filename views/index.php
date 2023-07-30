<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">
    <title>Kalkulator</title>
</head>
<body>
    <!-- Container to hold input forms -->
    <div class="container my-3">
        <div class="row justify-content-center">
            <img src="public/img/kalkulator.png" alt="" style="width:10em">
            <h1 class="text-center">Simple Calculator</h1>

            <div class="form-group">
                <form action="index.php" class="card px-4" method="post" id="formItem">

                    <!-- First number input form -->
                    <div class="form-floating shadow mt-5">
                        <input type="number" name="firstNumber" id="firstNumber" class="form-control" required placeholder="empty">
                        <label for="firstNumber" class="form-label">First Number</label>
                    </div>

                    <!-- Second number input form -->
                    <div class="form-floating shadow mt-5">
                        <input type="number" name="secondNumber" id="secondNumber" class="form-control" required placeholder="empty">
                        <label for="secondNumber" class="form-label">Second Number</label>
                    </div>

                    <button type="submit" class="btn btn-primary my-4" name="submit" value="Submit">Count</button>
                </form>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['submit'])){ //Mengambil data dengan method POST

            $firstNumber = $_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];

            function summary ($firstNumber, $secondNumber){ //Summary function
                $sum = $firstNumber + $secondNumber;
                return $sum;
            }

            function substract ($firstNumber, $secondNumber){ //Substraction function
                $subs = $firstNumber - $secondNumber;
                return $subs;
            }
            
            function division ($firstNumber, $secondNumber){ //Division function
                $div = $firstNumber / $secondNumber;
                return $div;
            }

            function multiple ($firstNumber, $secondNumber){ //Multiple function
                $multi = $firstNumber * $secondNumber;
                return $multi;
            }
            
            echo 
                //Displays the result of the input using each function
                "<div class='container my-3'>
                    <div class='row'>
                        <p>First Number: ".$firstNumber."</p>  
                        <p>Second Number: ".$secondNumber."</p>
                        <p>===============================</p>
                        <br>
                        <p>The sum result is : ".summary($firstNumber, $secondNumber)."</p>
                        <p>The result of division is : ".division($firstNumber, $secondNumber)."</p>
                        <p>The result of subtraction is : ".substract($firstNumber, $secondNumber)."</p>
                        <p>The result of multiplication is : ".multiple($firstNumber, $secondNumber)."</p>
                    </div>
                </div>";
                
            }

    ?>
    <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
            crossorigin="anonymous">
    </script>
</body>
</html>