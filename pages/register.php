<?php include "pages/header.php"; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1>Sum of Series</h1>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">    <!--row-->
                                <label for="" class="col-md-3 col-form-label">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="full_name" id="" class="form-control">
                                </div>
                            </div>    <!--row-->

                            <div class="form-group row">    <!--row-->
                                <label for="" class="col-md-3 col-form-label">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" id="" class="form-control">
                                </div>
                            </div>    <!--row-->

                            <div class="form-group row">    <!--row-->
                                <label for="" class="col-md-3 col-form-label">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="text" name="mobile" id="" class="form-control">
                                </div>
                            </div>    <!--row-->


                            <div class="form-group row">    <!--Row-->
                                <label for="" class="col-md-3 col-form-label">Subject</label>
                                <div class="col-md-9">
                                    <label for=""><input class="" type="checkbox" name="subject[]" value="Bengali">Bengali</label>
                                    <label for=""><input class="" type="checkbox" name="subject[]" value="English">English</label>
                                    <label for=""><input class="" type="checkbox" name="subject[]" value="Math">Math</label>
                                    <label for=""><input class="" type="checkbox" name="subject[]" value="Physics">Physics</label>
                                    <label for=""><input class="" type="checkbox" name="subject[]" value="Chemistry">Chemistry</label>
                                    <label for=""><input class="" type="checkbox" name="subject[]" value="Biology">Biology</label>
                                </div>
                            </div>      <!--Row-->
                            <div class="form-group row">    <!--Row-->
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="register_btn" id="" class="btn btn-outline-success btn-block" value="submit">
                                </div>
                            </div>      <!--Row-->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<?php include "pages/footer.php"; ?>
