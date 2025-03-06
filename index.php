<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        include 'config.php';
        $sql = "SELECT * FROM students
                JOIN studentclass ON student.sclass = studentclass.cid";  // Corrected join condition
        $result = mysqli_query($conn, $sql) or die("query failed");
    if(mysqli_num_rows($result) > 0){           
    ?>
    <table cellpadding="7px">   
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['sid']?></td>
                <td><?php echo $row['sname']?></td>
                <td><?php echo $row['saddress']?></td>
                <td><?php echo $row['cname']?></td>  <!-- Display class name -->
                <td><?php echo $row['sphone']?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid']?>'>Delete</a>  <!-- Added ID to delete link -->
                </td>
            </tr> 
            <?php } ?>
        </tbody>
    </table>
    <?php
    } else {
        echo "<p>No records found.</p>";
    }

    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
