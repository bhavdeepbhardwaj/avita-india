<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.Homepage'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

      <?php 
        $country = strtolower( request()->segment(1) );
     ?>
    
    <?php 
        $page = 'home';
     ?>

    <?php if( View::exists('banner_'. $country)): ?>
        <?php echo $__env->make('banner_'.$country, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('banner_hk', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

    <section class="promo-banner mt-1">
    <div id="preloaders" class="preloader"></div>

            <div class="row no-gutters">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="<?php echo e(route('product.overview', ['liber-v'])); ?>" style="background-image: url('/images/demo/<?php echo app('translator')->getFromJson('site.home_photo1_image'); ?>')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="/cap" style="background-image: url('/images/campus.jpg')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="/aboutus" style="background-image: url('/images/demo/<?php echo app('translator')->getFromJson('site.home_photo3_image'); ?>')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="https://www.avita.com/login" style="background-image: url('/images/demo/<?php echo app('translator')->getFromJson('site.home_photo4_image'); ?>')"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="email-subscription py-5 ls-0">
    <form class="email-subscription-form col-12 col-lg-8 col-xl-6 mx-auto" role="form" method="POST" action="<?php echo e(url('/subscribe')); ?>"  enctype="multipart/form-data" >
    <?php echo csrf_field(); ?>


    <?php echo $__env->make('includes.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <h2 class="text-center mt-4 mb-3 font-weight-light"><?php echo e(__('messages.home_join')); ?></h2>
                <div class="text-center mt-3 mb-4 lead"><?php echo e(__('messages.home_receiving')); ?></div>
                  <div class="row my-4 no-gutters justify-content-center">
                    <div class="col-12 col-sm-7 col-md-6 col-lg-7 ml-auto">
                <div class="input-group">
                    <div class="input-group-addon overlay-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                         <input id="email" type="text" class="form-control" name="email" required>
                </div>
              </div>
              <div class="form-group">
              <div class="col-12 col-sm-4 col-md-4">
                    <button class="btn btn-primary d-block mt-3 mt-sm-0 mt-md-0 mx-auto ml-md-3" type="submit"><?php echo e(__('messages.home_subscribe')); ?></button>
                </div>
            </div>
        </div>
            
           
    </form>
      
    <p class="download-brochure" ><a href="/images/Product-Brochure.pdf" target="_blank" download="Product-Brochure.pdf"><button class="btn btn-primary btn-lg " type="button"><?php echo e(__('messages.brochuer')); ?></button></a></p> 

    </section>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>