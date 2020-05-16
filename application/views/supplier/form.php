<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?=ucfirst($page)?> Supplier</h3>
                    <div class="pull-right">
                    <a href="<?=site_url('supplier')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="<?=site_url('supplier/process')?>" method="post">
                                <div class="form-group">
                                    <Label>Supplier Name</Label>
                                    <input type="hidden" name="id" id="" value="<?=$row->supplier_id?>">
                                    <input type="text" value="<?=$row->name?>" name="supp_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <Label>Phone</Label>
                                    <input type="number" value="<?=$row->telp?>" name="telp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <Label>Address</Label>
                                    <textarea type="text"  name="address" class="form-control"><?=$row->address?></textarea>
                                </div>
                                <div class="form-group">
                                    <Label>Description</Label>
                                    <textarea type="text"  name="desk" class="form-control"><?=$row->desk?></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success" name="<?=$page?>" type="submit">Save</button>
                                    <button class="btn" type="Reset">Reset</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    </>