<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $fullName = isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Get the current date and time for created_at
    $createdAt = date("Y-m-d H:i:s");

    // Create the string to save to the file
    $dataToSave = "Created At: " . $createdAt . "\n" . 
                  "Full Name: " . $fullName . "\n" . 
                  "Message: " . $message . "\n" . 
                  "-------------------------------------\n";

    // Define the file path (ensure the file is writable)
    $filePath = 'form_data.txt';

    // Open the file in append mode
    $file = fopen($filePath, 'a');

    if ($file) {
        // Write the data to the file
        fwrite($file, $dataToSave);
        fclose($file);
        header("Location: /?success=true");
    } else {
        echo "Error saving data.";
    }
} else {
    echo "Invalid request.";
}
?>