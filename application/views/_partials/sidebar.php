<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()?>assets/gambar/logo.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata("username"); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>
      <li class="treeview berita">
        <a href="<?php echo base_url(); ?>berita">
          <i class="fa fa-newspaper-o"></i> <span>Berita</span>
        </a>
      </li>
      <li class="berita">
        <a href="<?php echo base_url(); ?>barang">
          <i class="fa fa-newspaper-o"></i> <span>Barang</span>
        </a>
      </li>
      <li class="agen">
        <a href="<?php echo base_url(); ?>agen">
          <i class="fa fa-th"></i> <span>Agen</span>
        </a>
      </li>
      <li class="treeview invisible">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Menu Tree</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>
