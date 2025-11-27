<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mb-3" style="margin-top:50px;">
        <h1>Sign Up</h1>
        <?php echo form_open('admin/register'); ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <?php echo form_input([
                        'class' => 'form-control',
                        'placeholder' => 'Enter your Name',
                        'name' => 'firstname',
                        'value' => set_value('firstname')
                    ]); ?>
                </div>
            </div>
            <div class="col-lg-6" style="margin-top:40px;">
                <?php echo form_error('firstname', "<div class='text-danger'>", "</div>"); ?>
            </div>

            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <?php echo form_input([
                        'class' => 'form-control',
                        'placeholder' => 'Enter your Last Name',
                        'name' => 'lastname',
                        'value' => set_value('lastname')
                    ]); ?>
                </div>
            </div>
            <div class="col-lg-6" style="margin-top:40px;">
                <?php echo form_error('lastname', "<div class='text-danger'>", "</div>"); ?>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <?php echo form_input([
                        'class' => 'form-control',
                        'placeholder' => 'Enter your Email',
                        'name' => 'email',
                        'value' => set_value('email')
                    ]); ?>
                </div>
            </div>
            <div class="col-lg-6" style="margin-top:40px;">
                <?php echo form_error('email', "<div class='text-danger'>", "</div>"); ?>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <?php echo form_password([
                        'class' => 'form-control',
                        'placeholder' => 'Enter your Password',
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
            'class' => 'btn btn-primary',
            'value' => 'Sign up'
        ]) ?>

        <?php echo form_reset([
            'class' => 'btn btn-warning',
            'value' => 'Reset'
        ]) ?>
        </form>
    </div>
</body>

</html>
<?php include('footer.php') ?>