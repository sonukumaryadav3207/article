<?php include('header.php') ?>
<div class="container" style="margin-top: 20px;">
    <h1>Admin Form</h1>

    <?php echo form_open('admin/index'); ?>

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <?php echo form_input(['class' => 'form-control', 'placeholder' => 'enter username']); ?>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <?php echo form_password(['class' => 'form-control', 'placeholder' => 'enter password']) ?>
    </div>

    <?php echo form_submit(['type'=>'submit' ,'class'=>'btn btn-primary','value'=>'Submit']) ?>

    <?php echo form_submit(['type'=>'submit' ,'class'=>'btn btn-danger','value'=>'Reset']) ?>
    </form>
</div>
<?php include('footer.php') ?>