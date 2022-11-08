<head>
    <link rel="stylesheet" href="assets/styles/style-registration.css">
</head>

<div class="container reg-container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <div class="circle-row row justify-content-center">
                <div class="bg-circle d-flex flex-column justify-content-center align-items-center">
                    <p class="">1</p>
                    <p class="text-capitalize">registration</p>
                </div>
                <div class="bg-circle d-flex flex-column justify-content-center align-items-center ml-5">
                    <p class="">2</p>
                    <p class="text-capitalize">payment</p>
                </div>
                <div class="bg-circle d-flex flex-column justify-content-center align-items-center ml-5">
                    <p class="">3</p>
                    <p class="text-capitalize">summary</p>
                </div>
                <div class="line"></div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="box col-10 col-lg-12">
                    <form action="pages/payment-successful-page.php" method="POST">
                        <div class="m-3">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Name">
                        </div>
                        <div class="row m-3">
                            <div class="col-md-6 pl-0 pr-0 pr-md-3">
                                <input type="text" class="form-control" placeholder="Phone No" aria-label="phone no">
                            </div>
                            <div class="col-md-6 pr-0 pl-0 pl-md-3 mt-3 mt-md-0">
                                <select class="form-select" aria-label="Default select example" required>
                                    <option value="">City</option>
                                    <option value="1">Pondy</option>
                                    <option value="2">Chennai</option>
                                    <option value="3">Trichy</option>
                                </select>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-md-6 pl-0 pr-0 pr-md-3">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="col-md-6 pr-0 pl-0 pl-md-3 mt-3 mt-md-0">
                                <select class="form-select" aria-label="Default select example" required>
                                    <option value="">Ocupation</option>
                                    <option value="1">Developer</option>
                                    <option value="2">Student</option>
                                    <option value="3">Designer</option>
                                </select>
                            </div>
                        </div>
                        <div class="m-3">
                            <select class="form-select" aria-label="Default select example" required>
                                <option value="">Purpose</option>
                                <option value="1">Learning</option>
                                <option value="2">Business</option>
                                <option value="3">Teaching</option>
                            </select>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <button type="submit" class="btn btn-light">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- col 2 -->
        <div class="content-col col-10 col-lg-6 d-flex justify-content-center align-items-center mt-5 mt-md-none">
            <div>
                <img src="assets/images/hr-logo.png" alt="" class="img-fluid">
                <div class="webinar-text mt-4">
                    <p class="text-capitalize">masterclass webinar</p>
                    <p class="text-capitalize">facebook & instagram ads</p>
                </div>
                <p class="almost-text mt-0 mt-md-4">
                    almost there!
                </p>
                <p class="col-lg-7 p-0 proceed-text">
                    Please proceed to payment to finalise the process
                </p>
                <i class="fa-solid fa-gift mt-4"></i>
            </div>

        </div>
    </div>
</div>