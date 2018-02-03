<?php $__env->startSection('content'); ?>
    <div class="col-md-10 col-md-offset-1" style="z-index: 0">
        <div class="panel panel-info">
            <div class="panel-heading text-center"><strong>-: NEW BOOK ENTRY :-</strong></div>
            <div class="panel-body">

                <form class="form" method="POST" action="<?php echo e(route('bookUpdate',[$stock->book_id])); ?>">

                    <?php echo e(csrf_field()); ?>


            

                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Book Name</label>
                        <input name="b_name" type="text" class="form-control" value="<?php echo e($stock->book_name); ?>"   id="exampleInputName2" placeholder="La-La Land">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Author Name</label>
                        <input name="a_name" type="text" class="form-control" value="<?php echo e($stock->author_name); ?>" id="exampleInputName2" placeholder="Robert Campbell ">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">No Of pices</label>
                        <input name="pieceNo" type="text" class="form-control" value="<?php echo e($stock->no_of_pieces); ?>" id="exampleInputName2" placeholder="10">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Edition</label>
                        <input name="edition" type="text" class="form-control" value="<?php echo e($stock->edition); ?>" id="exampleInputName2" placeholder="First">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Publisher Name</label>
                        <input name="p_name" type="text" class="form-control" value="<?php echo e($stock->pub_name); ?>" id="exampleInputName2" placeholder="Harrington Park Press">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Published year</label>
                        <input name="p_year" type="text" class="form-control" value="<?php echo e($stock->pub_year); ?>" id="exampleInputName2" placeholder="2006">
                    </div>



                    <div class="form-group col-md-12">
                        <label for="exampleInputName2">Book Type</label> <br/>
                        <div  style="margin-left:5vw;">
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="Education" checked> Education
                            </label>
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="Novel" checked> Novel
                            </label>
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="Fantasy" checked> Fantasy
                            </label>
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="children’s fiction" checked> Children’s fiction
                            </label>
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="Detective" checked> Detective
                            </label>
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="Historical" checked> Historical
                            </label>
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="Biography" checked> Biography
                            </label>
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="Love story" checked> Love story
                            </label>
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="Horror" checked> Horror
                            </label>
                            <label class="checkbox-inline">
                                <input class="catLinkCheck" type="checkbox" name="catagory[]" value="Journal" checked> Journal
                            </label>
                        </div>
                    </div>

                    
                            
                    




                    <center><button type="submit" class="submit">Submit</button></center>
                </form >

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>