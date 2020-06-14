
<!-- Hamburger Nav -->
<div class="navbar">
    <div class="button-container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div>
</div>

<!-- Nav Overlay -->
<div class="overlay" id="overlay">
    <nav class="overlay-menu">
        <div class="desk-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) );?>
        </div>

        <div class="mob-nav">
        <a href="#about">About</a>
        <a href="#assets">Assets</a>
        <a href="#fund">What we fund?</a>
        <a href="#products">Products</a>
        <a href="#tc">T&C's</a>
        <a href="#connect">Contact</a>
        </div>
    </nav>
</div>