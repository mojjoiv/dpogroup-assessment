9>//Create a PHP script that reads a text file, counts the number of words in the file, and displays
the result. Ensure that your code handles file open and read errors gracefully.//

Solution: It takes the autoscaling-system.txt and reads through while counting the words

<?php

// file path
$filePath = "autoscaling-system.txt";

// Try to open the file for reading
$fileHandle = fopen($filePath, "r");

// Check if file opening was successful
if ($fileHandle) {
    // Read the entire file content into a variable
    $fileContent = fread($fileHandle, filesize($filePath));

    // Check if file content is not empty
    if ($fileContent) {
        // Count the number of words in the file content
        $wordCount = str_word_count($fileContent);

        // Display the word count message
        echo "There are $wordCount words in the file '$filePath'.";
    } else {
        // Display error message for empty file content
        echo "Error: The file '$filePath' is empty.";
    }

    // Close the file handle
    fclose($fileHandle);
} else {
    // Display error message for failed file opening
    echo "Error: Unable to open file '$filePath'.";
}
?>
