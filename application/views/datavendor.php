<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Vendor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">Data Vendor</li>
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
                  <th>ID Vendor</th>
                  <th>Vendor Name</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $row) { ?>
                <tr>
                  <td><?php echo $row->id_vendor;?></td>
                  <td><?php echo $row->name_vendor;?></td>
                  <td><?php echo $row->address;?></td>
                  <td><a href="<?php echo base_url('CEditvendor/edit_vendor/'.$row->id_vendor);?>"><button type="button" class="btn btn-primary btn-sm"><em class="fa fa-pencil"></em></button>
                  <a href="<?php echo base_url('CDatavendor/delete/'.$row->id_vendor);?>"><button type="button" class="btn btn-danger btn-sm"><em class="fa fa-trash"></em></button></td>
                </tr>
                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Vendor</th>
                  <th>Vendor Name</th>
                  <th>Address</th>
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