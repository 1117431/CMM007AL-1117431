<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">

    <!-- Declare all links to ccs and other external links-->
    <title>myBlog</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>

    <h1>myBlog</h1>
    <p>because the internet needs to know what I think</p>
    <!-- Declare menu links -->
    <nav>
        <ul>
            <li><a href="blog.html">All Blog Items</a></li>
            <li><a href="blog.html">Work Items</a></li>
            <li><a href="blog.html">Univeristy Items</a></li>
            <li><a href="blog.html">Family Items</a></li>
            <li><a href="add.html">Insert a Blog Item</a></li>
        </ul>
    </nav>
</header>
<!-- end of header-->
<?php
include_once("connection.php"); //Establishing connection with our database

$sql = "SELECT * FROM blogview";   //sql statement to display info as requested
$result = mysqli_query($db,$sql);

?>
<!-- start of body using unsemantic gridding to get ccs in place-->
<body>
<main>
<!-- unsure of body content so did as i was advised.-->
<h1 align="center">myBlog</h1>

<h2 align="center">Display All Blog Entries</h2>

    <div class="allblogs">
        <a href="index.html" id="allblogs">Home</a>
    </div>
    <table>
        <tr>
            <th>Blog Item ID</th>
            <th>Entry Title</th>
            <th>Entry Summary</th>
            <th>Category</th>
            <th>Submitter</th>
        </tr>
        <?php
        while ($row = $result -> fetch_array())
        {
            echo "<tr>";
            echo "<td>" . $row['blogitemID'] . "</td>";
            echo "<td>" . $row['entryTitle'] . "</td>";
            echo "<td>" . $row['entrySummary'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['submitter'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
//this is to organise the get function - not sure if it should be on the php page or the normal html page
    if($_GET[category]== 'work'){
        // this happens if the value is 'earth'
        echo "This is all for work category:";
    ?>
        <table>
        <tr>
            <th>Blog Item ID</th>
            <th>Entry Title</th>
            <th>Entry Summary</th>
            <th>Category</th>
            <th>Submitter</th>
        </tr>
        <?php
        while ($row = $result -> fetch_array())
        {
            echo "<tr>";
            echo "<td>" . $row['blogitemID'] . "</td>";
            echo "<td>" . $row['entryTitle'] . "</td>";
            echo "<td>" . $row['entrySummary'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['submitter'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    }

    elseif($_GET[category]== 'university'){
        echo "This is all for university category:$_GET[category]";
    }

    elseif($_GET[category]== 'family'){
        echo "This is all for family category: $_GET[category]";
    }

    else{
        echo "NO category";
    }
    ?>
</main>
</body>
<!-- end of body and main-->
<!-- footer design -->
<footer>
    Designed by Aaron Enaburekhan, 2016
</footer>
</html>

