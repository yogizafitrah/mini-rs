<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Mini RS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            if (Yii::$app->user->isGuest) {
                echo \hail812\adminlte\widgets\Menu::widget([
                    'items' => [
                        ['label' => 'Yii2 PROVIDED', 'header' => true],
                        ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                        ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                        ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ],
                ]);
            } else {
                echo \hail812\adminlte\widgets\Menu::widget([
                    'items' => [
                        ['label' => 'Poliklinik', 'icon' => 'th', 'url' => ['/poliklinik']],
                        ['label' => 'Dokter', 'icon' => 'th', 'url' => ['/dokter']],
                        ['label' => 'Jadwal', 'icon' => 'th', 'url' => ['/jadwal']],
                        ['label' => 'Pasien', 'icon' => 'th', 'url' => ['/pasien']],
                        ['label' => 'Kunjungan', 'icon' => 'th', 'url' => ['/kunjungan']],
                        ['label' => 'Yii2 PROVIDED', 'header' => true],
                        ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                        ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ],
                ]);
            }
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>