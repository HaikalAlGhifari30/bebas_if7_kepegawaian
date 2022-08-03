        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <a href="<?= base_url('master'); ?>" class="btn btn-secondary btn-icon-split mb-4">
            <span class="icon text-white">
              <i class="fas fa-chevron-left"></i>
            </span>
            <span class="text">Back</span>
          </a>

          <form action="" method="POST" class="col-lg-5  p-0">
            <div class="card">
              <h5 class="card-header">Department Master Data</h5>
              <div class="card-body">
                <h5 class="card-title">Add New Department</h5>
                <p class="card-text">Form to add new department to system</p>
                <form>
                  <div class="form-group">
                    <label for="d_id" class="col-form-label-lg">Department ID</label>
                    <input type="text" class="form-control form-control-lg" name="d_id" id="d_id">
                    <?= form_error('d_id', '<small class="text-danger">', '</small>') ?>
                  </div>
                  <div class="form-group">
                    <label for="d_name" class="col-form-label-lg">Department Name</label>
                    <input type="text" class="form-control form-control-lg" name="d_name" id="d_name">
                    <?= form_error('d_name', '<small class="text-danger">', '</small>') ?>
                  </div>
                  <button type="submit" class="btn btn-success btn-icon-split mt-4 float-right">
                    <span class="icon text-white">
                      <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Add to system</span>
                  </button>
                </form>
              </div>
            </div>
          </form>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->