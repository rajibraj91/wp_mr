<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap 101 Template</title>
    
    <?php wp_head(); ?>
</head>

<body data-spy="scroll" <?php body_class(); ?> >
	<!-- ==========================  Header Section Start ================== -->
	<header>
		<div class="header header-wrapper">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="row">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            
							<?php the_custom_logo(); ?>	
						</div>

                        
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php 
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary_menu',
                                        'menu_class'	 => 'nav navbar-nav',
                                    )
                                );
                            ?>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- ==========================  Header Section End ================== -->
