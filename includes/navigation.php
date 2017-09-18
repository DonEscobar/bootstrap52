<div class="container">
    <div class="row">
        <div class="col">
            <?php $page = basename($_SERVER["SCRIPT_FILENAME"]); ?>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="/">Bootstrap52</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li<?php echo ($page == 'index.php') ? ' class="active nav-item"' : ' class="nav-item"';?>>
                          <a class="nav-link" href="/">HOME</a>
                        </li>
                        <li<?php echo ($page == 'about-us.php') ? ' class="active nav-item"' : ' class="nav-item"';?>>
                          <a class="nav-link" href="/about-us.php">ABOUT US</a>
                        </li>
                        <li<?php echo ($page == 'contact.php') ? ' class="active nav-item"' : ' class="nav-item"';?>>
                          <a class="nav-link" href="/contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>