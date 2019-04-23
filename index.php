<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="login">
    <meta name="keywords" content="login app">
    <meta name="author" content="Kenny">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <style>
        body {
            width: 90%;
            height: 800px;
            background-color: white;
            margin: 15px auto;

        }

        main {
            width: 59%;
            border-right: 2px solid #ef9c00;
            float: left;
        }

        aside {
            width: 40%;
            float: right;
        }

        #main_select {
            width: 400px;
            height: 400px;
            margin-top: 25%;
            margin-left: 5%;

        }

        input {
            margin-top: 5%;
            margin-left: 5%;

        }

        select {
            margin-left: 5.5%;
        }

        #submit_bt {
            float: right;
        }
        #reset_bt {
          float: right;
        }


    </style>

</head>
<body>
    <main>

        <div id="main_select">
        <form id="expense_form" action="insert.php" method="post">
        <label>Choose: </label>
        <select id="select_expense" name="select[]">
            <option value=""></option>
            <option value="Car Payment">Car Payment</option>
            <option value="Car Insurance">Car Insurance</option>
            <option value="Credit Card">Credit Card</option>
            <option value="Food">Food</option>
            <option value="Gas">Gas</option>
            <option value="Medical Payment">Medical Payment</option>
            <option value="Rent">Rent</option>
        </select><span>  *</span>
        <br>
        <label>Amount: </label>
        <input id="amount_input" type="text" name="amount[]">
        <span>  *</span>
        <br>
        <br>
        <input id="submit_bt" type="submit" value="Submit">
        <input id="reset_bt" type="reset" value="Reset">
        </form>
        </div>

    </main>
</body>
</html>
 <script>
    $(document).ready(function () {
       $("#submit_bt").click(function() {
        var select_one = $("#select_expense").val();
        var amount_one = $("#amount_input").val();
        var isValid = true;

        if (select_one == " ") {
            $("#select_expense").next().text("Please select an option");
            isValid = false;
        }
        else {
            $("#select_expense").next().text("");
        }

        if (amount_one <= 0) {
            $("#amount_input").next().text(" Please enter an amount");
            isValid = false;
        }
        else {
            $("#amount_input").next().text(" ");
        }

        if (isValid) {
            $("#expense_form").submit();
        }

       });
    });
</script>
