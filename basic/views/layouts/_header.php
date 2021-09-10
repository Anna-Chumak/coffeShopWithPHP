    <!-- Start of the header -->
    <header>
      <div class="row header-image">
        <img
          src="<?=\yii\helpers\Url::to(['/images'])?>/back_header.jpg"
          alt=""
          class="mirror zero-padding col l3 m3 s3"
        />
        <div class="col l6 s6 m6 h1-container"><h1>Coffee Man</h1></div>
        <img
          src="<?=\yii\helpers\Url::to(['/images'])?>/back_header.jpg"
          alt=""
          class="zero-padding col l3 m3 s3"
        />
      </div>
      <!-- Start of the nav -->
      <nav class="nav-center grey darken-3 black-text">
        <div class="nav-wrapper black-text">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"
            ><i class="material-icons">menu</i></a
          >
          <ul class="center hide-on-med-and-down grey darken-3">
            <li><a href="<?=\yii\helpers\Url::to(['/home/index'])?>">Home</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/about/index'])?>">About</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/menu/index'])?>">Menu</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/gallery/index'])?>">Gallery</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/locations/index'])?>">Locations</a></li>
            <li><a class ="icons" href="<?=\yii\helpers\Url::to(['admin/auth/login'])?>"><i class="material-icons">person</i></a>
              <a  class ="icons" href="<?=\yii\helpers\Url::to(['/cart/index'])?>"><i class="material-icons">local_grocery_store</i></a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End of the nav -->
      <!-- Start of the sidenav(mobile) -->
      <ul class="sidenav grey darken-3" id="mobile-demo">
      <li><a href="<?=\yii\helpers\Url::to(['/home/index'])?>">Home</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/about/index'])?>">About</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/menu/index'])?>">Menu</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/gallery/index'])?>">Gallery</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['/locations/index'])?>">Locations</a></li>
            <li><a href="<?=\yii\helpers\Url::to(['admin/auth/login'])?>">Admin</a>
            <li><a href="<?=\yii\helpers\Url::to(['/cart/index'])?>">Cart</a></li>
      </ul>
      <!-- End of the sidenav -->
    </header>
    <!-- End of the header -->