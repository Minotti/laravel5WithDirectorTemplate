<aside class="left-side sidebar-offcanvas">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                {!!Html::image('assets/director-admin/img/26115.jpg', 'User Image', ['class' => 'img-circle'])!!}
            </div>
            <div class="pull-left info">
                <p>Hello, Jane</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu">
            <li class="active">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-gavel"></i> <span>General</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-globe"></i> <span>Basic Elements</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-glass"></i> <span>Simple tables</span>
                </a>
            </li>
        </ul>
    </section>
</aside>