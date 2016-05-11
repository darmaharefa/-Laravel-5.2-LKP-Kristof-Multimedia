 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="<?php url("") ?>/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#tips"><i class="fa fa-fw fa-flask"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="tips" class="collapse">
                        <li>
                            <a href="/dashboard/blog">List Post</a>
                        </li>
                         <li>
                            <a href="/dashboard/blog/create">Tambah Post</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>