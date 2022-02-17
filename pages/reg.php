<?php
include_once "../leyouts/header.php";
?>
<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                alt="Sample photo" class="img-fluid"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <form action="./regproc.php" method="POST">
                                    <h3 class="mb-5 text-uppercase">Student registration form</h3>
                                    
                                    <div class="row">

                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="namereg"id="form3Example1n" type="text"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label"  for="form3Example1n">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name= "emailreg" id="form3Example1m1" type="email"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label"  for="form3Example1m1">Email</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name= "passreg"  id="form3Example1n1" type="password"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label"for="form3Example1n1">Password</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center pt-3">
                                        <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once "../leyouts/footer.php";
?>