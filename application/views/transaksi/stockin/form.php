<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"> Stock In</h3>
                    <div class="pull-right">
                    <a href="<?=site_url('stock/in')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="<?=site_url('stock/process')?>" method="post">
                                <div class="form-group">
                                    <Label>Date</Label>
                                    <input type="date" value="<?=date('Y-m-d')?>" name="date" class="form-control" required>
                                </div>
                                    <Label>Barcode</Label>
                                <div class="form-group input-group">
                                    <input type="hidden" name="item_id" id="item_id" value="">
                                    <input type="text" value="" name="barcode" id="barcode" class="form-control" required autofocus>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <Label>Item Name</Label>
                                    <input type="text" name="itemName" id="itemName" class="form-control" value="-" readonly>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label for="">Item Unit</label>
                                            <input type="text" name="unitName" id="unitName" class="form-control" value="-" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Initial Stock</label>
                                            <input type="text" name="stock" id="stock" class="form-control" value="-" readonly>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <Label>Detail</Label>
                                    <input type="text" name="detail" id="detail" class="form-control" placeholder="Tambahan" required>
                                </div>
                                <div class="form-group">
                                    <Label>Supplier</Label>
                                    <select name="supplier" id="supplier" class="form-control select2" required>
                                        <option value="">Pilih</option>
                                        <?php foreach ($pleyer as $j => $data) { ?>
                                            <option value="<?=$data->supplier_id?>"><?=$data->name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <Label>Qty</Label>
                                    <input type="number" name="qty" id="qty" class="form-control" placeholder="Tambahan" required>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success" name="inAdd" type="submit">Save</button>
                                    <button class="btn" type="Reset">Reset</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Select Product Item</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kokrakenek->result() as $i => $data) { ?>
                        
                            <tr>
                                <td><?=$data->barcode?></td>
                                <td><?=$data->name?></td>
                                <td><?=$data->unit_name?></td>
                                <td><?=indo_curr($data->price)?></td>
                                <td><?=$data->stock?></td>
                                <td>
                                    <button class="btn btn-xs btn-primary" id="select" 
                                    data-id=<?=$data->item_id?>
                                    data-barcode=<?=$data->barcode?>
                                    data-name=<?=$data->name?>
                                    data-unit=<?=$data->unit_name?>
                                    data-stock=<?=$data->stock?>
                                    >
                                        <i class="fa fa-check"> Select</i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
