<?php 
echo form_open('koordinator/update','class="form-horizontal" role="form"');
echo form_hidden('id', $this->uri->segment(3));

?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Input Types</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        <?php $this ->load ->view($formPemilihan); ?>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<?php echo form_close(); ?>