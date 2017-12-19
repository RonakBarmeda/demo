<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="edit">
                        <?php echo e(csrf_field()); ?>

						<input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                        <div class="form-group<?php echo e($errors->has('fname') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="<?php echo e($data->fname); ?>" required autofocus>

                                <?php if($errors->has('fname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('fname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group<?php echo e($errors->has('lname') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="<?php echo e($data->lname); ?>" required autofocus>

                                <?php if($errors->has('lname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('lname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

						<div class="form-group<?php echo e($errors->has('uname') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">USer Name</label>

                            <div class="col-md-6">
                                <input id="uname" type="text" class="form-control" name="uname" value="<?php echo e($data->uname); ?>" required autofocus>

                                <?php if($errors->has('uname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('uname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e($data->email); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required value="<?php echo e($data->password); ?>">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="<?php echo e($data->password); ?>" required>
                            </div>
                        </div>
			
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
							<?php if($data->gen == "Male"): ?>
                                <input id="gen" type="radio"  name="gen" value="Male" checked> Male 
								<input id="gen" type="radio"  name="gen" value="Female"> Female 
							<?php else: ?>
								<input id="gen" type="radio"  name="gen" value="Male" > Male 
								<input id="gen" type="radio"  name="gen" value="Female" checked> Female 
							<?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" value="<?php echo e($data->status); ?>" required autofocus>

                                <?php if($errors->has('status')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('status')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group<?php echo e($errors->has('cno') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Contact No</label>

                            <div class="col-md-6">
                                <input id="cno" type="text" class="form-control" name="cno" value="<?php echo e($data->cno); ?>" required autofocus>

                                <?php if($errors->has('cno')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('cno')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group<?php echo e($errors->has('dob') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">D.O.B.</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="<?php echo e($data->dob); ?>" required autofocus>

                                <?php if($errors->has('dob')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('dob')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>