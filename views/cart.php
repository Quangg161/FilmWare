<?php
if(isset($_GET['returnBool'])) {
    $returnBool = $_GET['returnBool'];
    //if success, add that item to the movie id allowed for that user
    
}


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
        <h3>Your cart</h3>
    </div>
    <div class="cart-page__body">
        <div class="container">
            <div class="row gx-5">
                <div class="col-md-12 col-lg-8">
                    <div class="cart-page__content">
                        <div class="cart-page__content__header">
                            <div>Selected product</div>
                            <a class="more-item-button" href="/menu">Add</a>
                        </div>
                        <div class="cart-page-divider"></div>

                        <div class="cart-page__content__body">
                            <?php

                            if (count($params['items']) == 0) {
                                echo
                                '<div class="cart-page-item">
                                        <div class="container">
                                            <h4>Cart is empty!</h4>
                                        </div>
                                    </div>';
                            } else {
                                foreach ($params['items'] as $param) {
                                    echo '
                                            <div class="cart-page-item">
                                                <form method="post" action="/update?order_detail_id=' . $param->order_detail_id . '">
                                                    <div class="container">
                                                        <div class="row gy-2">
                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                                                                <img class="cart-page__item-image" src="' . $param->image_url . '" />
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-8 col-8">
                                                                <h6>' . $param->name . '</h6>
                                                                <div>Price: ' . number_format($param->price, 0, ',', '.') . ' đ</div>
                                                            </div>
                                                            <div class="col-lg-1 col-md-1 col-sm-4 col-4">
                                                                <a href="/cart?action=delete&id=' . $param->order_detail_id . '">
                                                                    <img src="../public/images/delete.svg" class="cart-page__delete" />
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>';
                                }
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
                    <form accept-charset="utf-8" action="/cart" method="post" id="payment_form">
                        <input type="hidden" name="amount" value="<?php echo total($params['items'])?>">
                        <input type="hidden" name="userFullName" value = "<?php echo $params['user']->getName()?>">
                        <input type="hidden" name="userEmail" value = "<?php echo $params['user']->getEmail()?>">
                        <input type="hidden" name="userPhoneNumber" value = "<?php echo $params['user']->getPhoneNumer()?>">
                         
                        <?php /* <input type="hidden" name="productID" value = "<?php echo $params['order']->getId()?>">*/ ?>

                        <div class="cart-page__info">
                            <div class="cart-page__content__header">
                                <div>Payment method</div>
                            </div>
                            <div class="cart-page-divider"></div>

                            <!-- <div class="cart-page__content__header__checkbox">
                                <input value="cash" class="form-check-input" type="radio" name="payment_method"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <img class="image-payment" src="/images/payment/cash.jpeg">
                                    Thanh toán khi nhận hàng (tiền mặt)
                                </label>
                            </div> -->
                            <div class="cart-page__content__header__checkbox">
                                <input value="momo-pay" class="form-check-input" type="radio" name="payment_method"
                                    id="flexRadioDefault2" onclick="" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img class="image-payment" src="../public/images/payment/momo.png">
                                    Momo
                                </label>
                            </div>
                            <div class="cart-page__content__header__checkbox">
                                <input value="vn-pay" class="form-check-input" type="radio" name="payment_method"
                                    id="flexRadioDefault2" onclick="">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img class="image-payment" src="../public/images/payment/vnpay.jpg">
                                    VNPay
                                </label>
                            </div>
                            <div class="cart-page__content__header__checkbox">
                                <input value="shopee-pay" class="form-check-input" type="radio" name="payment_method"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img class="image-payment" src="../public/images/payment/cash.jpeg">
                                    Other
                                </label>
                            </div>
                            <div class="cart-page__content__header__checkbox">
                                <input value="credit" class="form-check-input" type="radio" name="payment_method"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img class="image-payment" src="../public/images/payment/card.png">
                                    Credit cart
                                </label>
                            </div>
                            <div>
                                <?php echo (count($params['items']) == 0 ? '' : '<button type="submit" class="checkout-button">Order</button>') ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="../public/images/logo/logo-2.png" width="30px" class="rounded me-2" alt="logo-2">
                <strong class="me-auto">Filmware</strong>
                <small>Bây giờ</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Product removed!
            </div>
        </div>
        <div id="placeOrderToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="../public/images/logo/logo-2.png" width="30px" class="rounded me-2" alt="logo-2">
                <strong class="me-auto">Filmware</strong>
                <small>Bây giờ</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Order complete.
            </div>
        </div>
    </div>
</div>


<script src="../public/js/product_detail.js"></script>
<script>
<?php
    if (isset($params['deletedItem'])) {
        if ($params['deletedItem']) {
            echo "var toastLiveExample = document.getElementById('liveToast')
            var toast = new bootstrap.Toast(toastLiveExample)
            toast.show()";
        }
    }
    ?>
<?php
    if (isset($params['placedOrder'])) {
        if ($params['placedOrder']) {
            echo "var toastLiveExample = document.getElementById('placeOrderToast')
            var toast = new bootstrap.Toast(toastLiveExample)
            toast.show()";
        }
    }
    ?>
<?php
    if (isset($returnBool)) {
        if ($returnBool) {
            echo "var toastLiveExample = document.getElementById('placeOrderToast')
            var toast = new bootstrap.Toast(toastLiveExample)
            toast.show()";
        }
    }
    ?>
</script>

</form>