<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms-database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Count total queries
// $totalQueriesResult = $conn->query("SELECT COUNT(*) as total FROM queries");
// $totalQueries = 0;
// if ($totalQueriesResult && $totalQueriesResult->num_rows > 0) {
//     $row = $totalQueriesResult->fetch_assoc();
//     $totalQueries = $row['total'];
// }

//Retrieve queries for admin
$result = $conn->query("SELECT * FROM queries ORDER BY created_at DESC");

$conn->close();

$count_query = "SELECT COUNT(*) AS total_queries FROM queries";
$count_result = mysqli_query($db_conn, $count_query);

if ($count_result) {
    $count = mysqli_fetch_assoc($count_result)['total_queries'];
    $_SESSION['total_queries'] = $count;

    // Debugging: Print the count directly
    // echo "Total queries: " . $_SESSION['total_queries'];
} else {
    die('Database query failed: ' . mysqli_error($db_conn));
}

?>

<div class="card-body">
    <div class="table-responsive bg-white">
        <table class="table table-bordered">
            <thead>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($result) && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No queries found.</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
</div>



<?php include('footer.php') ?>