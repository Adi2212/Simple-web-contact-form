<!-- process_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <!-- Include CSS for styling (you can customize as needed) -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #ff7f7f; /* Light red for result headers */
        }

        .result-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
        }

        /* Add any additional styles as needed */
    </style>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $issue = $_POST["issue"];
        $comment = $_POST["comment"];

        // Display the submitted data
        echo "<h2>Form Submission Result</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Issue:</strong> $issue</p>";
        echo "<p><strong>Comment:</strong> $comment</p>";

        // Additional optional features can be added here based on the extra challenge requirements
    } else {
        // If the form is not submitted properly, redirect to the form page
        header("Location: index.html");
        exit();
    }
    ?>

</body>
</html>
