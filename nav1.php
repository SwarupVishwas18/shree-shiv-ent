<nav class="navbar">
            <div class="burger">
                <img src="./hamburger.png" width="30">
            </div>
            <ul id="links" class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="allProduct.php">Store</a></li>
                <li><a href="index.php#contact-1">Contact Us</a></li>
            </ul>

            <h1 class="logo">
                Shree Shiv Enterprises
            </h1>
         
            <form action="./searchResult.php" method="post" class="search-form" autocomplete="off">
                <input type="text" name="keyword" id="search" placeholder="Find Product">
                <input type="submit" value="Go" id="go" name="submit">
            </form>

            <div class="company-desc">
                Think Best Perform Best
            </div>
        </nav>

        <style>
        a{
            color: currentColor;
            text-decoration: none;
        }
        </style>