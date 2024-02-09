<?php
get_header();
?>





<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>




<?php get_footer(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/front-page.css">
    <title>Front Page</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.container');

            container.addEventListener('mouseover', function(e) {
                const block1 = document.querySelector('.block:nth-child(1)');
                const block2 = document.querySelector('.block:nth-child(2)');

                if (e.target === block1 || e.target.closest('.block-link') === block1.querySelector('.block-link') || e.target.closest('.block-text') === block1.querySelector('.block-text')) {
                    block1.style.transform = 'scale(1.1)';
                    block2.style.transform = 'scale(0.9)';
                } else if (e.target === block2 || e.target.closest('.block-link') === block2.querySelector('.block-link') || e.target.closest('.block-text') === block2.querySelector('.block-text')) {
                    block1.style.transform = 'scale(0.9)';
                    block2.style.transform = 'scale(1.1)';
                }
            });

            container.addEventListener('mouseout', function() {
                const blocks = document.querySelectorAll('.block');
                blocks.forEach(block => {
                    block.style.transform = 'scale(1)';
                });
            });
        });
    </script>  
</head>
<body>
    <header>
        <h1>Aerospace</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
   </header>

    <div class="container">
        <div class="block">
            <!-- Text above the link in the first block -->
            <p class="block-text">Heading for this item</p>
            <!-- Link in the first block -->
            <a href="#" class="block-link">Get Started</a>
        </div>
        <div class="block">
            <!-- Text above the link in the second block -->
            <p class="block-text">Heading for this item</p>
            <!-- Link in the second block -->
            <a href="#" class="block-link">Get Started</a>
        </div>
    </div>
</body>
</html>
