<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
        <a href="super_admin.php" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <!-- Layouts -->
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Orders</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item">
                <a href="super_admin_orders_pending_orders.php" class="menu-link">
                    <div data-i18n="Without menu">Pending Orders</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="super_admin_orders_processing_orders.php" class="menu-link">
                    <div data-i18n="Without navbar">Processing Orders</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="super_admin_orders_complete_orders.php" class="menu-link">
                    <div data-i18n="Container">Complete Orders</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Account Settings">Representative</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="super_admin_all_rep.php" class="menu-link">
                    <div data-i18n="Account">All Representatives</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="super_admin_edit_rep.php" class="menu-link">
                    <div data-i18n="Notifications">Edit Representative</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Account Settings">products</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="super_admin_all_products.php" class="menu-link">
                    <div data-i18n="Account">All products</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="super_admin_edit_products.php" class="menu-link">
                    <div data-i18n="Notifications">Edit products</div>
                </a>
            </li>
        </ul>
    </li>
</ul>