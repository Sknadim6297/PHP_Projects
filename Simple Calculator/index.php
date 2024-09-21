<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Simple Calculator</h1>
    <div class="container d-flex justify-content-center mt-5">
        <form class="w-50" action="calculate.php" method="POST">
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Number 1</label>
                <div class="col-sm-10">
                    <input type="number" name="num1" class="form-control" placeholder="Number">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Number 2</label>
                <div class="col-sm-10">
                    <input type="number" name="num2" class="form-control" placeholder="Number">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Operations</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="add" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Add
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="subtract">
                        <label class="form-check-label" for="gridRadios2">
                            Subtract
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="multiply">
                        <label class="form-check-label" for="gridRadios2">
                            Multiply
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="divide">
                        <label class="form-check-label" for="gridRadios2">
                            Divide
                        </label>
                    </div>

                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>