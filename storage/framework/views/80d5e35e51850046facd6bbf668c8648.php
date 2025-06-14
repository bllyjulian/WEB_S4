<?php $__env->startSection('title', 'Chat App'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2>Chat<span>App</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
	<li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">User</li>
	<li class="breadcrumb-item active">Chat App</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <div class="col call-chat-sidebar col-sm-12">
         <div class="card">
            <div class="card-body chat-body">
               <div class="chat-box">
                  <!-- Chat left side Start-->
                  <div class="chat-left-aside">
                     <div class="media">
                        <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/12.png')); ?>" alt="">
                        <div class="about">
                           <div class="name f-w-600">Mark Jecno</div>
                           <div class="status">Status...</div>
                        </div>
                     </div>
                     <div class="people-list" id="people-list">
                        <div class="search">
                           <form class="theme-form">
                              <div class="form-group">
                                 <input class="form-control" type="text" placeholder="search"><i class="fa fa-search"></i>
                              </div>
                           </form>
                        </div>
                        <ul class="list">
                           <li class="clearfix">
                              <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/1.jpg')); ?>" alt="">
                              <div class="status-circle away"></div>
                              <div class="about">
                                 <div class="name">Vincent Porter</div>
                                 <div class="status">Hello Name</div>
                              </div>
                           </li>
                           <li class="clearfix">
                              <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/2.png')); ?>" alt="">
                              <div class="status-circle online"></div>
                              <div class="about">
                                 <div class="name">Aiden Chavez</div>
                                 <div class="status">Out is my favorite.</div>
                              </div>
                           </li>
                           <li class="clearfix">
                              <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/8.jpg')); ?>" alt="">
                              <div class="status-circle online"></div>
                              <div class="about">
                                 <div class="name">Prasanth Anand</div>
                                 <div class="status">Change for anyone.</div>
                              </div>
                           </li>
                           <li class="clearfix">
                              <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/4.jpg')); ?>" alt="">
                              <div class="status-circle offline"></div>
                              <div class="about">
                                 <div class="name">Venkata Satyamu</div>
                                 <div class="status">First bun like a sun.</div>
                              </div>
                           </li>
                           <li class="clearfix">
                              <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/5.jpg')); ?>" alt="">
                              <div class="status-circle online"></div>
                              <div class="about">
                                 <div class="name">Ginger Johnston</div>
                                 <div class="status">it's my life. Mind it.</div>
                              </div>
                           </li>
                           <li class="clearfix">
                              <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/8.jpg')); ?>" alt="">
                              <div class="status-circle offline"></div>
                              <div class="about">
                                 <div class="name">Kori Thomas</div>
                                 <div class="status">Change for anyone.</div>
                              </div>
                           </li>
                           <li class="clearfix">
                              <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/1.jpg')); ?>" alt="">
                              <div class="status-circle online"></div>
                              <div class="about">
                                 <div class="name">Vincent Porter</div>
                                 <div class="status">Hello Name</div>
                              </div>
                           </li>
                           <li class="clearfix">
                              <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/8.jpg')); ?>" alt="">
                              <div class="status-circle online"></div>
                              <div class="about">
                                 <div class="name">Kori Thomas</div>
                                 <div class="status">Change for anyone.</div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- Chat left side Ends-->
               </div>
            </div>
         </div>
      </div>
      <div class="col call-chat-body ">
         <div class="card">
            <div class="card-body p-0">
               <div class="row chat-box">
                  <!-- Chat right side start-->
                  <div class="col pr-0 chat-right-aside  ">
                     <!-- chat start-->
                     <div class="chat ">
                        <!-- chat-header start-->
                        <div class="chat-header clearfix">
                           <img class="rounded-circle" src="<?php echo e(asset('assets/images/user/8.jpg')); ?>" alt="">
                           <div class="about">
                              <div class="name">Kori Thomas  <span class="font-primary f-12">Typing...</span></div>
                              <div class="status digits">Last Seen 3:55 PM</div>
                           </div>
                           <ul class="list-inline float-left float-sm-right chat-menu-icons">
                              <li class="list-inline-item"><a href="#"><i class="icon-search"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="icon-clip"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="icon-headphone-alt"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="icon-video-camera"></i></a></li>
                              <li class="list-inline-item toogle-bar"><a href="#"><i class="icon-menu"></i></a></li>
                           </ul>
                        </div>
                        <!-- chat-header end-->
                        <div class="chat-history chat-msg-box custom-scrollbar">
                           <ul>
                              <li>
                                 <div class="message my-message">
                                    <img class="rounded-circle float-left chat-user-img img-30" src="<?php echo e(asset('assets/images/user/3.png')); ?>" alt="">
                                    <div class="message-data text-right"><span class="message-data-time">10:12 am</span></div>
                                    Are we meeting today? Project has been already finished and I have results to show you.
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="message other-message pull-right">
                                    <img class="rounded-circle float-right chat-user-img img-30" src="<?php echo e(asset('assets/images/user/12.png')); ?>" alt="">
                                    <div class="message-data"><span class="message-data-time">10:14 am</span></div>
                                    Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so?
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="message other-message pull-right">
                                    <img class="rounded-circle float-right chat-user-img img-30" src="<?php echo e(asset('assets/images/user/12.png')); ?>" alt="">
                                    <div class="message-data"><span class="message-data-time">10:14 am</span></div>
                                    Well I am not sure. The rest of the team
                                 </div>
                              </li>
                              <li>
                                 <div class="message my-message mb-0">
                                    <img class="rounded-circle float-left chat-user-img img-30" src="<?php echo e(asset('assets/images/user/3.png')); ?>" alt="">
                                    <div class="message-data text-right"><span class="message-data-time">10:20 am</span></div>
                                    Actually everything was fine. I'm very excited to show this to our team.
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <!-- end chat-history-->
                        <div class="chat-message clearfix">
                           <div class="row">
                              <div class="col-xl-12 d-flex">
                                 <div class="smiley-box bg-primary">
                                    <div class="picker"><img src="<?php echo e(asset('assets/images/smiley.png')); ?>" alt=""></div>
                                 </div>
                                 <div class="input-group text-box">
                                    <input class="form-control input-txt-bx" id="message-to-send" type="text" name="message-to-send" placeholder="Type a message......">
                                    <div class="input-group-append">
                                       <button class="btn btn-primary" type="button">SEND</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end chat-message-->
                        <!-- chat end-->
                        <!-- Chat right side ends-->
                     </div>
                  </div>
                  <!-- <div class="col pl-0 chat-menu">
                     <ul class="nav nav-tabs nav-material nav-primary" id="info-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="info-home-tab" data-toggle="tab" href="#info-home" role="tab" aria-selected="true">CALL</a>
                           <div class="material-border"></div>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="profile-info-tab" data-toggle="tab" href="#info-profile" role="tab" aria-selected="false">STATUS</a>
                           <div class="material-border"></div>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="contact-info-tab" data-toggle="tab" href="#info-contact" role="tab" aria-selected="false">PROFILE</a>
                           <div class="material-border"></div>
                        </li>
                     </ul>
                     <div class="tab-content" id="info-tabContent">
                        <div class="tab-pane fade show active" id="info-home" role="tabpanel" aria-labelledby="info-home-tab">
                           <div class="people-list">
                              <ul class="list digits">
                                 <li class="clearfix">
                                    <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/4.jpg')); ?>" alt="">
                                    <div class="about">
                                       <div class="name">Erica Hughes</div>
                                       <div class="status"><i class="fa fa-share font-success"></i>  5 May, 4:40 PM</div>
                                    </div>
                                 </li>
                                 <li class="clearfix">
                                    <img class="rounded-circle user-image mt-0" src="<?php echo e(asset('assets/images/user/1.jpg')); ?>" alt="">
                                    <div class="about">
                                       <div class="name">
                                          Vincent Porter
                                          <div class="status"><i class="fa fa-reply font-danger"></i>  5 May, 5:30 PM</div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="clearfix">
                                    <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/8.jpg')); ?>" alt="">
                                    <div class="about">
                                       <div class="name">Kori Thomas</div>
                                       <div class="status"><i class="fa fa-share font-success"></i>  1 Feb, 6:56 PM</div>
                                    </div>
                                 </li>
                                 <li class="clearfix">
                                    <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/2.png')); ?>" alt="">
                                    <div class="about">
                                       <div class="name">Aiden Chavez</div>
                                       <div class="status"><i class="fa fa-reply font-danger"></i>  3 June, 1:22 PM</div>
                                    </div>
                                 </li>
                                 <li class="clearfix">
                                    <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/4.jpg')); ?>" alt="">
                                    <div class="about">
                                       <div class="name">Erica Hughes</div>
                                       <div class="status"><i class="fa fa-share font-success"></i>  5 May, 4:40 PM</div>
                                    </div>
                                 </li>
                                 <li class="clearfix">
                                    <img class="rounded-circle user-image mt-0" src="<?php echo e(asset('assets/images/user/1.jpg')); ?>" alt="">
                                    <div class="about">
                                       <div class="name">Vincent Porter</div>
                                       <div class="status"><i class="fa fa-share font-success"></i>  5 May, 5:30 PM</div>
                                    </div>
                                 </li>
                                 <li class="clearfix">
                                    <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/8.jpg')); ?>" alt="">
                                    <div class="about">
                                       <div class="name">Kori Thomas</div>
                                       <div class="status"><i class="fa fa-reply font-danger"></i>                                                                      1 Feb, 6:56 PM</div>
                                    </div>
                                 </li>
                                 <li class="clearfix">
                                    <img class="rounded-circle user-image" src="<?php echo e(asset('assets/images/user/4.jpg')); ?>" alt="">
                                    <div class="about">
                                       <div class="name">Erica Hughes</div>
                                       <div class="status"><i class="fa fa-share font-success"></i>  5 May, 4:40 PM</div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div> -->
                        <div class="tab-pane fade" id="info-profile" role="tabpanel" aria-labelledby="profile-info-tab">
                           <div class="people-list">
                              <div class="search">
                                 <form class="theme-form">
                                    <div class="form-group">
                                       <input class="form-control" type="text" placeholder="Write Status..."><i class="fa fa-pencil"></i>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <div class="status">
                              <p class="font-dark">Active</p>
                              <hr>
                              <p>
                                 Established fact that a reader will be
                                 distracted  <i class="icofont icofont-emo-heart-eyes font-danger f-20"></i><i class="icofont icofont-emo-heart-eyes font-danger f-20 m-l-5"></i>
                              </p>
                              <hr>
                              <p>Dolore magna aliqua  <i class="icofont icofont-emo-rolling-eyes font-success f-20"></i></p>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="info-contact" role="tabpanel" aria-labelledby="contact-info-tab">
                           <div class="user-profile">
                              <div class="image">
                                 <div class="avatar text-center"><img alt="" src="<?php echo e(asset('assets/images/user/2.png')); ?>"></div>
                                 <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                              </div>
                              <div class="user-content text-center">
                                 <h5 class="text-uppercase">mark jenco</h5>
                                 <div class="social-media">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                       <li class="list-inline-item"><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                 </div>
                                 <hr>
                                 <div class="follow text-center">
                                    <div class="row">
                                       <div class="col border-right">
                                          <span>Following</span>
                                          <div class="follow-num">236k</div>
                                       </div>
                                       <div class="col">
                                          <span>Follower</span>
                                          <div class="follow-num">3691k</div>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="text-center digits">
                                    <p class="mb-0">Mark.jecno23@gmail.com</p>
                                    <p class="mb-0">+91 365 - 658 - 1236</p>
                                    <p class="mb-0">Fax: 123-4560</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/fullscreen.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master_mitra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/admin/inbox/index.blade.php ENDPATH**/ ?>