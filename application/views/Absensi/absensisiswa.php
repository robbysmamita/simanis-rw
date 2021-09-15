<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Absensi Siswa</h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('Dashboard') ?>">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Modern Dashboard</li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <!-- <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-b-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-b-1"> <i class="icon-facebook f-30 text-blue"></i> <span class="pull-right text-muted">Likes</span> </div>
                            <div class="info-widget-text row">
                                <div class="col-sm-6 pull-left"><span>Facebook</span></div>
                                <div class="col-sm-6 pull-right text-right text-blue f-25">3,500</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-b-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-b-1"> <i class="icon-twitter f-30 text-blue"></i> <span class="pull-right text-muted">Tweets</span> </div>
                            <div class="info-widget-text row">
                                <div class="col-sm-6 pull-left"><span>Twwitter</span></div>
                                <div class="col-sm-6 pull-right text-right text-blue f-25">2,950</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-b-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-b-1"> <i class="icon-googleplus f-30 text-blue"></i> <span class="pull-right text-muted">Share</span> </div>
                            <div class="info-widget-text row">
                                <div class="col-sm-6 pull-left"><span>Google+</span></div>
                                <div class="col-sm-6 pull-right text-right text-blue f-25">1,750</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-b-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-b-1"> <i class="icon-rss f-30 text-blue"></i> <span class="pull-right text-muted">Posts</span> </div>
                            <div class="info-widget-text row">
                                <div class="col-sm-6 pull-left"><span>Blog</span></div>
                                <div class="col-sm-6 pull-right text-right text-blue f-25">2,250</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- /.row -->

        <!-- <div class="row">
            <div class="col-lg-3">
                <div class="tile-progress tile-pink">
                    <div class="tile-header">
                        <h5>Absensi Siswa Harian</h5>
                        <h3>1250</h3>
                    </div>
                    <div class="tile-progressbar"> <span data-fill="65.5%" style="width: 65.5%;"></span> </div>
                    <div class="tile-footer">
                        <h4> <span class="pct-counter">65.5</span>% increase </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="tile-progress tile-red">
                    <div class="tile-header">
                        <h5>Monthly Sales</h5>
                        <h3>850</h3>
                    </div>
                    <div class="tile-progressbar"> <span data-fill="70%" style="width: 70%;"></span> </div>
                    <div class="tile-footer">
                        <h4> <span class="pct-counter">70</span>% increase </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="tile-progress tile-cyan">
                    <div class="tile-header">
                        <h5>New Users</h5>
                        <h3>2250</h3>
                    </div>
                    <div class="tile-progressbar"> <span data-fill="50%" style="width: 50%;"></span> </div>
                    <div class="tile-footer">
                        <h4> <span class="pct-counter">50</span>% increase </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="tile-progress tile-aqua">
                    <div class="tile-header">
                        <h5>Feedbacks</h5>
                        <h3>530</h3>
                    </div>
                    <div class="tile-progressbar"> <span data-fill="75.5%" style="width: 75.5%;"></span> </div>
                    <div class="tile-footer">
                        <h4> <span class="pct-counter">75.5</span>% increase </h4>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-8">
                <div class="info-box">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h5>Yearly Earning</h5>
                            </div>
                            <div class="ml-auto">
                                <ul class="list-inline">
                                    <li class="text-green"> <i class="fa fa-circle"></i> Sales</li>
                                    <li class="text-blue"> <i class="fa fa-circle"></i> Earning ($)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 m-b-3">
                            <div id="earning"></div>
                        </div>
                        <div class="col-lg-3 m-t-5">
                            <div class="m-b-5 text-center"> <i class="icon-bargraph f-40 m-b-2 text-blue"></i>
                                <h6 class="f-14">Sales</h6>
                                <h4>5,650</h4>
                            </div>
                            <div class="m-b-5 text-center"> <i class="icon-strategy f-40 m-b-2 text-blue"></i>
                                <h6 class="f-14">Earning</h6>
                                <h4>$ 13,500</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-box">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h5 class="m-b-15">Statistics</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 m-auto m-top-40 m-bot-10">
                        <div id="donut"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 m-b-2 text-center">
                            <h6 class="f-14">In Store</h6>
                            <h4>9,500</h4>
                        </div>
                        <div class="col-xl-4 m-b-2 text-center">
                            <h6 class="f-14">Mail Order</h6>
                            <h4>3,500</h4>
                        </div>
                        <div class="col-xl-4 m-b-2 text-center">
                            <h6 class="f-14">New Order</h6>
                            <h4>1,500</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-xl-8">
                <div class="info-box">
                    <div class="card-header">
                        <h5 class="card-title">Recent Sales <a class="btn btn-sm btn-primary pull-right text-white">View all</a></h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Customer</th>
                                    <th>Categories</th>
                                    <th>Progress</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>iPone X</td>
                                    <td><img src="<?= base_url('assets') ?>/img/img1.jpg" class="img-circle img-w-30" alt="User Image"></td>
                                    <td><button type="button" class="btn btn-sm btn-outline-danger btn-rounded">Mobile</button></td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 5,500</td>
                                </tr>
                                <tr>
                                    <td>OPPP</td>
                                    <td><img src="<?= base_url('assets') ?>/img/img2.jpg" class="img-circle img-w-30" alt="User Image"></td>
                                    <td><button type="button" class="btn btn-sm btn-outline-success btn-rounded">Tablet</button></td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 3,450</td>
                                </tr>
                                <tr>
                                    <td>iPad</td>
                                    <td><img src="<?= base_url('assets') ?>/img/img3.jpg" class="img-circle img-w-30" alt="User Image"></td>
                                    <td><button type="button" class="btn btn-sm btn-outline-danger btn-rounded">Mobile</button></td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 1,040</td>
                                </tr>
                                <tr>
                                    <td>OnePlus</td>
                                    <td><img src="<?= base_url('assets') ?>/img/img1.jpg" class="img-circle img-w-30" alt="User Image"></td>
                                    <td><button type="button" class="btn btn-sm btn-outline-success btn-rounded">Tablet</button></td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 2,200</td>
                                </tr>
                                <tr>
                                    <td>Pixel 2</td>
                                    <td><img src="<?= base_url('assets') ?>/img/img2.jpg" class="img-circle img-w-30" alt="User Image"></td>
                                    <td><button type="button" class="btn btn-sm btn-outline-danger btn-rounded">Mobile</button></td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 1,500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 m-b-3">
                <div class="box-gradient">
                    <div class="card-body text-white">
                        <h5>Bandwidth usage</h5>
                        <h1>1,350 GB</h1>
                        <h5>April 2018</h5>
                        <div class="m-t-5 m-b-3"><span class="line">5,3,9,6,5,9,7,3,5,2</span></div>
                        <p>Lorem ipsum dolor sit amet moles tiae, consectetur adipisicing elit users.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-4 m-b-3">
                <div class="box box-widget widget-user-2">
                    <div class="widget-user-header bg-yellow">
                        <div class="widget-user-image"> <img class="img-circle" src="<?= base_url('assets') ?>/img/img5.jpg" alt="User Avatar"> </div>
                        <h3 class="widget-user-username">Nick Lampard</h3>
                        <h5 class="widget-user-desc">Lead Developer</h5>
                    </div>
                    <div class="box-footer no-padding">
                        <ul class="nav nav-stacked">
                            <li><a href="#">Projects <span class="pull-right badge bg-blue">15</span></a></li>
                            <li><a href="#">Tasks <span class="pull-right badge bg-aqua">25</span></a></li>
                            <li><a href="#">Completed Projects <span class="pull-right badge bg-green">30</span></a></li>
                            <li><a href="#">Followers <span class="pull-right badge bg-red">150</span></a></li>
                            <li><a href="#">Completed Projects <span class="pull-right badge bg-green">30</span></a></li>
                            <li><a href="#">Tasks <span class="pull-right badge bg-aqua">25</span></a></li>
                            <li><a href="#">Completed Projects <span class="pull-right badge bg-green">120</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 m-b-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activities</h5>
                        <div class="sl-item sl-primary">
                            <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 5 mins ago</small>
                                <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                            </div>
                        </div>
                        <div class="sl-item sl-danger">
                            <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 8 mins ago</small>
                                <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                            </div>
                        </div>
                        <div class="sl-item sl-success">
                            <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 10 mins ago</small>
                                <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                            </div>
                        </div>
                        <div class="sl-item sl-warning">
                            <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 12 mins ago</small>
                                <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 m-b-3">
                <div class="card">
                    <div class="card-body">
                        <div class="box box-warning direct-chat direct-chat-warning">
                            <h5 class="card-title">Recent Chats</h5>
                            <div class="box-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Alexander Pierce</span> <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span> </div>
                                        <img class="direct-chat-img" src="<?= base_url('assets') ?>/img/img2.jpg" alt="user image">
                                        <div class="direct-chat-text"> A small river named Duden flows by their place and supplies it with the necessary. </div>
                                    </div>
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">Sarah Bullock</span> <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span> </div>
                                        <img class="direct-chat-img" src="<?= base_url('assets') ?>/img/img3.jpg" alt="user image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text"> You better believe it! </div>
                                    </div>
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Alexander Pierce</span> <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span> </div>
                                        <img class="direct-chat-img" src="<?= base_url('assets') ?>/img/img4.jpg" alt="user image">
                                        <div class="direct-chat-text"> A small river named Duden flows by their place and supplies it with the necessary. </div>
                                    </div>
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">Sarah Bullock</span> <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span> </div>
                                        <img class="direct-chat-img" src="<?= base_url('assets') ?>/img/img5.jpg" alt="user image">
                                        <div class="direct-chat-text"> I would love to. </div>
                                    </div>
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Alexander Pierce</span> <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span> </div>
                                        <img class="direct-chat-img" src="<?= base_url('assets') ?>/img/img4.jpg" alt="user image">
                                        <div class="direct-chat-text"> A small river named Duden flows by their place and supplies it with the necessary. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input name="message" placeholder="Type Message ..." class="form-control" type="text">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-warning btn-flat">Send</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.content -->