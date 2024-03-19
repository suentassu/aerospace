
<?php
/**
 * 404 page file
 * 
 * Incase a page doesn't exist.
 * 
 * @package AeroSpace
 */


get_header();
?>

<div class="lost-container">
    <div class="lost-content"> 
        <h1 class="error-title">404 <br />Lost in Space</h1>
            <p class="centered">Oops! Could not find the page you were looking for.</p>
            <button class="error-button" type="button">Home</button>
    </div>
    <div class="lost-satellite">
        <img class="lost-sattelite-img" src="http://localhost/aerospace/wp-content/themes/aerospace/img/satellite.png" alt="astornaut">
    </div>

</div>


<?php get_footer(); ?>
