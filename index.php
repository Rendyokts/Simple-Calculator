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
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator</title>
</head>
<body>
    <div class="container my-3">
        <div class="row justify-content-center">
            <img src="kalkulator.png" alt="" style="width:10em">
            <h1 class="text-center">Simple Calculator</h1>

            <div class="form-group">
                <form action="proses.php" class="card px-4" method="post" id="formItem">

                    <div class="form-floating shadow mt-5">
                        <input type="number" name="firstNumber" id="firstNumber" class="form-control" required placeholder="empty">
                        <label for="firstNumber" class="form-label">First Number</label>
                    </div>

                    <div class="form-floating shadow mt-5">
                        <input type="number" name="secondNumber" id="secondNumber" class="form-control" required placeholder="empty">
                        <label for="secondNumber" class="form-label">Second Number</label>
                    </div>

                    <button type="submit" class="btn btn-primary my-4" name="submit" value="Submit">Count</button>
                </form>
            </div>
            

        </div>

    </div>
    <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
            crossorigin="anonymous">
    </script>
</body>
</html>