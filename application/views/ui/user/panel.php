<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>لینکدین فارسی - پنل کاربری</title>
	<link rel="stylesheet" type="text/css" href="{base}assets/layout/layout.css">
	<link rel="stylesheet" type="text/css" href="{base}assets/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{base}assets/library/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="{base}assets/library/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="{base}assets/library/fontawesome/css/all.min.css">
	<link rel="shortcut icon" href="{base}assets/images/favicon.png"/>
</head>
<body class="user-panel">

	<header>
		<div class="header">
			<div class="container">
				<div class="row right-to-left text-right">
					<div class="col-md-3">
						<a href="{base}panel" title="پنل کاربری">
							<div class="logo">
								<span class="fab fa-lg fa-linkedin"></span>
								<h1 class="d-inline text-dark">لینکدین فارسی | پنل کاربری</h1>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<div class="search">
							{form_search_open}
								{search_input}
							{form_close}
						</div>
					</div>
					<div class="col-md-3 left-to-right">
						<nav class="navbar">
							<ul class="nav">
								<a href="{base}panel/out" title="خروج"><li><span class="fas fa-lg fa-power-off text-danger"></span></li></a>
								<a href="{base}panel/setting" title="تنظیمات"><li><span class="fas fa-lg fa-cog"></span></li></a>
								<a href="{base}panel/profile" title="پروفایل من"><li><span class="fas fa-lg fa-user"></span></li></a>
								<a href="{base}panel/notification" title="اعلانات"><li><span class="fas fa-lg fa-bell"></span></li></a>
								<a href="{base}panel/message" title="پیام ها"><li><span class="fas fa-lg fa-envelope"></span></li></a>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<section>
			<div class="content">
				<div class="row right-to-left text-right">
					<div class="col-md-3">
						<div class="content-box">
							<h5><span class="fas fa-1x fa-users"></span>&nbsp; <span>شاید این افراد را بشناسید</span></h5>
							<div class="real-content">

							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="content-box">
							<div class="real-content">
								<div class="write-post-box">
									<div class="write-post-box-title">
										<h6><span class="fas fa-1x fa-pen-nib"></span>&nbsp;<span> نوشته ای را به اشتراک بگذارید. ...</span></h6>
									</div>
									<div class="write-post-box-content">
										{form_newpost_open}
											{write_post_content}
											<p></p>
											<div class="float-left">
												<label for="file-upload" class="custom-file-upload btn btn-primary"> انتخاب فایل</label>
												{post_submit_input}
											</div>
											<div class="clearfix"></div>
											{file_post_content}
										{form_close}
										<?php if(!empty($validation_errors)) { ?>
											<div class="alert alert-danger right-to-left text-right">{validation_errors}</div>
										<?php } ?>
										<?php if(!empty($form_success)) { ?>
											<div class="alert alert-success right-to-left text-right">{form_success}</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>

						<div class="timeline-posts">
							<?php 
							if(!is_null($timeline_posts) && $timeline_posts!==false) {
								foreach ($timeline_posts as $posts) { ?>
									<div class="content-box">
										<div class="real-content">
											<div class="timeline-posts-user">
												<div class="timeline-posts-user-avatar float-right text-center">
													<img src="{base}upload/avatar/<?php echo $posts['avatar_file_name']; ?>" title="<?php echo $posts['firstname'] . " " . $posts['lastname']; ?>" alt="<?php echo $posts['firstname'] . " " . $posts['lastname']; ?>" />
												</div>
												<div class="timeline-posts-user-fullname float-right">
													<a class="text-dark" href="{base}user/<?php echo md5($posts['user_post_id']); ?>" title="مشاهده ی پروفایل <?php echo $posts['firstname'] . " " . $posts['lastname']; ?>" target="_blank">
														<p><?php echo $posts['firstname'] . " " . $posts['lastname']; ?></p>
													</a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="timeline_posts-content">
												<?php echo $posts['content']; ?>
											</div>
											<div class="timeline_posts-footer">
												<ul>
													<li><span class="fas fa-1x fa-eye"></span>&nbsp; </li>
													<li><span class="fas fa-1x fa-eye"></span>&nbsp; </li>
													<li><span class="fas fa-1x fa-eye"></span>&nbsp; </li>
													<li><span class="fas fa-1x fa-eye"></span>&nbsp; </li>
												</ul>
											</div>
										</div>
									</div>
								<?php }
							} else { ?>
								<div class="content-box">
									<div class="real-content">
										<img class="img-fluid" src="{base}assets/images/nopost.png" title="نوشته ای یافت نشد" alt="نوشته ای یافت نشد" />
									</div>
								</div>
							<?php }	?>
							<div class="content-box">
								<h5><span class="fas fa-1x fa-user-plus"></span>&nbsp; <span>ارتباطات خود را افزایش دهید.</span></h5>
								<div class="real-content">
											
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-3">
						<div class="content-box">
							<div class="avatar-timeline text-center">
								<img src="{base}upload/avatar/{user_current_avatar}" title="تصویر کاربری" alt="تصویر کاربری" width="120" height="120" />
							</div>
							<div class="full-name-timeline text-center">
								<h4 class="display-4">{user_full_name}</h4>
								<p id="register_date" class="text-gray">تاریخ عضویت : {register_date}</p>
							</div>
							<div class="connection-state-timeline text-center">
								<div class="real-content">
									<div class="float-right text-center width-50">
										<p><strong>{user_view_profile}</strong></p>
										<p class="text-gray">بازدیدها</p>
									</div>
									<div class="float-left text-center width-50">
										<p><strong>{user_connection_count}</strong></p>
										<p class="text-gray">ارتباطات</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<?php if(!empty($linkedin) && !empty($twitter) && !empty($telegram) && !empty($skype)) { ?>
								<div class="social-link-timeline left-to-right text-left">
									<div class="real-content">
										<?php if(!empty($linkedin)) { ?>
											<a href="{linkedin}" title="لینکدین" target="_blank">
												<p>
													<span class="fab fa-lg fa-linkedin text-gray"></span>
													<span class="text-gray">{linkedin_limit}</span>
												</p>
											</a>
										<?php } ?>
										<?php if(!empty($twitter)) { ?>
										<a href="{twitter}" title="توییتر" target="_blank">
											<p>
												<span class="fab fa-lg fa-twitter text-gray"></span>
												<span class="text-gray">{twitter_limit}</span>
											</p>
										</a>
										<?php } ?>
										<?php if(!empty($telegram)) { ?>
										<a href="{telegram}" title="تلگرام" target="_blank">
											<p>
												<span class="fab fa-lg fa-telegram text-gray"></span>
												<span class="text-gray">{telegram_limit}</span>
											</p>
										</a>
										<?php } ?>
										<?php if(!empty($skype)) { ?>
										<a href="{skype}" title="اسکایپ" target="_blank">
											<p>
												<span class="fab fa-lg fa-skype text-gray"></span>
												<span class="text-gray">{skype_limit}</span>
											</p>
										</a>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="footer">
				<div class="row">
					
				</div>
			</div>
		</footer>
	</div>

	<script href="{base}assets/library/jquery/jquery-3.3.1.min.js"></script>
	<script href="{base}assets/library/bootstrap/js/bootstrap.min.js"></script>
	<script href="{base}assets/library/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
