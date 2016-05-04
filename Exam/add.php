<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">

    <!-- Declare all links to ccs and other external links-->
    <title>Add</title>
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


<body>
<main class="grid-container">
    <!-- This script is used to validate the entry for the 3 require fields-->
    <script type="text/javascript">
        function validateForm()
        {
            var a=document.forms["Form"]["title"].value;
            var b=document.forms["Form"]["category"].value;
            var c=document.forms["Form"]["summary"].value;

            if (a==null || a=="",b==null || b=="",c==null || c=="")
            {
                alert("Please Fill All Required Field");
                return false;
            }
        }
    </script>

    <!-- This is used to get information from the user using the get function-->
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){ //Execute if requested using http get method
   ?>
    <form action="<?{$_SERVER['PHP_SELF']}?>" method="post">
        <fieldset>
            <!-- Input selection menu which is required-->
            <p><label for="title">Entry Title:</label>
                <input type="text" name="title" placeholder="Enter your Title?" required></p>
            <!-- Input selection menu which is required-->
            <p><label for="summary">Entry Summary:</label>
                    <textarea name="summary" cols="45" rows="5" required>
                    </textarea></p>
            <!-- Drop down selection option menu-->
            <label for="category">Category:</label>
            <p><select name="category" required>
                    <option value="">Select Category</option>
                    <option value="work">Work</option>
                    <option vaule="university">Univeristy</option>
                    <option vaule="family">Family</option>
                </select></p>
            <!-- Input selection menu-->
            <p><label for="submittedby">Submitted By:</label>
                <input type="submit" name="password" ></p>

            <input type="submit" value="Submit" id="button">
        </fieldset>
        <!-- using fieldset to wrap ofrm-->
    </form>

    <?php
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Execute if requested using http post method adn just displays info
        $title =$_POST["entryTitle"];
        $summary =$_POST["entrySummary"];
        $category =$_POST["category"];
        $submitter =$_POST["submitter"];
        print("<h1>You have entered</h1> {$title} {$summary} {$category} and you are {$submitter}");
    }
}   else{
        echo "Please try again";
    }

    header("location:index.php")
    ?>





</main>
</body>
<!-- end of body and main-->
<!-- footer design -->
<footer>
    Designed by Aaron Enaburekhan, 2016
</footer>
</html>

