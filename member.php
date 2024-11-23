<?php

include 'layout/header.php';


?>

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Personal info </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Personal-Info</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                  
                    <form class="form-sample">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select class="form-select">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" placeholder="dd/mm/yyyy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Membership</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios"
                                                    id="membershipRadios1" value="" checked> Free </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios"
                                                    id="membershipRadios2" value="option2"> Professional </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-description "> Address </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Block No. </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Street</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pincode</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">State</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                        <select class="form-select">
                                            <option>America</option>
                                            <option>Italy</option>
                                            <option>Russia</option>
                                            <option>Britain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="mt-3 d-grid gap-2">
                                <a class="btn btn-block signin btn-lg font-weight-medium auth-form-btn"
                                    href="dashboard.php">SAVE</a>
                            </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>



<?php


include 'layout/footer.php';


?>