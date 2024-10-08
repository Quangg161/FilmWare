<?php

use app\core\Application;

if (Application::isGuest()) {
    Application::$app->response->redirect('/login');
}
?>

<?php



function total($params)
{
    $total = 0;
    foreach ($params as $param) {
        $total += $param->price;
    }
    return $total;
}

?>

<div class="cart-page">
    <div class="cart-page__header">
        <h3>Your film</h3>
    </div>
    <div class="cart-page__body">
        <div class="container">
            <div class="row gx-5">
                <div class="col-md-12 col-lg-8">
                    <div class="cart-page__content">
                        <div class="cart-page__content__header">
                            <div>Order: </div>
                        </div>
                        <div class="cart-page-divider"></div>

                        <div class="cart-page__content__body">
                            <?php
                            foreach ($params['items'] as $param) {
                                echo '<div class="cart-page-item">
                                    <div class="container">
                                        <div class="row gy-2">
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                                                <img class="order-page__item-image"
                                                    src="' . $param->image_url . '" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-9 col-9">
                                                <h6>' . $param->name . '</h6>
                                                <div>Price: ' . number_format($param->price, 0, ',', '.') . ' đ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                            ?>
                        </div>


                        <div class="cart-page__content__header">
                            <div>Total</div>
                        </div>
                        <div class="cart-page-divider"></div>
                        <div class="cart-page__content__total">
                            <div>Temporary</div>
                            <div><?php echo number_format(total($params['items']), 0, ',', '.') ?>đ</div>
                        </div>

                        <div class="cart-page__content__footer">
                            <div>
                                <div>Amount</div>
                                <div class="cart-page-total">
                                    <?php echo number_format(total($params['items']), 0, ',', '.') ?>đ</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="cart-page__info">
                        <div class="cart-page__content__header">
                            <div>Payment method</div>
                        </div>
                        <div class="cart-page-divider"></div>

                        <?php
                        switch ($params['order']->payment_method) {
                            // case 'cash':
                            //     echo
                            //     '<div class="order-page__content__header__checkbox">
                            //         <label class="form-check-label" for="flexRadioDefault1">
                            //             <img class="image-payment" src="/images/payment/cash.jpeg">
                            //             Thanh toán khi nhận hàng (tiền mặt)
                            //         </label>
                            //     </div>';
                            //     break;
                            case 'momo-pay':
                                echo
                                '<div class="order-page__content__header__checkbox">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <img class="image-payment" src="../public/images/payment/momo.png">
                                        Momo
                                    </label>
                                </div>';
                                break;
                            case 'zalo-pay':
                                echo '
                                <div class="order-page__content__header__checkbox">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <img class="image-payment" src="../public/images/payment/zalo.png">
                                        ZaloPay
                                    </label>
                                </div>';
                                break;
                            case 'shopee-pay':
                                echo '
                                <div class="order-page__content__header__checkbox">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <img class="image-payment" src="../public/images/payment/shopee.png">
                                        ShopeePay
                                    </label>
                                </div>';
                                break;
                            case 'credit':
                                echo '
                                <div class="order-page__content__header__checkbox">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <img class="image-payment" src="../public/images/payment/card.png">
                                        Credit card
                                    </label>
                                </div>';
                                break;
                            default:
                                break;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../public/js/product_detail.js"></script>