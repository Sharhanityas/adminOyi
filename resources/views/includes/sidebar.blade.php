 {{-- <!-- Left Panel -->
 <aside id="left-panel" class="left-panel">
     <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
             <ul class="nav navbar-nav">
                 <li class="active">
                     <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                 </li>
                 <li class="menu-title">Events</li><!-- /.menu-title -->
                 <li class="">
                     <a href=" {{ route('event.index') }}"> <i
                         class="menu-icon fa fa-list"></i>Events</a>
                 </li>
                 <li class="">
                    <a href=" {{ route('event_galleries.index') }}"> <i
                         class="menu-icon fa fa-list"></i>Foto</a>
                 </li>
                 <li class="">
                    <a href=" {{ route('speaker.index') }}"> <i
                         class="menu-icon fa fa-list"></i>Pembicara</a>
                 </li>
                 <li class="">
                     <a href=" {{ route('event.create') }}"> <i
                         class="menu-icon fa fa-plus"></i>Tambah Events</a>
                 </li>
                 <li class="">
                    <a href=" {{ route('event_galleries.create') }}"> <i
                         class="menu-icon fa fa-plus"></i>Tambah Foto
                     Events</a>
                 </li>

                 <li class="">
                    <a href=" {{ route('speaker.create') }}"> <i
                         class="menu-icon fa fa-plus"></i>Tambah Pembicara</a>
                 </li>

                 <li class="menu-title">Artikel</li><!-- /.menu-title -->
                 <li class="">
                     <a href=" {{ route('article.index') }}"> <i
                         class="menu-icon fa fa-list"></i>Lihat Artikel</a>
                 </li>
                 <li class="">
                    <a href=" {{ route('article_galleries.index') }}"> <i
                         class="menu-icon fa fa-list"></i>Lihat Foto
                     Artikel</a>
                 </li>

                 <li class="">
                     <a href=" {{ route('article.create') }}"> <i
                         class="menu-icon fa fa-plus"></i>Tambah Artikel</a>
                 </li>
                 <li class="">
                    <a href=" {{ route('article_galleries.create') }}"> <i
                         class="menu-icon fa fa-plus"></i>Tambah
                     Foto Artikel</a>
                 </li>

                 <li class="menu-title">Review</li><!-- /.menu-title -->
                 <li class="">
                     <a href=" {{ route('review.index') }}"> <i
                         class="menu-icon fa fa-list"></i>Lihat Reviews</a>
                 </li>
                 <li class="">
                    <a href=" {{ route('review_galleries.index') }}"> <i
                         class="menu-icon fa fa-list"></i>Lihat Foto
                     Review</a>
                 </li>
                 <li class="">
                     <a href=" {{ route('review.create') }}"> <i
                         class="menu-icon fa fa-plus"></i>Tambah Reviews</a>
                 </li>
                 <li class="">
                    <a href=" {{ route('review_galleries.create') }}"> <i
                         class="menu-icon fa fa-plus"></i>Tambah
                     Foto Review</a>
                 </li>

                 <li class="menu-title">Formulir</li><!-- /.menu-title -->
                 <li class="">
                     <a href=" {{ route('registration.index') }}"> <i
                         class="menu-icon fa fa-list"></i>Lihat Formulir
                     Events</a>
                 </li>
                 <li class="">
                     <a href=" {{ route('registration.create') }}"> <i
                         class="menu-icon fa fa-plus"></i>Tambah
                     Formulir
                     Events</a>
                 </li>
                 <li class="menu-title">Pesan</li><!-- /.menu-title -->
                 <li class="">
                     <a href=" {{ route('message.index') }}"> <i
                         class="menu-icon fa fa-list"></i>Lihat Pesan</a>
                 </li>
             </ul>
         </div><!-- /.navbar-collapse -->
     </nav>
 </aside>
 <!-- /#left-panel --> --}}


 <aside class="main-sidebar sidebar-light-teal elevation-2">
     <!-- Brand Logo -->
     <a href="#" class="brand-link p-5">
         <img src="{{ asset('images/logo-panjang.png') }}" alt="Outstanding Youth Indonesia Logo"
             class="brand-image ">
         {{-- <img src="{{ asset('images/ikon-oyi.png') }}" alt="Outstanding Youth Indonesia Logo"
             class="brand-image d-none d-xs-block d-md-none"> --}}
         {{-- <span class="brand-text font-weight-light">OYI</span> --}}
     </a>

     <!-- Sidebar -->
     <div class="sidebar ">

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2 ">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item menu-open ">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Event <i class="right fas fa-angle-left"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('event.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Daftar Event</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('event_galleries.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Foto</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('speaker.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pembicara</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('event.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tambah Event</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('event_galleries.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tambah Foto</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('speaker.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tambah Pembicara</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Artikel <i class="right fas fa-angle-left"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('article.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Daftar Artikel</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('article_galleries.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Foto</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('article.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tambah Artikel</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('article_galleries.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tambah Foto</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Review <i class="right fas fa-angle-left"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('review.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Daftar Review</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('review_galleries.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Foto</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('review.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tambah Review</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('review_galleries.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tambah Foto</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Formulir <i class="right fas fa-angle-left"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('registration.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Daftar Formulir</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('registration.create') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Tambah Formulir</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Pesan <i class="right fas fa-angle-left"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('message.index') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Daftar Pesan</p>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
