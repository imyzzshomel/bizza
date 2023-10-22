<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    .h{
        text-align:center;
    }
    .text{
        text-align:center;
    }
    .but{
        text-align:center;
      color:white;
      border-radius:5px;
    }
    button.hover{
        color:red;
    }
    </style>
</head>
<body>
    <div class="h">
        <br>
        <h1>INSERT PIN FOR VERIFICATION FROM E-MAIL</h1>

        <label for="numberInput">Enter a number:</label>
    <input type="number" id="numberInput">
    <button onclick="checkNumber()">Check</button>

    <p id="output"></p>
</div>
<script>
        function checkNumber() {
            // Get the input element by its ID
            var numberInput = document.getElementById('numberInput');
            
            // Get the value entered by the user
            var inputValue = numberInput.value;

            // Convert the input value to a number
            var number = parseFloat(inputValue);

            // Check if the input is a number
            if (!isNaN(number)) {
                // Check if the number is greater than 0
                if (number > 0) {
                    document.getElementById('output').textContent = 'Verifikasi Sah !';
                } else if (number < 0) {
                    document.getElementById('output').textContent = 'The number is negative.';
                } else {
                    document.getElementById('output').textContent = 'The number is zero.';
                }
            } else {
                document.getElementById('output').textContent = 'Please enter a valid number.';
            }
        }
    </script>
    
<div class="but">
    <br>
    <br>
    <br>
   <button> <a href = "men.php">START SHOPPING</a></button>
  </div>
<center>
<h3>can't get the verification code?</h3>
</center>
<div class="but">
    <button><a href = "email.php">BACK </a></button>
  </div>
</body>
</html>