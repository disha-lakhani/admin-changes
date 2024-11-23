<?php

include 'layout/header.php';

?>


<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Form elements </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputConfirmPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"> Remember me </label>
                        </div>
                        <button type="submit" class="btn signin me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Horizontal Form</h4>
                    <p class="card-description"> Horizontal form layout </p>
                    <form class="forms-sample">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputMobile"
                                    placeholder="Mobile number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="exampleInputPassword2"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re
                                Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="exampleInputConfirmPassword2"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"> Remember me </label>
                        </div>
                        <button type="submit" class="btn signin me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword4"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-select" id="exampleSelectGender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn signin py-3"
                                        type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">City</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn signin me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Input size</h4>
                    <p class="card-description"> Add classes like <code>.form-control-lg</code> and
                        <code>.form-control-sm</code>. </p>
                    <div class="form-group">
                        <label>Large input</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Username"
                            aria-label="Username">
                    </div>
                    <div class="form-group">
                        <label>Default input</label>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    </div>
                    <div class="form-group">
                        <label>Small input</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Username"
                            aria-label="Username">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Select size</h4>
                    <p class="card-description"> Add classes like <code>.form-select-lg</code> and
                        <code>.form-select-sm</code>. </p>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Large select</label>
                        <select class="form-select form-select-lg" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Default select</label>
                        <select class="form-select" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">Small select</label>
                        <select class="form-select form-select-sm" id="exampleFormControlSelect3">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Inline forms</h4>
                    <p class="card-description"> Use the <code>.form-inline</code> class to display a series of labels,
                        form controls, and buttons on a single horizontal row </p>
                    <form class="form-inline">
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                            placeholder="Jane Doe">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                                placeholder="Username">
                        </div>
                        <div class="form-check mx-sm-2">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked> Remember me </label>
                        </div>
                        <button type="submit" class="btn signin mb-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
       
       
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Typeahead</h4>
                    <p class="card-description"> A simple suggestion engine </p>
                    <div class="form-group row">
                        <div class="col">
                            <label>Basic</label>
                            <div id="the-basics">
                                <input class="typeahead" type="text" placeholder="States of USA">
                            </div>
                        </div>
                        <div class="col">
                            <label>Bloodhound</label>
                            <div id="bloodhound">
                                <input class="typeahead" type="text" placeholder="States of USA">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include 'layout/footer.php';

?>