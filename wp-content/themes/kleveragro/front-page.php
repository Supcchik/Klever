<?php  get_header()?>
		<!-- Main page content start -->
		<main>
			<?php 
					$image = get_field('main_page_img');
				 ?>
				 <?php
				  if( !empty($image) ): ?>
			<section class="main_content container" style="background-image: url('<?php echo $image['url']; ?>');">
				<nav>
				    <ul>
				        <li><a href="#market">Наши товары</a></li>
				        <li><a href="#best_offer">Лучшие предложения</a></li>
				        <li><a href="#benefits">Преимущества</a></li>
				        <li><a href="#about">О нас</a></li>
				        <li><a href="#garanties_id">Гарантии</a></li>
				        <li><a href="#partners">Наши партнеры</a></li>
				    	<li><a href="#contacts">Контакты</a></li>
				    </ul>
				</nav>	
				
				<div class="main_text">
					<h1><?php echo get_field("main_page_title"); ?></h1>
					<h2 class="h2_main_text"><?php echo get_field("main_page_description"); ?></h2>
					<button class="ghost_button">
						<a href="<?php echo get_field("main_page_link"); ?>">В магазин<span> > </span></a>
					</button>
				</div>
				
			</section>
			<?php endif; ?>
			<!-- Market content start -->
			<section id="market" class="market container">
				<h2 class="labels">Наши товары</h2>
				<div class="market_items">
					<?php
						$query = new WP_Query('cat=2&nopaging=1'); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
						if( $query->have_posts() ){
							while( $query->have_posts() ){ $query->the_post();
							?>
							<div class="market_item">
								<div class="color_market">
								<img alt="" class="market_item_icon" src="<?php the_post_thumbnail( $size, $attr ); ?>
								<h3 class="item_name"><?php the_title(); ?></h3>
								<p class="item_caption"><?php the_content(); ?></p>
								<div class="button_holder">
								<button class="ghost_button">
								<a href="<?php the_permalink(); ?>">Find out more<span> > </span></a>
								</button>
								</div>
						</div>
					</div>
							<?php
							}
							wp_reset_postdata(); // сбрасываем переменную $post
						} 
						else echo 'Записей нет.';
						?>
				<!-- 	<div class="market_item">
							<div class="color_market">
							<img src="<?php echo bloginfo('template_url'); ?>/img/98807728_w0_h0_pshenitsa.jpg" alt="" class="market_item_icon">
							<h3 class="item_name">Pshenitsa</h3>
							<p class="item_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima porro saepe alias dolor quibusdam consectetur qui, voluptas nihil ea iure!</p>
							<div class="button_holder">
							<button class="ghost_button">
							<a href="#">Find out more<span> > </span></a>
							</button>
							</div>
						</div>
					</div>
					<div class="market_item">
							<div class="color_market">
							<img src="<?php echo bloginfo('template_url'); ?>/img/98807728_w0_h0_pshenitsa.jpg" alt="" class="market_item_icon">
							<h3 class="item_name">Pshenitsa</h3>
							<p class="item_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima porro saepe alias dolor quibusdam consectetur qui, voluptas nihil ea iure!</p>
							<div class="button_holder">
							<button class="ghost_button">
							<a href="#">Find out more<span> > </span></a>
							</button>
							</div>
						</div>
					</div>
					<div class="market_item">
							<div class="color_market">
							<img src="<?php echo bloginfo('template_url'); ?>/img/98807728_w0_h0_pshenitsa.jpg" alt="" class="market_item_icon">
							<h3 class="item_name">Pshenitsa</h3>
							<p class="item_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima porro saepe alias dolor quibusdam consectetur qui, voluptas nihil ea iure!</p>
							<div class="button_holder">
							<button class="ghost_button">
							<a href="#">Find out more<span> > </span></a>
							</button>
							</div>
						</div>
					</div>
					<div class="market_item">
							<div class="color_market">
							<img src="<?php echo bloginfo('template_url'); ?>/img/98807728_w0_h0_pshenitsa.jpg" alt="" class="market_item_icon">
							<h3 class="item_name">Pshenitsa</h3>
							<p class="item_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima porro saepe alias dolor quibusdam consectetur qui, voluptas nihil ea iure!</p>
							<div class="button_holder">
							<button class="ghost_button">
							<a href="#">Find out more<span> > </span></a>
							</button>
							</div>
						</div>
					</div>
					<div class="market_item">
							<div class="color_market">
							<img src="<?php echo bloginfo('template_url'); ?>/img/98807728_w0_h0_pshenitsa.jpg" alt="" class="market_item_icon">
							<h3 class="item_name">Pshenitsa</h3>
							<p class="item_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima porro saepe alias dolor quibusdam consectetur qui, voluptas nihil ea iure!</p>
							<div class="button_holder">
							<button class="ghost_button">
							<a href="#">Find out more<span> > </span></a>
							</button>
							</div>
						</div>
					</div>
					<div class="market_item">
							<div class="color_market">
							<img src="<?php echo bloginfo('template_url'); ?>/img/98807728_w0_h0_pshenitsa.jpg" alt="" class="market_item_icon">
							<h3 class="item_name">Pshenitsa</h3>
							<p class="item_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima porro saepe alias dolor quibusdam consectetur qui, voluptas nihil ea iure!</p>
							<div class="button_holder">
							<button class="ghost_button">
							<a href="#">Find out more<span> > </span></a>
							</button>
							</div>
						</div>
					</div>
					<div class="market_item">
							<div class="color_market">
							<img src="<?php echo bloginfo('template_url'); ?>/img/98807728_w0_h0_pshenitsa.jpg" alt="" class="market_item_icon">
							<h3 class="item_name">Pshenitsa</h3>
							<p class="item_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima porro saepe alias dolor quibusdam consectetur qui, voluptas nihil ea iure!</p>
							<div class="button_holder">
							<button class="ghost_button">
							<a href="#">Find out more<span> > </span></a>
							</button>
							</div>
						</div>
					</div>
					<div class="market_item">
							<div class="color_market">
							<img src="<?php echo bloginfo('template_url'); ?>/img/98807728_w0_h0_pshenitsa.jpg" alt="" class="market_item_icon">
							<h3 class="item_name">Pshenitsa</h3>
							<p class="item_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima porro saepe alias dolor quibusdam consectetur qui, voluptas nihil ea iure!</p>
							<div class="button_holder">
							<button class="ghost_button">
							<a href="#">Find out more<span> > </span></a>
							</button>
							</div>
						</div>
					</div>
 -->				</div>
			</section>
			<!-- Market content end -->
			<!-- Best offer content start -->
			<h2 id="best_offer" class="labels container">Лучшие предложения</h2>
			<section id="best_offer_slick"  class="best_offer">
					<?php
						$query = new WP_Query('cat=4&nopaging=1'); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
						if( $query->have_posts() ){
							while( $query->have_posts() ){ $query->the_post();
							?>
							<div class="content_bo">
						<img class="bo_img" src="<?php the_post_thumbnail( $size, $attr ); ?>
						<div class="text-box">
							<h2 class="text_bo"><?php the_title(); ?></h2>
							<button class=" gb2 ghost_button "><a href="<?php the_permalink(); ?>">Find out more</a></button>
						</div>
					</div>
							<?php
							}
							wp_reset_postdata(); // сбрасываем переменную $post
						} 
						else echo 'Записей нет.';
						?>
					<!-- <div class="content_bo">
						<img class="bo_img" src="<?php echo bloginfo('template_url'); ?>/img/pole.jpg" alt="">
						<div class="text-box">
							<h2 class="text_bo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, impedit.1</h2>
							<button class=" gb2 ghost_button ">Find out more</button>
						</div>
					</div>
					<div class="content_bo">
						<img class="bo_img" src="<?php echo bloginfo('template_url'); ?>/img/pole.jpg" alt="">
						<div class="text-box">
							<h2 class="text_bo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, impedit.2</h2>
							<button class=" gb2 ghost_button ">Find out more</button>
						</div>
					</div> -->

			</section>
			<!-- Best offer contetn end -->
			<!-- Benefits start -->
			<h2 id="benefits" class="labels container">Преимущества</h2>
			<section  class="benefits container">
				
				<div class="benefits_item">
					<?php 
					$image = get_field('advantages1_img');
				 ?>
				 <?php
				  if( !empty($image) ): ?>
					<img class="benefits_ico" src="<?php echo $image['url']; ?>" alt="">
				<?php endif; ?>
					<h3 class="benefits_caption"><?php echo get_field("advantages1_title"); ?></h3>
					<h4 class="benefits_description"><?php echo get_field("advantages1_content"); ?></h4>
				</div>
				<div class="benefits_item">
				<?php 
					$image = get_field('advantages2_img');
				 ?>
				 <?php
				  if( !empty($image) ): ?>
					<img class="benefits_ico" src="<?php echo $image['url']; ?>" alt="">
					<?php endif; ?>
					<h3 class="benefits_caption"><?php echo get_field("advantages2_title"); ?></h3>
					<h4 class="benefits_description"><?php echo get_field("advantages2_content"); ?></h4>
				</div>
				<div class="benefits_item">
				<?php 
					$image = get_field('advantages3_img');
				 ?>
				 <?php
				  if( !empty($image) ): ?>
					<img class="benefits_ico" src="<?php echo $image['url']; ?>" alt="">
				<?php endif; ?>
					<h3 class="benefits_caption"><?php echo get_field("advantages3_title"); ?></h3>
					<h4 class="benefits_description"><?php echo get_field("advantages3_content"); ?></h4>
				</div>
			</section>
			<!-- Benefits end -->
			<!-- about us start -->
			<h2 id="about" class="labels container">О нас</h2>
			<section class="about">
				<div class="about_us container">
					<div class="about_content">
						<h2><?php echo get_field("about_us_title"); ?></h2>
						<h3><?php echo get_field("about_us_description"); ?></h3>
						<p><?php echo get_field("abous_us_content"); ?></p>
					</div>
					<div class="about_img">
					<?php 
					$image = get_field('about_us_img');
				 ?>
				 <?php
				  if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt=""></div>
				<?php endif; ?>
				</div>
			</section>
			<!-- about us end -->
			<!-- Guaranties start -->
			<h2 id="garanties_id" class="labels container">Гарантии</h2>
			<section class="garanties container">
				<div class="our_garanties">
					<h2><?php echo get_field("guarantees_title"); ?></h2>
					<p><?php echo get_field("guarantees_content"); ?></p>
					<button class="ghost_button gb3"><a href="<?php echo get_field("guarantees_link"); ?>">Certificates</a></button>
				</div>
				<div class="garanties_items">
					<table class="table_g">
						<tr>
							<td class="g_img">
					<?php 
					$image = get_field('garantees_quote1_img');
				 ?>
				 <?php
				  if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt=""></td>
					<?php endif; ?>
							<td class="g_capt"><p ><?php echo get_field("garantees_quote1_content"); ?></p></td>
						</tr>
						<tr>
							<td class="g_img">
								
													<?php 
					$image = get_field('garantees_quote2_img');
				 ?>
				 <?php
				  if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt=""></td>
					<?php endif; ?>

							</td>
							<td class="g_capt"><p ><?php echo get_field("garantees_quote2_content"); ?>.</p></td>
						</tr>
						<tr>
							<td class="g_img">
								
					<?php 
					$image = get_field('garantees_quote3_img');
				 ?>
				 <?php
				  if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt=""></td>
					<?php endif; ?>

							</td>
							<td class="g_capt"><p ><?php echo get_field("garantees_quote3_content"); ?></p></td>
						</tr>
					</table>
				</div>

			</section>
			<!-- Guaranties end -->
			<!-- Partners start -->
			<h2 id="partners" class="labels container">Наши партнеры</h2>
			<section id="partners_slick" class="partners_slick1">
				<?php
						$query = new WP_Query('cat=3&nopaging=1'); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
						if( $query->have_posts() ){
							while( $query->have_posts() ){ $query->the_post();
							?>
							<div class="partner_item">
					<img class="partner_logo" src="<?php the_post_thumbnail( $size, $attr ); ?>
					<h2 class="partner_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
							<?php
							}
							wp_reset_postdata(); // сбрасываем переменную $post
						} 
						else echo 'Записей нет.';
						?>
				<!-- <div class="partner_item">
					<div class="item_bg">
					<img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="" class="partner_logo">
					<h2 class="partner_name"><a href="#">Klever Agro</a></h2>
					</div>
				</div>
				<div class="partner_item">
					<img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="" class="partner_logo">
					<h2 class="partner_name"><a href="#">Klever Agro</a></h2>
				</div>
				<div class="partner_item">
					<img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="" class="partner_logo">
					<h2 class="partner_name"><a href="#">Klever Agro</a></h2>
				</div>
				<div class="partner_item">
					<img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="" class="partner_logo">
					<h2 class="partner_name"><a href="#">Klever Agro</a></h2>
				</div>
				<div class="partner_item">
					<img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="" class="partner_logo">
					<h2 class="partner_name"><a href="#">Klever Agro</a></h2>
				</div>
				<div class="partner_item">
					<img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="" class="partner_logo">
					<h2 class="partner_name"><a href="#">Klever Agro</a></h2>
				</div>
 -->			</section>

			<!-- Partners end -->
			<!-- contacts start -->
			<h2 id="contacts" class="labels container">Контакты</h2>
			<section class="contacts_sect container">
				<div class="contacts_data">
					<div class="adress">
						<h2 class="h2_cont">Адрес</h2>
						<p class="p_cont"><?php echo get_field("adress"); ?></p>
					</div>
					<div class="phone">
						<h2 class="h2_cont">Телефоны</h2>
						<p class="p_cont"><?php echo get_field("phone_number1"); ?></p>
						<p class="p_cont"><?php echo get_field("phone_number2"); ?></p>
						<p class="p_cont"><?php echo get_field("phone_number3"); ?></p>
					</div>
					<div class="email">
						<h2 class="h2_cont">E-mail</h2>
						<p class="p_cont"><a href="mailto:<?php echo get_field("email"); ?>"><?php echo get_field("email"); ?></a></p>
					</div>
					<div class="social">
						<h2 class="h2_cont">Социальные сети</h2>
						<p class="p_cont"><img class="social_ico" src="<?php echo bloginfo('template_url'); ?>/img/twitter.png" alt=""><a href="<?php echo get_field("twitter"); ?>">Twitter</a></p>
						<p class="p_cont"><img class="social_ico" src="<?php echo bloginfo('template_url'); ?>/img/facebook.png" alt=""><a href="<?php echo get_field("facebook"); ?>">Facegbook</a></p>
						<p class="p_cont"><img class="social_ico" src="<?php echo bloginfo('template_url'); ?>/img/google.png" alt=""><a href="<?php echo get_field("google"); ?>">Google+</a></p>
					</div>
				</div>
				<div class="map container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.8290728763836!2d36.235245515714965!3d49.99581397941519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0ef14640443%3A0xfc5163b798eb84b0!2z0LLRg9C70LjRhtGPINCf0YPRiNC60ZbQvdGB0YzQutCwLCAzMiwg0KXQsNGA0LrRltCyLCDQpdCw0YDQutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgNjEwMDA!5e0!3m2!1suk!2sua!4v1538904956704" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</section>
			<!-- contacts end -->
<?php  get_footer()?>