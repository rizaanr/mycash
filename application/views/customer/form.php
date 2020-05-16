<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?=ucfirst($page)?> Customer</h3>
                    <div class="pull-right">
                    <a href="<?=site_url('customer')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="<?=site_url('customer/process')?>" method="post">
                                <div class="form-group">
                                    <Label>Customer Name</Label>
                                    <input type="hidden" name="id" id="" value="<?=$row->customer_id?>">
                                    <input type="text" value="<?=$row->name?>" name="cus_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <Label>Address</Label>
                                    <textarea type="text"  name="address" class="form-control"><?=$row->addr?></textarea>
                                </div>
                                <!-- <div class="form-group">
                                    <Label>Gender</Label>
                                    <input type="text" value="<?=$row->sex?>" name="gender" class="form-control" required>
                                </div> -->
                                <div class="form-group">
                                    <Label>Phone</Label>
                                    <textarea type="text"  name="telp" class="form-control"><?=$row->telp?></textarea>
                                </div>

                                <!-- Material inline 1 -->
                                    <div class="custom-control custom-radio custom-control-inline" style="margin: 10px">
                                    <input type="radio" class="custom-control-input" id="materialInline1" name="gender" value="L" <?= $row->sex == 'L' ? 'checked' : null?>>
                                    <label class="form-check-label" for="materialInline1">Laki-Laki</label>

                                    <input type="radio" class="custom-control-input" id="materialInline2" name="gender" value="P" <?= $row->sex == 'P' ? 'checked' : null?>>
                                    <label class="form-check-label" for="materialInline2">Perempuan</label>
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