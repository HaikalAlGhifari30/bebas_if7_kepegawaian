<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg">
      <h1 class="h1 mb-4 text-gray-900"><?= $title; ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5 ml-auto mb-3">
      <form action="" method="GET">
        <div class="row">
          <div class="col-4">
            <input type="date" name="start" class="form-control">
          </div>
          <div class="col-4">
            <input type="date" name="end" class="form-control">
          </div>
          <div class="col-3">
            <button type="submit" class="btn btn-primary btn-fill btn-block">Show</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php if ($data['attendance']) : ?>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Attendance</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive table-bordered">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-info text-white">
              <tr>
                <th>#</th>
                <th>Date</th>
                <th>Shift</th>
                <th>Check In</th>
                <th>Notes</th>
                <th>Image</th>
                <th>Lack Of</th>
                <th>In Status</th>
                <th>Check Out</th>
                <th>Out Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // looping attendance list
              $i = 1;
              foreach ($data['attendance'] as $atd) :
              ?>
                <tr <?php if (date('l', $atd['date']) == 'Saturday' || date('l', $atd['date']) == 'Sunday') {
                      echo "class ='bg-secondary text-white'";
                    } ?>>

                  <!-- Column 1 -->
                  <td><?= $i++; ?></td>
                  <?php

                  // if WEEKENDS
                  if (date('l', $atd['date']) == 'Saturday' || date('l', $atd['date']) == 'Sunday') : ?>
                    <!-- Column 2 -->
                    <td colspan="6" class="text-center">OFF</td>
                  <?php

                  // if WEEKDAYS
                  else : ?>
                    <!-- Column 2 (Date) -->
                    <td><?= date('l, d F Y', $atd['date']); ?></td>

                    <!-- Column 3 (Shift) -->
                    <td><?= $atd['shift']; ?></td>

                    <!-- Column 4 (Check In) -->
                    <td><?= date('H : i : s', $atd['date']); ?></td>

                    <!-- Column 5 (Notes) -->
                    <td><?= $atd['notes']; ?></td>

                    <!-- Column 6 (Image) -->
                    <td><?php if ($atd['image']) : ?>
                        <img src="<?= base_url('images/attendance/') . $atd['image']; ?>" style="height: 70px">
                      <?php else : ?>
                        Image Not Found
                      <?php endif; ?>
                    </td>

                    <!-- Column 7 (Lack Of) -->
                    <td><?= $atd['lack_of']; ?></td>


                    <!-- Column 8 (In Status) -->
                    <td><?= $atd['in_status']; ?></td>

                    <!-- Column 9 (Check Out) -->
                    <td><?php if ($atd['out_time'] == 0) {
                          echo "Haven't Checked Out";
                        } else {
                          echo date('H : i : s', $atd['out_time']);
                        }
                        ?>
                    </td>

                    <!-- Column 10 (Out Status) -->
                    <td><?= $atd['out_status']; ?></td>

                  <?php endif; ?>
                </tr>
              <?php endforeach; ?>
              <a href="<?= base_url('print_atd/print/') . $e_id . '/' . $data['start'] . '/' . $data['end']; ?>" target="blank" class="ml-2 d-none d-sm-inline-block btn btn-sm btn-info shadow-sm float-right"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <?php else : ?>
    <h1>Please Pick Your Date</h1>
  <?php endif; ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->