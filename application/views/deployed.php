<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Deployed Asset</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">Deployed Asset</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Tag</th>
                  <th>Asset Name</th>
                  <th>Serial Number</th>
                  <th>Merk</th>
                  <th>Model</th>
                  <th>Station Location</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $row) { ?>
                <tr>
                  <td><?php echo $row->id_master;?></td>
                  <td><?php echo $row->name_asset;?></td>
                  <td><?php echo $row->sn;?></td>
                  <td><?php echo $row->merk;?></td>
                  <td><?php echo $row->model; ?></td>
                  <td><?php echo $row->location; ?></td>
                  <td><a href="<?php echo base_url('CDeployed/broken/'.$row->id_master);?>"><button type="button" class="btn btn-warning btn-sm"><em class="fa fa-gears" data-toggle="tooltip" data-placement="bottom" title="Broken"></em></button></td>
                </tr>
                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Tag</th>
                  <th>Nama Asset</th>
                  <th>Serial Number</th>
                  <th>Merk</th>
                  <th>Model</th>
                  <th>Station Location</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->