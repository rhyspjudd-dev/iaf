
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
    <nav class="overlay-menu"><?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) );?></nav>
</div>