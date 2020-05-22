<?php if ($this->session->has_userdata('success')) { ?>
<div class="callout callout-success alert-dismissible alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="icon fa fa-check"></i><?=$this->session->flashdata('success');?>
</div>
<?php }?>

<?php if ($this->session->has_userdata('delete')) { ?>
<div class="callout callout-danger alert-dismissible alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="icon fa fa-check"></i><?=$this->session->flashdata('delete');?>
</div>
<?php } ?>

<?php if ($this->session->has_userdata('barkot')) { ?>
<div class="callout callout-warning alert-dismissible alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="icon fa fa-ban"></i><?=$this->session->flashdata('barkot');?>
</div>
<?php } ?>

<?php if ($this->session->has_userdata('error')) { ?>
<div class="callout callout-warning alert-dismissible alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="icon fa fa-ban"></i><?=strip_tags(str_replace('</p>', '', $this->session->flashdata('error')));?>
</div>
<?php } ?>