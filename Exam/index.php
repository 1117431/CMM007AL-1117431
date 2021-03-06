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
            <li><a href="blog.php">All Blog Items</a></li>
            <li><a href="blog.php?category=work">Work Items</a></li>
            <li><a href="blog.php?category=university">Univeristy Items</a></li>
            <li><a href="blog.php?category=family">Family Items</a></li>
            <li><a href="add.php">Insert a Blog Item</a></li>
        </ul>
    </nav>
</header>
<!-- end of header-->

<!-- start of body using unsemantic gridding to get ccs in place-->
<body>
<main class="grid-container">

    <section class="grid-60 tablet-grid-50 mobile-grid-100" id="cont1">

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum</p>
    </section>
    <!-- 2nd part of body to the right of screen-->
    <section class="grid-40 tablet-grid-50 mobile-grid-100" id="cont2">
        <div id="latest">
            <img src="assets/images/blog.png" alt="blog" id="blogpic">
        </div>
    </section>

</main>
</body>
<!-- end of body and main-->
<!-- footer design -->
<footer>
    Designed by Aaron Enaburekhan, 2016
</footer>
</html>

