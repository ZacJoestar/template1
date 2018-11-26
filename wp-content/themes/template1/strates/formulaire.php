<?php
	$form = get_field('formulaire');
?>
<div class="container-fluid">
    <div class="row strate-formulaire">
        <div class="col-md-12 v-align-center jumbotron jumbotron-fluid full-height strate-header" style="background: url('https://images.unsplash.com/photo-1425421598808-4a22ce59cc97?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=22178d39f5b21fd60654f6ec7a4c96f2&auto=format&fit=crop&w=1950&q=80') no-repeat center center / cover;">
            <div class="header-overlay"></div>
            <div class="strate-formulaire__inner text-center">
                <img src="<?php echo get_template_directory_uri() . '/images/nature-icon-white.png'?>" alt="" class="icon nature-icon">
                <h2 class="strate-title--white">Vous êtes invités</h2>
                <p class="paragraph--fancy-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
                <div class="strate-formulaire__form-wrapper offset-md-2 col-md-8 text-center">
                    <?php echo $form ?>
                </div>
            </div>
        </div>
    </div>
</div>