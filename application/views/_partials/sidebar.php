<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('gambar/logo.png')?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata("username"); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">MENU</li>
      <li class="treeview berita">
        <a href="<?php echo base_url(); ?>berita">
          <i class="fa fa-newspaper-o"></i> <span>Berita</span>
        </a>
      </li>
      <li class="treeview berita">
        <a href="<?php echo base_url(); ?>barang">
          <i class="fa fa-newspaper-o"></i> <span>Barang</span>
        </a>
      </li>
    </ul>
  </section>
</aside>