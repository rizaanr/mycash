<section class="content-header">
      <h1>
        Suppliers
        <small>*</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Suppliers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Supplier</h3>
                    <div class="pull-right">
                    <a href="<?=site_url('supplier/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Add</a>
                </div>

                <div class="box-body">
                    <div class="col-md-12 table-responsive" style="margin-top: 20px;">
                        <table id="myTable" class="table table-striped table-bordered" cellspasing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="width:5%;">#</th>
                                    <th>Nama</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>Phone</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($row->result() as $name => $data) {
                                ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $data->name;?></td>
                                <td><?= $data->address;?></td>
                                <td><?= $data->desk;?></td>
                                <td><?= $data->telp ?></td>

                                <!-- <td class="text-center" width="160px">
                                    <form action="<?=site_url('supplier/del')?>" method="post">
            
                                    <a href="<?=site_url('supplier/edit/'.$data->supplier_id)?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>

                                        <input type="hidden" name="id" value="<?=$data->supplier_id?>">
                                        <button class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td> -->

                                <td class="text-center" width="160px">
                                    <a href="<?=site_url('supplier/edit/'.$data->supplier_id)?>" class="btn btn-primary btn-xs" style="margin-right: 2px;">
                                    <i class="fa fa-pencil"></i> Edit 
                                    <a href="<?=site_url('supplier/del/'.$data->supplier_id)?>" onclick="return confirm('Yakin?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                                    
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>

    </section>