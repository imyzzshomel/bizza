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
    }
    .butang{
      background-color:blue;
      color:white;
      border-radius:5px;
    }
    .button{
        text-align:center;
    }
    </style>
</head>
<body>

    <div class="h">
        <br>
        <h1>ENTER E-MAIL TO GET STARTED</h1>

<label for="textInput">Enter Email:</label>
<input type="text" id="textInput">
</div>
<script>
        // Get the input and output elements by their IDs
        var textInput = document.getElementById('textInput');
{
            // Get the current value of the input field
            var inputValue = event.target.value;

            // Update the output element with the input value
            outputElement.textContent = 'You entered: ' + inputValue;
        });
    </script>

<div class="button">
    <br>
    <br>
    <br>
    <button><a href = "email2.php">NEXT</a></button>
  </div>
</body>
</html>