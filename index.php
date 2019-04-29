<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <style>
  main {
    width: 930px;
    margin: auto;
  }
  #one_fieldset {
    width: 30%;
    height: 30%;
    float: left;
    margin-top: 15%;
    margin-left:15%;
    font-family: 'Open Sans', sans-serif;
    border-radius: 7px;
  }
  fieldset:hover {
    border-color: blue;
    box-shadow: 5px 5px 5px 5px #888888
  }
  #two_fieldset {
    width: 300px;
    height: 250px;
    float: right;
    margin-top: 15%;
    margin-right:15%;
    font-family: 'Open Sans', sans-serif;
    border-radius: 7px;
  }

  select {
    margin: 10px;
  }
  input {
    margin: 10px;
  }
  #e {
    margin-top: 45px;
  }
  #d {
    margin-top: 45px;
  }
  #a {
    margin-top: 45px;
  }
  #p {
    margin-top: 45px;
  }

  </style>
</head>
<body>
  <main id="main_one">
  <fieldset id="one_fieldset">
    <label><strong>Method of Payment:</strong></label>
    <br>
    <input type="radio" id="payment_type" name="payment_type" value="Cash">Cash
    <input type="radio" id="payment_type" name="payment_type" value="Credit Card">Credit Card<br>
    <br>

    <p>Date: <input type="text" id="date"></p>

    <label><strong>Choose:</strong></label>
    <select id="one_select" name="one_select[]">
      <option value=" "></option>
      <option value="Car Payment">Car Payment</option>
      <option value="Food">Food</option>
      <option value="Rent">Rent</option>
    </select>
    <br>
    <lable><strong>Amount:</strong></label>
    <input id="one_input" name="one_input" type="number">
    <br>
    <input id="submit_bt" type="submit" value="Submit">
  </fieldset>

  <fieldset id="two_fieldset">
    <label id="p"><strong>Payment Type:</strong></label><div id="print_payment"></div>
    <label id="e"><strong>Expense:</strong></label><div id="print_one"></div>
    <br>
    <label id="d"><strong>Date:</strong></label><div id="print_date"></div>
    <br>
    <label id="a"><strong>Amount:</strong></label><div id="print_amount"></div>
    <br>
  </fieldset>
</main>
</body>
</html>
<script>
$(document).ready(function() {
  $("#submit_bt").click(function() {
    var expense = $("#one_select").val();
    var amount = $("#one_input").val();
    var payment = $("#payment_type").val();


    var d = new Date();
    document.getElementById("print_date").innerHTML = d;

      if(expense == " ") {
        $("#print_one").text(Empty);

      }
      else {
        $("#print_one").text(expense);
      }

      if (amount <= 0) {
        $("#print_amount").text("Empty");

      }
      else {
        $("#print_amount").text(amount);
      }

      if (payment == " ") {
        $("#payment_type").text("Empty");
      }
      else {
        $("#print_payment").text(payment);
      }

  });

});

$(document).ready(function(){
      $( "#date" ).datepicker();
});
</script>
