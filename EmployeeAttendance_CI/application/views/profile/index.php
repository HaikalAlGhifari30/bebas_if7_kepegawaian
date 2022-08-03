<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-sm-10">
      <h1 class="h1 mb-4 text-gray-900"><?= $account['name'] ?></h1>
    </div>
  </div>
  <div class="row">

    <!-- left -->
    <div class="col-sm-10 col-md-5 col-lg-4 col-xl-3 offset-sm-1 offset-md-0 offset-lg-0 offset-xl-0">
      <img src="<?= base_url('images/pp/') . $account['image']; ?>" class="rounded-circle img-thumbnail">
    </div>

    <!-- right -->
    <div class="col-sm-10 col-md-6 offset-sm-1">
      <h1 class="h3 text-white bg-info p-1 rounded mt-1 mb-5">Data</h1>
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">Employee ID</th>
            <td>: <?= $account['id']; ?></td>
          </tr>
          <tr>
            <th scope="row">Gender</th>
            <td>: <?php if ($account['gender'] == 'M') {
                    echo 'Male';
                  } else {
                    echo 'Female';
                  }; ?></td>
          </tr>
          <tr>
            <th scope="row">Department</th>
            <td>: <?= $account['department'] ?></td>
          </tr>
          <tr>
            <th scope="row">Birthday</th>
            <td>: <?= $account['birth_date']; ?></td>
          </tr>
          <tr>
            <th scope="row">Joined On</th>
            <td>: <?= $account['hire_date'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->