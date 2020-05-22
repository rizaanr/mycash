<section class="content">
 <?php $this->view('pesan');?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?=ucfirst($page)?> Item</h3>
                    <div class="pull-right">
                    <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <?= form_open_multipart('item/process')?>
                                 <div class="form-group">
                                    <Label for="barcode">Barcode</Label>
                                    <input type="hidden" name="id" id="" value="<?=$row->item_id?>">
                                    <input type="text" value="<?=$row->barcode?>" id="barcode" name="barcode" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <Label>Product Name</Label>
                                    <input type="text" value="<?=$row->name?>" name="product-name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <Label>Category</Label>
                                    <select name="category" class="form-control select2" required>
                                        <option value="">Pilih</option>
                                        <?php foreach ($category as $key => $data) { ?>
                                            <option value="<?=$data->category_id?>"<?=$data->category_id == $row->category_id ? "selected" :null ?>><?=$data->name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <Label>Unit</Label>
                                    <select name="unit" id="" class="form-control select2" required>
                                        <option value="">Pilih</option>
                                        <?php foreach ($uniti as $key => $data) { ?>
                                            <option value="<?=$data->unit_id?>"<?=$data->unit_id == $row->unit_id ? "selected" : null?>><?=$data->name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <Label>Price</Label>
                                    <input type="number" value="<?=$row->price?>" name="price" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <Label>Image</Label>
                                    <?php if ($page == 'edit') {
                                        if ($row->images != null) { ?>
                                            <div style="margin-bottom:10px;">
                                                <img src="<?= base_url('uploads/products/'.$row->images)?>" style="width:300px;"></td>
                                            </div><?php
                                        }
                                    } ?> 
                                    <input type="file" value="" name="image" class="form-control">
                                    <small>Biarkan kosong bila tidak <?= $page == 'add' ? 'ada gambar' : 'diganti' ?></small>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success" name="<?=$page?>" type="submit">Save</button>
                                    <button class="btn" type="Reset">Reset</button>
                                </div>

                            <?= form_close()?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div