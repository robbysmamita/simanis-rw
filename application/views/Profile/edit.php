<div class="content-wrapper">
    <div class="col-lg-12">
        <div class="card ">
            <div class="content-header sty-one">
                <h1>User Profile</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><i class="fa fa-angle-right"></i> Profile</li>
                </ol>
            </div>
            <div class="card-body">
                <div class="row">

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" type="text">
                                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                    <?= form_error('first_name', '<small class="text-danger">', '</small>') ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Last Name</label>
                                    <input class="form-control" placeholder="Last Name" type="text">
                                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">E-mail</label>
                                    <input class="form-control" placeholder="E-mail" type="text">
                                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Contact Number</label>
                                    <input class="form-control" placeholder="Contact Number" type="text">
                                    <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Address</label>
                                    <input class="form-control" placeholder="Addresse" type="text">
                                    <span class="fa fa-home form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Website</label>
                                <input class="form-control" placeholder="https://" type="text">
                                <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div> -->
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label">Bio</label>
                                    <textarea class="form-control" id="placeTextarea" rows="3" placeholder="Bio"></textarea>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="custom-file center-block block">
                                    <input id="file" class="custom-file-input" type="file">
                                    <span class="custom-file-control"></span> </label>
                            </div>
                        </div> -->
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>