<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg">
      <h1 class="h1 mb-4 text-gray-900"><?= $title; ?></h1>
      <a href="<?= base_url('admin') ?>" class="btn btn-md btn-info mb-2">Back</a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-7 ml-auto mb-3 float-right">
      <form action="" method="GET">
        <div class="row">
          <div class="col-3 offset-lg-1">
            <input type="date" name="start" class="form-control">
            <?= form_error('start', '<small class="text-danger pl-3">', '</small>') ?>
          </div>
          <div class="col-3">
            <input type="date" name="end" class="form-control">
            <?= form_error('end', '<small class="text-danger pl-3">', '</small>') ?>
          </div>
          <div class="col-3">
            <select class="form-control" name="dept">
              <option disabled>Department</option>
              <?php foreach ($department as $d) : ?>
                <option value="<?= $d['id']; ?>"><?= $d['id']; ?></option>
              <?php endforeach; ?>
            </select>
            <?= form_error('dept', '<small class="text-danger pl-3">', '</small>') ?>

          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-success btn-fill btn-block">Show</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- End of row show -->
  <?php if ($attendance == false) : ?>
    <h1>No Data, Please Pick Your Date and Department</h1>
  <?php else : ?>
    <?php if ($attendance != null) : ?>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Attendance</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead class="bg-info text-white">
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Shift</th>
                  <th>Check In</th>
                  <th>Notes</th>
                  <th>Lack Of</th>
                  <th>In Status</th>
                  <th>Check Out</th>
                  <th>Out Status</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($attendance as $atd) : ?>
                  <tr>
                    <th><?= $i++ ?></th>
                    <td><?= date('Y-m-d', $atd['date']) ?></td>
                    <td><?= $atd['name'] ?></td>
                    <td><?= $atd['shift'] ?></td>
                    <td><?= date('H:i:s', $atd['date']) ?></td>
                    <td><?php if ($atd['notes'] == '') {
                          echo 'Unfilled';
                        } else {
                          echo $atd['notes'];
                        }  ?></td>
                    <td><?= $atd['lack_of']; ?></td>
                    <td><?= $atd['in_status']; ?></td>
                    <td><?= date('H:i:s', $atd['out_time']); ?></td>
                    <td><?= $atd['out_status']; ?></td>
                  </tr>
                <?php endforeach; ?>
                <a href="<?= base_url('report/print/') . $start . '/' . $end . '/' . $dept_code ?>" target="blank" class="d-none d-sm-inline-block btn btn-sm btn-danger ml-2 shadow-sm float-right"><i class="fas fa-download fa-sm text-white"></i> Generate Report</a>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->