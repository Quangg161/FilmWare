<script type="text/javascript">
document.title = 'Order Management';
</script>
<div class="row">
    <div class="col-lg-12">
        <section class="panel" style="box-shadow: none;">
            <header class="panel-heading">
                <h1>Order Management</h1>
                <a href="/admin/orders/accepted" class="btn btn-success">Approved orders</a>
                <a href="/admin/orders/rejected" class="btn btn-success">Canceled orders</a>
            </header>
            <div class="panel-body">
                <table class="table table-striped table-hover dt-datatable">
                    <thead>
                        <tr>
                            <th>OrderID</th>
                            <th>UserId</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th class="no-sort">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            foreach ($params['orders'] as $orderModel) {
            ?>
              <tr>
                <td><?=$orderModel->getId()?></td>
                <td><?=$orderModel->getUserId()?></td>
                <td><?=$orderModel->getPaymentMethod()?></td>
                <td><?=$orderModel->getStatus()?></td>
                <td><?=$orderModel->getDateTime()?></td>    
                <td>
                  <a class="fa fa-eye btn btn-info btn-sm" href="/admin/orders/details?id=<?=$orderModel->getId()?>"></a>
                  <a class="far fa-check-circle btn btn-success btn-sm" href="/admin/orders/accept?id=<?=$orderModel->getId()?>"></a>
                  <a class="fas fa-ban btn btn-danger btn-sm" href="/admin/orders/reject?id=<?=$orderModel->getId()?>"></a>
                </td>
              </tr>
            <?php 
              }
            ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>