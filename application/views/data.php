<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ready to Deploy Asset</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">Ready to Deploy</li>
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
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Tag</th>
                  <th>Asset Name</th>
                  <th>Serial Number</th>
                  <th>Merk</th>
                  <th>Model</th>
                  <th>Status</th>
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
                  <td><?php echo $row->keterangan; ?></td>
                  <td><a href="<?php echo base_url('CCheckout/checkout_asset/'.$row->id_master);?>"><button type="button" class="btn btn-success btn-sm">Checkout</button>
                  <a href="<?php echo base_url('CData/broken/'.$row->id_master);?>"><button type="button" class="btn btn-warning btn-sm"><em class="fa fa-gears" data-toggle="tooltip" data-placement="bottom" title="Broken"></em></button>
                  <a href="<?php echo base_url('CEdit/edit_asset/'.$row->id_master);?>"><button type="button" class="btn btn-primary btn-sm"><em class="fa fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Edit"></em></button>
                  <a href="<?php echo base_url('CData/delete/'.$row->id_master);?>"><button type="button" class="btn btn-danger btn-sm"><em class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Delete"></em></button></td>
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
                  <th>Status</th>
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