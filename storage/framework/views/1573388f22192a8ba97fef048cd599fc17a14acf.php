
    <div class="col-md-12" style=" z-index: 0; overflow-y: hidden;">
        <div class="panel panel-default">
            <div class="panel-heading text-center"  style="background-color:#383b3d; color: whitesmoke;"><strong>-: Book List :-</strong></div>
            <div class="panel-body" style="color:#0b054f;">
                 <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                <table class="table table-striped table-bordered ">
                    <thead>
                    <tr style="color:#003559;">
                        <th scope="col">Book ID</th>
                        <th scope="col">Book name</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">no of pices</th>
                        <th scope="col">Edition</th>
                        <th scope="col">Publisher Name</th>
                        <th scope="col">Published Year</th>

                        <th scope="col">Catagory</th>
                        <th scope="col">Added By</th>
                        <th scope="col">Created_at </th>
                        <th scope="col">Action </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td><?php echo e($stock->book_id); ?></td>
                            <td><?php echo e($stock->book_name); ?></td>
                            <td><?php echo e($stock->author_name); ?></td>
                            <td><?php echo e($stock->no_of_pieces); ?></td>
                            <td><?php echo e($stock->edition); ?></td>
                            <td><?php echo e($stock->pub_name); ?></td>
                            <td><?php echo e($stock->pub_year); ?></td>

                            <td><?php echo e($stock->catagory); ?></td>
                            <td><?php echo e($stock->user->name); ?></td>
                            <td><?php echo e($stock->created_at); ?></td>
    
                            <td>
                                <div class="row">
                                    
                                    <a href="<?php echo e(route('bookEdit',[$stock->book_id])); ?>"><button type="submit" class="btn btn-success btn-raised btn-xs">
                                    <i class="fas fa-pencil-alt"></i></button>
                                        </a>

                                    <form class="form" action="<?php echo e(route('bookDelete',[$stock->book_id])); ?>" method=post>
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-danger btn-raised btn-xs">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                </div>
            </div>
            
            <div class="row text-center" style="margin-top: -3vh">
                    <ul>
                        <?php echo e($stocks->render()); ?>

                    </ul>
            </div>
        </div>

    </div>
