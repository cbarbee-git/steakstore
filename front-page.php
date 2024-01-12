<?php get_header(); ?>
<section id="hero">
    <div id="hero-content">
        <h1>Local Meat, Seafood, Wild Game, & more...</h1>
        <div class="ribbon">
            <h2><i class="fas fa-square fa-rotate-45 fa-center diamond"></i>Always Fresh<i class="fas fa-square fa-rotate-45 fa-center diamond"></i></h2>
        </div>
    </div>
</section>

<section class="tan-bg bg-wallpaper animation-wrapper">
    <div class="container flex-direction">
        <div class="col-2 center"> 
            <img width="596" height="681" class="slide-right-fadein animation" id="content-intro-img" fetchpriority="high" decoding="async" width="596" height="681" src="<?php echo(THEME_ASSETS_URI); ?>/img/content-intro-img.webp" class="attachment-large size-large" alt="Photo of Steak"  />
        </div>
        <div class="col-2 left">
            <div class="">
                <h3 class="heading-title"><i class="fas fa-square-full fa-rotate-45 fa-center diamond"></i>Premium Meats<i class="fas fa-square-full fa-rotate-45 fa-center diamond"></i></h3>
                <h4 class="heading-subtitle">Quality, Consistency, and Customer Service.</h4>
                <p> There is always an experienced butcher behind the counter to help you select the perfect cut of meat, game, poultry or seafood as well as provide you information on our farms and cooking tips on how to best prepare your purchases in your own kitchen.</p>
                <p>If you're looking for the best in meat, seafood, poultry and other grocery items, we invite you to stop by our store to experience our unparalleled selection. Our knowledgeable team is here to assist with product selection, preparation techniques and offer helpful advice on options best suited to your needs. Stop in today to browse the comprehensive selection of products on-hand or get creative ideas for your next meal!</p>
                <div class="center cta">
                    <a class="btn" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>  
</section>

<section class="tan-bg border-top border-bottom categories">
    <div class="container flex-direction">
        <div class="col-4 center item">
            <a href="<?php echo get_permalink( get_page_by_path( 'meats/beef' ) ); ?>">
                <img width="161" height="164" alt="Beef Icon" title="Beef" src="<?php echo(THEME_ASSETS_URI); ?>/img/beef-icon.webp" />
                <h6 class="category-healine">Beef</h6>
            </a>
        </div> 
        <div class="col-4 center item">
            <a href="<?php echo get_permalink( get_page_by_path( 'meats/pork' ) ); ?>">
                <img width="160" height="168" alt="Pork Icon" title="Pork" src="<?php echo(THEME_ASSETS_URI); ?>/img/pork-icon.webp" />
                <h6 class="category-healine">Pork</h6>
            </a>
        </div> 
        <div class="col-4 center item">
            <a href="<?php echo get_permalink( get_page_by_path( 'meats/lamb' ) ); ?>">
                <img width="161" height="164" alt="Lamb Icon" title="Lamb" src="<?php echo(THEME_ASSETS_URI); ?>/img/lamb-icon.webp" />
                <h6 class="category-healine">Lamb</h6>
            </a>
        </div> 
        <div class="col-4 center item">
            <a href="<?php echo get_permalink( get_page_by_path( 'meats/chicken' ) ); ?>">
                <img width="161" height="164" alt="Chicken Icon" title="Chicken" src="<?php echo(THEME_ASSETS_URI); ?>/img/chicken-icon.webp" />
                <h6 class="category-healine">Chicken</h6>
            </a>
        </div> 
    </div>   
</section>


<section id="contact-hrs" class="tan-bg">
    <div class="container flex-direction">
        <div class="col-2" id="contact">
            <h5>Full-Service, Traditional Butcher Shop</h5>
            <p>Our amazing staff of butchers will work with you to choose the finest cut no matter what type of meal you're looking to prepare.</p>
            <p>We provide special orders & custom meat cuts.</p>
            <p>Can't find what you're looking for?</p>
            <div id="contact-info">
                <div class="left bold">Contact us:</div>
                <div class="center"><a class="phone phone-cursor" href="tel:<?php echo (str_replace('.','-',get_field('phone_number', 'option'))); ?>"><?php echo (get_field('phone_number', 'option')); ?></a></div>
                <div class="right"><a class="email-cursor" href="mailto:<?php echo (get_field('email_address', 'option')); ?>"><?php echo (get_field('email_address', 'option')); ?></a></div>
            </div>
        </div>
        <div class="col-2 border-full" id="hrs">
            <div>
                <p class="heading">Monday - Friday</p>
                <p>10am - 6pm</p>
                <p class="heading">Saturday &amp; Sunday</p>
                <p>9am - 2pm</p>
            </div>
        </div>
    </div>
</section>

<?php the_content(); ?>
<?php get_footer(); ?>