<?php
require_once("connection.php"); // Include the file with database connection

// Connect to the database
$conn = connectDatabase();

// Fetch skills data from the database
$query = "SELECT * FROM skills";
$result = mysqli_query($conn, $query);

// Check if there are any skills available
if (mysqli_num_rows($result) > 0) {
    // Skills data found, render the HTML
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Skills</title>
        <link rel="stylesheet" type="text/css" href="css/skills.css"> <!-- Link to your offline CSS file -->
    </head>
    <body>
        <h1>Skills</h1>
        <table>
            <tr>
    
                <th>Skill Name</th>
                <th>Description</th>
            </tr>
            <?php
            // Loop through each skill and display its data
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    
                    <td><?php echo $row['skill_name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>
    <?php
} else {
    // No skills data found
    echo "No skills found.";
}

// Close the database connection
$conn->close();
?>
