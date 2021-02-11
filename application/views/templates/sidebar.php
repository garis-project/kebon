</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="<?= base_url('assets') ?>/images/logo.svg" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="database" width="20"></i>
                                <span>Master Data</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="<?= base_url('admin/food') ?>">Food</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/ingredients') ?>">Ingredients</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="shopping-cart" width="20"></i>
                                <span>Transaction</span>
                            </a>

                            <ul class="submenu ">
                                <li>
                                    <a href="component-extra-avatar.html">Sales</a>
                                </li>

                                <li>
                                    <a href="component-extra-divider.html">Purchase</a>
                                </li>
                            </ul>

                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>Report</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="component-extra-avatar.html">Stocking</a>
                                </li>
                                <li>
                                    <a href="component-extra-avatar.html">Sales</a>
                                </li>
                                <li>
                                    <a href="component-extra-divider.html">Purchase</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>