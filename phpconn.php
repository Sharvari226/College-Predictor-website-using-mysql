<!-- HTML Form to Take Percentile Input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Predictor - Percentile to Rank Converter</title>
</head>
<body>
    <h2>Enter your Percentile to Predict Rank</h2>

    <form method="post" action="">
        <label for="percentile">Percentile:</label>
        <input type="number" step="0.01" id="percentile" name="percentile" required>
        <button type="submit">Convert to Rank</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the percentile from the form input
        $percentile = $_POST['percentile'];

        // Check if the percentile is valid
        if ($percentile >= 0 && $percentile <= 100) {
            // Assuming a hypothetical maximum number of candidates (for example, 100,000)
            $totalCandidates = 100000;
            
            // Calculate rank (formula: rank = (100 - percentile) * totalCandidates / 100)
            $rank = (($totalCandidates * (100 - $percentile)) / 100);

            // Round the rank to a whole number
            $rank = round($rank);

            echo "<h3>Your Predicted Rank is: " . $rank . "</h3>";
        } else {
            echo "<h3>Please enter a valid percentile between 0 and 100.</h3>";
        }
    }
    ?>
</body>
</html>

