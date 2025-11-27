<?php include('header.php') ?>
<div class="container" style="margin-top: 20px;">
    
    <h1>Admin Form</h1>

    <?php echo form_open('admin/login'); ?>

    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <?php echo form_input([
                    'class' => 'form-control',
                    'placeholder' => 'enter username',
                    'name' => 'username',
                    'value' => set_value('username')
                ]); ?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:40px;">
            <?php echo form_error('username', "<div class='text-danger'>", "</div>"); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Password</label>
                <?php echo form_password([
                    'class' => 'form-control',
                    'placeholder' => 'enter password',
                    'name' => 'password',
                    'value' => set_value('password')
                ]); ?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:40px;">
            <?php echo form_error('password', "<div class='text-danger'>", "</div>"); ?>
        </div>
    </div>

    <?php echo form_submit([
        'class' => 'btn btn-success',
        'value' => 'Submit'
    ]); ?>

    <?php echo form_reset(['class' => 'btn btn-danger', 'value' => 'Reset']); ?>

    <a href="<?php echo base_url('admin/signup') ?>" class="btn btn-primary">Sign Up</a>

    </form>
</div>
<?php include('footer.php') ?>