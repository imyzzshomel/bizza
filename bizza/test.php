<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript If-Else Example</title>
</head>
<body>

    <label for="numberInput">Enter a number:</label>
    <input type="number" id="numberInput">
    <button onclick="checkNumber()">Check</button>

    <p id="output">Result will appear here.</p>

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
                    document.getElementById('output').textContent = 'The number is positive.';
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

</body>
</html>