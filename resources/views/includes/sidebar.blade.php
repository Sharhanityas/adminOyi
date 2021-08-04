 <!-- Left Panel -->
 <aside id="left-panel" class="left-panel">
     <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
             <ul class="nav navbar-nav">
                 <li class="active">
                     <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                 </li>
                 <li class="menu-title">Events</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('event.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Events</a>
                 </li>
                 <li class="">
                     <a href="{{ route('event.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Events</a>
                 </li>
                 <li class="menu-title">Foto Events</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('event_galleries.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Foto
                         Events</a>
                 </li>
                 <li class="">
                     <a href="{{ route('event_galleries.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Foto
                         Events</a>
                 </li>
                 <li class="menu-title">Pembicara</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('speaker.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Pembicara
                         Events</a>
                 </li>
                 <li class="">
                     <a href="{{ route('speaker.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Pembicara
                         Events</a>
                 </li>

                 <li class="menu-title">Artikel</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('article.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Artikel</a>
                 </li>
                 <li class="">
                     <a href="{{ route('article.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Artikel</a>
                 </li>
                 <li class="menu-title">Foto Artikel</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('article_galleries.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Foto
                         Artikel</a>
                 </li>
                 <li class="">
                     <a href="{{ route('article_galleries.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah
                         Foto Artikel</a>
                 </li>
                 <li class="menu-title">Review</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('review.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Reviews</a>
                 </li>
                 <li class="">
                     <a href="{{ route('review.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Reviews</a>
                 </li>
                 <li class="menu-title">Foto Review</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('review_galleries.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Foto
                         Review</a>
                 </li>
                 <li class="">
                     <a href="{{ route('review_galleries.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah
                         Foto Review</a>
                 </li>
                 <li class="menu-title">Formulir</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('registration.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Formulir
                         Events</a>
                 </li>
                 <li class="">
                     <a href="{{ route('registration.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah
                         Formulir
                         Events</a>
                 </li>
                 <li class="menu-title">Pesan</li><!-- /.menu-title -->
                 <li class="">
                     <a href="{{ route('message.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Pesan</a>
                 </li>
             </ul>
         </div><!-- /.navbar-collapse -->
     </nav>
 </aside>
 <!-- /#left-panel -->
