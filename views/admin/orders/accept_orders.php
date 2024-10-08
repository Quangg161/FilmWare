<script type="text/javascript">
document.title = 'Approved Orders';
</script>
<div class="row">
    <div class="col-lg-12">
        <section class="panel" style="box-shadow: none;">
            <header class="panel-heading">
                <h1>Approved Orders</h1>
                <a href="/admin/orders" class="btn btn-success">Back</a>
            </header>
            <div class="panel-body">
                <table class="table table-striped table-hover dt-datatable">
                    <thead>
                        <tr>
                            <th>OrderID</th>
                            <th>UserID</th>
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
                            <td><?= $orderModel->getId() ?></td>
                            <td><?= $orderModel->getUserId() ?></td>
                            <td><?= $orderModel->getPaymentMethod() ?></td>
                            <td><?= $orderModel->getStatus() ?></td>
                            <td><?= $orderModel->getDateTime() ?></td>
                            <td>
                                <a class="fa fa-eye btn btn-info btn-sm"
                                    href="/admin/orders/accepted/details?id=<?= $orderModel->getId() ?>"></a>
                                <a class="fa fa-trash btn btn-danger btn-sm"
                                    href="/admin/orders/accepted/delete?id=<?= $orderModel->getId() ?>"></a>
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