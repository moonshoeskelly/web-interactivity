<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <main class="col-md-12">
                <h2>Page not found</h2>
                <p class="footer-p">I'm sorry, this never really happens. It looks like nothing was found at this location. Would you like to go back <a href="<?php echo home_url('/');?>">home</a>?</p>
                <img src="<?php echo get_template_directory_uri() . '/images/404.gif' ?>" alt="Error message" />
            </main>
        </div>
    </div>

<?php get_footer(); ?>
