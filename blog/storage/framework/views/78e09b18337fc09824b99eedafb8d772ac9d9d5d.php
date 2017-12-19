<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
				<form action="search" method="post">
				<input type="hidden" name="_token" value="<?= csrf_token() ?>">
                    <div class="form-group">
						<label>User Name </label>
						<input type="text" name="t1" >&nbsp;
					<input type="submit" class="btn btn-primary" value="Search">
					</div>
					<div >
					
					</div>
					</form>
					<script type="text/javascript">
$(document).ready(function(){

  $(function(){
       $('#a1').click(function() {
            
			var id=$(this).val;
			
			$.ajax({
                url: 'user/delete/{id}',
                type: 'GET',
                data: { id: 1 },
                success: function(response)
                {
                    $('#something').html(response);
                }
            });
       });
    });    
});
</script>


			<div class="col-md-12 " class="something">
				<div class="panel panel-body" style="margin-top:20px">	
					<div class="reg1" style="overflow-y:scroll; height:250px">
						<table class="table table-hover">
							<tr align="center">
								<td>First Name</td>
								<td>Last Name</td>
								<td>User name</td>
								<td>Email</td>
								
								<td>Gender</td>
								<td>Status</td>
								<td>Conatact No</td>
								<td>D.O.B.</td>
								<td>Edit</td>
								<td>Delete</td>
							</tr>
								<?php $__currentLoopData = $alldata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr align="center">
								<td><?php echo e($d->fname); ?></td>
								<td><?php echo e($d->lname); ?></td>
								<td><?php echo e($d->uname); ?></td>
								<td><?php echo e($d->email); ?></td>
								
								<td><?php echo e($d->gen); ?></td>
								<td><?php echo e($d->status); ?></td>
								<td><?php echo e($d->cno); ?></td>
								<td><?php echo e($d->dob); ?></td>
								<td><a href="user/edit/<?php echo e($d->id); ?>" class="text-success"><b>Edit</b></a></td>
								<!-- <td><a data-token="<?php echo e(csrf_token()); ?>" id="delete" data-id="<?php echo e($d->id); ?>" data-toggle="tooltip" title="Delete" href="user/delete/<?php echo e($d->id); ?>" role="button" class="text-danger"><b>Delete</b></a></td>-->
								<td><a href="user/delete/<?php echo e($d->id); ?>" id="a1"><b>Delete</b></a></td>
							</tr>
							
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
							
					</div>
				</div>
			</div>
		</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>