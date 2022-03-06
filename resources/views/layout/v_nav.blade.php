<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()-> is('info_sepeda') ? 'active' : ''}}"><a href="/info_sepeda"><i class="fa fa-dashboard"></i> <span>Info Sepeda</span></a></li>
        <li class="{{request()-> is('sewa') ? 'active' : ''}}"><a href="/sewa"><i class="fa fa-dashboard"></i> <span>Sewa</span></a></li>
        <li class="{{request()-> is('rekap_sewa') ? 'active' : ''}}"><a href="/rekap_sewa"><i class="fa fa-dashboard"></i> <span>Rekap Sewa</span></a></li>
        <li class="treeview">
          
      </ul>