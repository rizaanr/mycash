<section class="content-header">
      <h1>
        User Data
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data User</h3>
                    <div class="pull-right">
                    <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="">
                                <div class="form-group">
                                    <Label>Email</Label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <Label>Username</Label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <Label>Name</Label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <Label>Call Name</Label>
                                    <input type="text" name="cname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <Label>Address</Label>
                                    <textarea type="text" name="address" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <Label>Telphone</Label>
                                    <input type="text" name="telp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <Label>Birth</Label>
                                    <input type="date" name="birth" class="form-control">
                                </div>
                                <div class="form-group">
                                    <Label>Password</Label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <Label>Password Confirmation</Label>
                                    <input type="text" name="pascon" class="form-control">
                                </div>
                                <div class="form-group">
                                    <Label>Telphone</Label>
                                    <select class="form-control" name="lvl">
                                        <option value="">-------</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Kasir</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Save</button>
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