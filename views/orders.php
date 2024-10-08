<?php

use app\core\Application;

if (Application::isGuest()) {
    Application::$app->response->redirect('/login');
}
?>

<?php

function orderStatus($status)
{
    $statusStr = '';
    switch ($status) {
        case 'processing':
            $statusStr = 'Processing';
            break;
        case 'done':
            $statusStr = 'Done';
            break;
        case 'cancel':
            $statusStr = 'Cancelled';
            break;
        default:
            break;
    }
    return $statusStr;
}

?>

<div class="order-page">
    <div class="menu__header">
        <img class="menu-image" src="../public/images/orders.png" alt="menu-image" />
        <h3>Your Order</h3>
    </div>
    <div class="order-page__list">
        <div class="container">
            <div class="order-page__header">
                <div class="row">
                    <div class="col">
                        No.
                    </div>
                    <div class="col">
                        Order ID
                    </div>
                    <div class="col">
                        Order status
                    </div>
                    <div class="col">
                        Order date
                    </div>
                </div>
            </div>
            <?php
            $count = 0;
            foreach ($params['orders'] as $param) {
                $count += 1;
                echo '<div class="order-page__item">
                <a style="color:white" href="/order?id=' . $param->id . '">
                    <div class="row">
                        <div class="col">
                            ' . $count . '
                        </div>
                        <div class="col">
                            ' . $param->id . '
                        </div>
                        <div class="col">
                            ' . orderStatus($param->status) . '
                        </div>
                        <div class="col">
                            ' . $param->created_at . '
                        </div>
                    </div>
                </a>
            </div>';
            }
            ?>

        </div>
    </div>
</div>