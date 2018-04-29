<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
</head>
<body>
	
    <div class="container outer animated fadeIn test">
        <br>
        <H1 class="title">Loan Calculator</H1>
        <form action="second.php" method="post">
        <div class="form-group">
            <label for="email">Start Date:</label>
            <input  required name="date" type="date" class="form-control" id="email">
        </div>
            <div class="form-group">
            <label for="pwd">Loan Amount:</label>
            <input required name='loan' type="number" class="form-control" id="pwd">
            </div>
            <div class="form-group">
            <label for="pwd">Installment Amount:</label>
            <input required name="installment" type="number" class="form-control" id="pwd">
            </div>
            <div class="form-group">
            <label for="pwd">Interest Rate (in percentage):</label>
            <input required name="rate" type="number" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <p>Installment interval:</p>
            <select name="interval" class="form-control drop">
                <option  value="Daily">Daily</option>
                <option  value="Weekly">Weekly</option>
                <option  value="Monthly">Monthly</option>
            </select>
            </div>
            <a href='second.php'><button name='submit' type="submit" class="btn btn-default submit">Get payment plan</button></a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
