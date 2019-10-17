
<?php include 'header.php';
include 'config.php';
?>
<h1>Index Page</h1>
<h2>CRUD</h2>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">ACTION</th>
    </tr>
    </thead>
    <tbody>

<?php

//Grab all records from the users table
$sql = "SELECT * FROM `users`";
$records = mysqli_query($conn, $sql);

//Checking data existence
if (mysqli_num_rows($records) >0){
    while ($row = mysqli_fetch_array($records)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];

        ?>
        <tr>
            <td><?php echo  $id ?></td>
            <td><?php echo  $name ?></td>
            <td><?php echo  $email ?></td>
        </tr>
        <?php

    }
    echo '</tbody>
        </table>';
}else{
    echo "<p class='text-success'>No records found</p>";
}
?>

<?php include 'footer.php';?>