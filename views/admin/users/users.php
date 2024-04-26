<?php

use app\core\Application;
use app\models\User;

$user = User::getUserInfo(Application::$app->user->id);
?>
<script type="text/javascript">
  document.title = 'User Management';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1> User Management</h1>
        <a href="/admin/users/create" class="btn btn-success">Create</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>UserID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone No.</th>
              <th>Role</th>
              <th class="no-sort">Options</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($params['users'] as $userModel) { 
            ?>
              <tr>
                <td><?=$userModel->getId()?></td>
                <td><?=$userModel->getName()?></td>
                <td><?=$userModel->getEmail()?></td>
                <td><?=$userModel->getPhoneNumer()?></td>
                <td><?=$userModel->getRole()?></td>
                <td>
                  <a class="fa fa-eye btn btn-info btn-sm" href="/admin/users/details?id=<?=$userModel->getId()?>"></a>
                  <a class="fa fa-pencil btn btn-warning btn-sm" href="/admin/users/edit?id=<?=$userModel->getId()?>"></a>
                  <a class="fa fa-trash btn btn-danger btn-sm" href="/admin/users/delete?id=<?=$userModel->getId()?>"></a>
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