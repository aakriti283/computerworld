
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = htmlspecialchars($_POST['comment']); // Sanitize user input

    // Save the comment to a file or database
    // Example: saving to a file
    $file = fopen("comments.txt", "a");
    if ($file) {
        fwrite($file, $comment . "\n");
        fclose($file);
        echo "Comment submitted successfully!";
    } else {
        echo "Error opening file!";
    }
}
?>



    


    