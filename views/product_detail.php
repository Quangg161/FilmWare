<?php

use app\core\Application;
use app\models\CartItem;

if (Application::isGuest()) {
    Application::$app->response->redirect('/login');
}
?>

<div class="page-container">
    <form accept-charset="utf-8" action="" method="post">
        <div class="product-detail">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-md-12 col-lg-6">
                        <div class="main-image">
                            <img src="<?php echo $params['product']->image_url ?>" alt="image-1" />
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 product-detail-right">
                        <div class="product-detail-name"><?php echo $params['product']->name ?></div>
                        <div class="product-detail-name-footer" >
                        <ul class="auto actions" > 
                            <li class="nodot"> <?php echo $params['product']->getCategory() ?> </li>
                            <li> <?php echo $params['product']->year ?> </li>
                            <li> <?php echo $params['product']->duration ?> min </li>
                            <li> <?php echo number_format($params['product']->price, 0, ',', '.') ?>đ</li>
</ul>    
                    </div>
                        <ul class="auto actions">
                            <li class="chart">
                            <div class="bar-container">
                            <div class="circular-progress" style="background: conic-gradient(#21d07a <?php echo $params['product']->rating * 3.6; ?>deg, #204529 5deg);">
                                <div class="value-container"><?php echo $params['product']->rating; ?>%</div>
                                </div>
                            </div>
                            <div class="text">User<br>Score</div>
                            </li>
                        </ul>
                        <div class="product-detail-footer">
                        <div class="product-detail-description">
                        <div class="text">Overview </div> <?php echo $params['product']->description ?>  
                        </div>
                        <ol class="people no_image">
                        
                      <?php foreach($params['product']->getDirector() as $dir){
                        echo '
                        <li class="profile">
                        <p><span>'.$dir.'</span></p>
                        <p class="character">Director</p>
                        </li>
                        ';    
                      } 
                      ?>
                    
                        </ol>
                        <ol class="people no_image">
                    
                      <?php foreach($params['product']->getStars() as $star){
                        echo '
                        <li class="profile">
                        <p><span>'.$star.'</span></p>
                        <p class="character">Actor</p>
                        </li>';    
                      } 
                      ?>
                    
                        </ol>
                        </div>
                            <?php   $a = array();
                                    if ($params['user']->getMovieIds() == NULL):
                                        $a = array('');
                                    else:
                                        $a = $params['user']->getMovieIds();
                                    endif;
                                    if (in_array($params['product']->id,$a)):      
                            ?>
                            <div class="product-detail-button">
                            <a href="<?php echo $params['product']->download_url ?>" download>
                                <img class="item-button-image"
                                                        src="../public/images/Download.svg"
                                                        alt="" />
                            </a>
                            </div>
                            <div class="product-detail-button">
                            <a href="<?php echo $params['product']->stream_url ?>" download>
                                <img class="item-button-image"
                                                        src="../public/images/images.svg"
                                                        alt="" />
                            </a>
                            </div>
                            <?php else: ?>
                                <?php $b = array();
                                    if (CartItem::getProducts($params['items']) == NULL):
                                        $b = array('');
                                    else:
                                        $b = CartItem::getProducts($params['items']);
                                    endif;
                                    if (in_array($params['product']->id,$b)):
                                ?>
                                <div class="product-detail-button2">
                                <button disabled>
                                <img 
                                                        src="../public/images/confirm.svg"
                                                        alt="" />   
                                </button>
                                </div>
                                <?php else: ?>
                                <div class="product-detail-button1">
                                <button type="submit" id="liveToastBtn">
                                <img 
                                                        src="../public/images/cart.png"
                                                        alt="" />   
                                </button>
                                </div>
                            <?php endif; ?>
                            
                            <?php endif; ?> 
                    </div>
                    <div class="col-md-12 col-lg-6">
                            
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="../public/images/logo/logo-2.png" width="30px" class="rounded me-2" alt="logo-2">
                <strong class="me-auto">Filmware
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Successfully added to Cart.
            </div>
        </div>
    </div>

</div>

<script src="../public/js/product_detail.js"></script>
<script>

<?php
    if ($params['addToCart']) {
        echo "var toastTrigger = document.getElementById('liveToastBtn')
            var toastLiveExample = document.getElementById('liveToast')
            var toast = new bootstrap.Toast(toastLiveExample)
            toast.show()";
    }
    ?>
</script>

