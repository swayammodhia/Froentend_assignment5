<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 1.1em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Form Submission Results</h1>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $interests = isset($_GET['interests']) ? $_GET['interests'] : [];
                $subscription = isset($_GET['subscription']) ? $_GET['subscription'] : '';
                $province = isset($_GET['province']) ? $_GET['province'] : '';
                $address1 = isset($_GET['address1']) ? $_GET['address1'] : '';
                $address2 = isset($_GET['address2']) ? $_GET['address2'] : '';
                $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
                $opinion = isset($_GET['opinion']) ? $_GET['opinion'] : '';

                echo "<p><strong>Interests:</strong> " . (is_array($interests) ? implode(", ", $interests) : $interests) . "</p>";
                echo "<p><strong>Subscription:</strong> " . htmlspecialchars($subscription) . "</p>";
                echo "<p><strong>Province:</strong> " . htmlspecialchars($province) . "</p>";
                echo "<p><strong>Address 1:</strong> " . htmlspecialchars($address1) . "</p>";
                echo "<p><strong>Address 2:</strong> " . htmlspecialchars($address2) . "</p>";
                echo "<p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>";
                echo "<p><strong>Opinion:</strong> " . nl2br(htmlspecialchars($opinion)) . "</p>";
            }
        ?>
    </div>
</body>
</html>
