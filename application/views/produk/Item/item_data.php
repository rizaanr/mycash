<section class="content-header">
      <h1>
        Items
        <small>Data Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Product</a></li>
        <li class="active">Items</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <?php $this->view('pesan');?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Items</h3>
                    <div class="pull-right">
                    <a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Add</a>
                </div>

                <div class="box-body">
                    <div class="col-md-12 table-responsive" style="margin-top: 20px;">
                        <table id="myTable" class="table table-striped table-bordered" cellspasing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="width:5%;">#</th>
                                    <th>Barcode</th>
                                    <th>Nama</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Unit</th>
                                    <th>Price</th>
                                    <th style="width:15%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($row->result() as $name => $data) {
                                ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $data->barcode;?></td>
                                <td><?= $data->name;?></td>
                                <td>
                                <?php if ($data->images != null) { ?>
                                <img src="<?= base_url('uploads/products/'.$data->images)?>" style="width:100px;"></td>
                                <?php } ?>
                                <td><?= $data->category_name;?></td>
                                <td><?= $data->unit_name;?></td>
                                <td><?= $data->price;?></td>


                                <td class="text-center" width="160px">
                                    <a href="<?=site_url('item/edit/'.$data->item_id)?>" class="btn btn-primary btn-xs" style="margin-right: 2px;">
                                    <i class="fa fa-pencil"></i> Edit 
                                    <a href="<?=site_url('item/del/'.$data->item_id)?>" onclick="return confirm('Yakin?')" class="btn btn-danger btn-xs">
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