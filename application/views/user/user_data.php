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
                    <?php if ($this->session->userdata('lvl') == 1 ){ ?>
                    <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i> Create</a>
                    <?php } ?>
                </div>

                <div class="box-body">
                    <div class="col-md-12 table-responsive" style="margin-top: 20px;">
                        <table id="myTable" class="table table-striped table-bordered" cellspasing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="width:5%;">#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Telp</th>
                                    <th>Gender</th>
                                    <?php if ($this->session->userdata('lvl') == 1 ){ ?>
                                    <th>Opsi</th>
                                    <?php } ?>
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
                                <td><?= $data->email;?></td>
                                <td><?= $data->address;?></td>
                                <td><?= $data->telp ?></td>
                                <td><?= $data->sex ?></td>

                                <?php if ($this->session->userdata('lvl') == 1 ){ ?>
                                <td class="text-center" width="160px">
                                    <form action="<?=site_url('user/del')?>" method="post">
            
                                    <a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>

                                        <input type="hidden" name="id" value="<?=$data->user_id?>">
                                        <button class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                                <?php } ?>
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