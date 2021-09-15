<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="image text-center"><img src="<?= base_url('assets') ?>/img/profil1.jpg" class="img-circle" alt="User Image"> </div>
            <div class="info">
                <p>Zulfikar Rofi</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">PERSONAL</li>
            <li class="active treeview"> <a href="#"> <i class="icon-home"></i> <span>Akademis</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url() ?>"><i class="fa fa-angle-right"></i>Dashboard</a></li>
                    <li class="active"><a href="<?= base_url('Absensi') ?>"><i class="fa fa-angle-right"></i> Absensi Siswa</a></li>
                    <li><a href="<?= base_url('kelas/index') ?>"><i class="fa fa-angle-right"></i>Data Kelas</a></li>
                    <li><a href="<?= base_url('Jadwal/index') ?>"><i class="fa fa-angle-right"></i>Jadwal Pelajaran</a></li>
                    <li><a href="<?= base_url('Dataguru/index') ?>"><i class="fa fa-angle-right"></i> Data Guru</a></li>
                    <li><a href="<?= base_url('Datasiswa/index') ?>"><i class="fa fa-angle-right"></i> Data Siswa</a></li>
                </ul>
            </li>
            <!-- <li class="treeview"> <a href="#"> <i class="icon-grid"></i> <span>Aktivitas</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="e"><i class="fa fa-angle-right"></i> Absensi</a></li>
                    <li><a href="apps-support-ticket.html"><i class="fa fa-angle-right"></i> Support Ticket</a></li>
                    <li><a href="apps-contacts.html"><i class="fa fa-angle-right"></i> Contact / Employee</a></li>
                    <li><a href="apps-contact-grid.html"><i class="fa fa-angle-right"></i> Contact Grid</a></li>
                    <li><a href="apps-contact-details.html"><i class="fa fa-angle-right"></i> Contact Detail</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="ti-email"></i> <span>Inbox</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="apps-mailbox.html"><i class="fa fa-angle-right"></i> Mailbox</a></li>
                    <li><a href="apps-mailbox-detail.html"><i class="fa fa-angle-right"></i> Mailbox Detail</a></li>
                    <li><a href="apps-compose-mail.html"><i class="fa fa-angle-right"></i> Compose Mail</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="icon-frame"></i> <span>UI Elements</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="ui-cards.html" class="active"><i class="fa fa-angle-right"></i> Cards</a></li>
                    <li><a href="ui-user-card.html"><i class="fa fa-angle-right"></i> User Cards</a></li>
                    <li><a href="ui-tab.html"><i class="fa fa-angle-right"></i> Tab</a></li>
                    <li><a href="ui-grid.html"><i class="fa fa-angle-right"></i> Grid</a></li>
                    <li><a href="ui-buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
                    <li><a href="ui-notification.html"><i class="fa fa-angle-right"></i> Notification</a></li>
                    <li><a href="ui-progressbar.html"><i class="fa fa-angle-right"></i> Progressbar</a></li>
                    <li><a href="ui-range-slider.html"><i class="fa fa-angle-right"></i> Range slider</a></li>
                    <li><a href="ui-timeline.html"><i class="fa fa-angle-right"></i> Timeline</a></li>
                    <li><a href="ui-horizontal-timeline.html"> <i class="fa fa-angle-right"></i> Horizontal Timeline</a></li>
                    <li><a href="ui-breadcrumb.html"><i class="fa fa-angle-right"></i> Breadcrumb</a></li>
                    <li><a href="ui-typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
                    <li><a href="ui-bootstrap-switch.html"><i class="fa fa-angle-right"></i> Bootstrap Switch</a></li>
                    <li><a href="ui-tooltip-popover.html"><i class="fa fa-angle-right"></i> Tooltip &amp; Popover</a></li>
                    <li><a href="ui-list-media.html"><i class="fa fa-angle-right"></i> List Media</a></li>
                    <li><a href="ui-carousel.html"><i class="fa fa-angle-right"></i> Carousel</a></li>
                </ul>
            </li> -->
            <!-- <li class="header">FORMS, TABLE & WIDGETS</li>
            <li class="treeview"> <a href="#"> <i class="icon-note"></i> <span>Forms</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="form-elements.html"><i class="fa fa-angle-right"></i> Form Elements</a></li>
                    <li><a href="form-validation.html"><i class="fa fa-angle-right"></i> Form Validation</a></li>
                    <li><a href="form-wizard.html"><i class="fa fa-angle-right"></i> Form Wizard</a></li>
                    <li><a href="form-layouts.html"><i class="fa fa-angle-right"></i> Form Layouts</a></li>
                    <li><a href="form-uploads.html"><i class="fa fa-angle-right"></i> Form File Upload</a></li>
                    <li><a href="form-summernote.html"><i class="fa fa-angle-right"></i> Summernote</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="table-basic.html"><i class="fa fa-angle-right"></i> Basic Tables</a></li>
                    <li><a href="table-layout.html"><i class="fa fa-angle-right"></i> Table Layouts</a></li>
                    <li><a href="table-data-table.html"><i class="fa fa-angle-right"></i> Data Tables</a></li>
                    <li><a href="table-jsgrid.html"><i class="fa fa-angle-right"></i> Js Grid Table</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="icon-layers"></i> <span>Widgets</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="widget-data.html"><i class="fa fa-angle-right"></i> Data Widgets</a></li>
                    <li><a href="widget-apps.html"><i class="fa fa-angle-right"></i> Apps Widgets</a></li>
                </ul>
            </li>
            <li class="header">EXTRA COMPONENTS</li>
            <li class="treeview"> <a href="#"><i class="icon-chart"></i> <span>Charts</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="chart-morris.html"><i class="fa fa-angle-right"></i> Morris Chart</a></li>
                    <li><a href="chart-chartist.html"><i class="fa fa-angle-right"></i> Chartis Chart</a></li>
                    <li><a href="chart-knob.html"><i class="fa fa-angle-right"></i> Knob Chart</a></li>
                    <li><a href="chart-chart-js.html"><i class="fa fa-angle-right"></i> Chartjs</a></li>
                    <li><a href="chart-peity.html"><i class="fa fa-angle-right"></i> Peity Chart</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="icon-docs"></i> <span>Sample Pages</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="pages-blank.html"><i class="fa fa-angle-right"></i> Blank page</a></li>
                    <li class="treeview"><a href="#"><i class="fa fa-angle-right"></i> Authentication <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="pages-login.html"><i class="fa fa-angle-right"></i> Login 1</a></li>
                            <li><a href="pages-login-2.html"><i class="fa fa-angle-right"></i> Login 2</a></li>
                            <li><a href="pages-register.html"><i class="fa fa-angle-right"></i> Register</a></li>
                            <li><a href="pages-register2.html"><i class="fa fa-angle-right"></i> Register 2</a></li>
                            <li><a href="pages-lockscreen.html"><i class="fa fa-angle-right"></i> Lockscreen</a></li>
                            <li><a href="pages-recover-password.html"><i class="fa fa-angle-right"></i> Recover password</a></li>
                        </ul>
                    </li>
                    <li><a href="pages-profile.html"><i class="fa fa-angle-right"></i> Profile page</a></li>
                    <li><a href="pages-invoice.html"><i class="fa fa-angle-right"></i> Invoice</a></li>
                    <li><a href="pages-treeview.html"><i class="fa fa-angle-right"></i> Treeview</a></li>
                    <li><a href="pages-pricing.html"><i class="fa fa-angle-right"></i> Pricing</a></li>
                    <li><a href="pages-gallery.html"><i class="fa fa-angle-right"></i> Gallery</a></li>
                    <li><a href="pages-faq.html"><i class="fa fa-angle-right"></i> Faqs</a></li>
                    <li><a href="pages-404.html"><i class="fa fa-angle-right"></i> 404 Error Page</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="icon-location-pin"></i> <span>Maps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="map-google.html"><i class="fa fa-angle-right"></i> Google Maps</a></li>
                    <li><a href="map-vector.html"><i class="fa fa-angle-right"></i> Vector Maps</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"> <i class="icon-energy"></i> <span>Icons</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="icon-fontawesome.html"><i class="fa fa-angle-right"></i> Fontawesome Icons</a></li>
                    <li><a href="icon-themify.html"><i class="fa fa-angle-right"></i> Themify Icons</a></li>
                    <li><a href="icon-linea.html"><i class="fa fa-angle-right"></i> Linea Icons</a></li>
                    <li><a href="icon-weather.html"><i class="fa fa-angle-right"></i> Weather Icons</a></li>
                    <li><a href="icon-simple-lineicon.html"><i class="fa fa-angle-right"></i> Simple Lineicons</a></li>
                    <li><a href="icon-flag.html"><i class="fa fa-angle-right"></i> Flag Icons</a></li>
                </ul>
            </li> -->
            <!-- <li class="treeview"> <a href="#"><span class="material-icon-outlined"></span></i> <span>Multilevel</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
                    <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i> Level One <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-angle-right"></i> Level Two</a></li>
                            <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i> Level Two <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
                </ul>
            </li> -->
            <li class="treeview"> <a href="#"> <i class="icon-logout"></i> <span>Log Out</span>
                    <!-- <ul class="treeview-menu">
                    <li><a href="table-basic.html"><i class="fa fa-angle-right"></i> Log Out</a></li>
                </ul> -->
            </li>
        </ul>
        <!-- <li><a href="#" class="badge badge-danger">Log Out</a></li> -->
    </div>
    <!-- /.sidebar -->
</aside>