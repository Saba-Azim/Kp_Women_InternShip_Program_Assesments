 <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li >
                        <a href="{{route('categories.index')}}"> <i class="menu-icon fa fa-tags"  title="Categories"></i>Category</a>
                    </li>
                    <li>
                        <a href="{{route('books.index')}}"><i class="menu-icon fa fa-book "  title="Books"></i>Books</a>
                    </li>
                    <li>
                        <a href="{{route('authors.index')}}"><i class="menu-icon fa fa-user"  title="Author"></i>Authors</a>
                    </li>
                    <li>
                        <a href="{{route('publishers.index')}}"><i class="menu-icon fa fa-newspaper-o" title="Publishers"></i>Publishers</a>
                    </li>
                    <li>
                        <a href="{{route('suppliers.index')}}"><i class="menu-icon fa fa-briefcase"  title="Suppliers"></i>Suppliers</a>
                    </li>
                    <li>
                        <a href="{{route('sales.index')}}"><i class="menu-icon fa fa-briefcase"  title="Sales"></i>Sales</a>
                    </li>
                    <li>
                        <a href="{{route('purchase.index')}}"><i class="menu-icon fa fa-briefcase"  title="Purchase"></i>Purchases</a>
                    </li>
                    <li>
                        <a href="{{route('users.index')}}"><i class="menu-icon fa fa-briefcase"  title="Staff"></i>Staff</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

