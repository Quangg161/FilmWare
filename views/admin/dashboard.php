<script type="text/javascript">
  document.title = 'Bảng điều khiển';
</script> 

<div class="main_notification">
<div class="row">
  <div class="col-md-3">
    <div class="card card-stats card-warning">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="fa fa-users"></i>
            </div>
          </div>
          <div class="col-7 d-flex align-items-center">
            <a href="/admin/users">
            <div class="numbers">
              <p class="card-category">Member</p>
              <?php
                  $count = 0;
                  foreach($params['users'] as $user) {
                    if($user->getRole() === 'client') $count++;
                  }
                  echo '<h4 class="card-title"> ' . $count .' </h4>';
              ?>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-stats card-success">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
            <i class="fas fa-chart-bar"></i>
            </div>
          </div>
          <div class="col-7 d-flex align-items-center">
            <div class="numbers">
              <p class="card-category">Revenue</p>
              <?php
                  echo '<h4 class="card-title"> ' . number_format($params['list'][0]) . ' VNĐ' .' </h4>';
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-stats card-danger">
      <div class="card-body">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="far fa-newspaper"></i>
            </div>
          </div>
          <div class="col-7 d-flex align-items-center">
            <a href="/admin/products">
            <div class="numbers">
              <p class="card-category">Products</p>
                  <?php
                    $count = 0;
                    foreach($params['products'] as $product) {
                      $count ++;
                    }
                    echo '<h4 class="card-title"> ' . $count .' </h4>';
                  ?>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-stats card-primary">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="far fa-check-circle"></i>
            </div>
          </div>
          <div class="col-7 d-flex align-items-center">
            <a href="/admin/orders">
            <div class="numbers">
              <p class="card-category">Pending orders</p>
                <?php
                    echo '<h4 class="card-title"> ' . count($params['orders']) .' </h4>';
                ?>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php
  for($i=0; $i<20;$i++) {
    echo '<br>';
  }
?>

<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
      </header>
      <div class="panel-body">
      </div>
    </section>
  </div>
</div>