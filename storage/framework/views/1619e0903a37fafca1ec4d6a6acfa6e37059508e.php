<?php $__env->startSection('content'); ?>
    <div class="col-md-10 col-md-offset-1" style="z-index: 0">
        <div class="panel panel-info">
            <div class="panel-heading text-center"><strong>-: NEW BOOK ENTRY :-</strong></div>
            <div class="panel-body">

                <form class="form" method="POST" action="<?php echo e(route('createStore')); ?>">
                    <?php echo e(csrf_field()); ?>




            
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Book Name</label>
                        <input name="b_name" type="text" class="form-control" id="exampleInputName2" placeholder="La-La Land">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Author Name</label>
                        <input name="a_name" type="text" class="form-control" id="exampleInputName2" placeholder="Robert Campbell ">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">No Of pices</label>
                        <input name="pieceNo" type="text" class="form-control" id="exampleInputName2" placeholder="10">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Edition</label>
                        <input name="edition" type="text" class="form-control" id="exampleInputName2" placeholder="First">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Publisher Name</label>
                        <input name="p_name" type="text" class="form-control" id="exampleInputName2" placeholder="Harrington Park Press">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputName2">Published year</label>
                        <input name="p_year" type="text" class="form-control" id="exampleInputName2" placeholder="2006">
                    </div>




                    <div class="form-group col-md-12">
                        <label for="exampleInputName2">Book Type</label> <br/>
                        <div  style="margin-left:5vw;">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="Education"> Education
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="Novel"> Novel
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="Fantasy"> Fantasy
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="children’s fiction"> Children’s fiction
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="Detective"> Detective
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="Historical"> Historical
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="Biography"> Biography
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="Love story"> Love story
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="Horror"> Horror
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="catagory[]" value="Journal"> Journal
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