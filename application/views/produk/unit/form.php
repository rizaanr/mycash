<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?=ucfirst($page)?> Unit</h3>
                    <div class="pull-right">
                    <a href="<?=site_url('unit')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="<?=site_url('unit/process')?>" method="post">
                                <div class="form-group">
                                    <Label>Name</Label>
                                    <input type="hidden" name="id" id="" value="<?=$row->unit_id?>">
                                    <input type="text" value="<?=$row->name?>" name="name" class="form-control" required>
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