<?php
/*
Template Name: NEW_お客様の声
*/ ?>
<?php get_header('new'); ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<div class="hero__heading newttl">
	<div class="intro-heading">
		<div class="container-1280">
			<h1 class="heading-secondary">
				ご成婚されたお客様の体験談
				<span class="heading-secondary-sm">VOICE OF GRATITUDE</span>
			</h1>
		</div>
	</div>
</div>

<div class="breadcrumb">
	<div class="container-1280">
		<div class="breadcrumb-content">
			<ul class="breadcrumb-ul">
				<li class="breadcrumb-li">
					<a href="/" class="breadcrumb-link">東京・表参道の結婚相談所 サンセリテ青山</a>
				</li>
			</ul>

			<ul class="breadcrumb-ul">
				<li class="breadcrumb-li">
					<a href="#" class="breadcrumb-link -active">ご成婚されたお客様の体験談</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<main id="main" class="main">
	<div class="info-job">
		<div class="high-class">
			<div class="container-1280">
				<div class="high-class__wrapper">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/icon-flower.svg" alt="" class="img-fluid" width="16" height="19" loading="lazy">
					<p class="high-class__ttl -ls-s"><span class="high-class__ttl-span">ご成婚されたお客様からのお手紙</span></p>

					<p class="high-class__desc">サンセリテで理想の結婚相手に巡り会えた会員様より嬉しい体験談を多数頂きました。<br>
						会員様がこれからの結婚生活のことを楽しそうに話して下さることがスタッフ全員の何よりの幸せです。
					</p>

				</div>

			</div>
		</div>

		<div class="grat">

			<div class="grat__tabs" id="tabs">

				<div class="grat__tabs-top">
					<div class="tabs">
						<div class="container-1280">
							<div class="tabs-nav">
								<h2 class="tab" id="tab-1">すべて</h2>
								<h2 class="tab" id="tab-2">男 性</h2>
								<h2 class="tab" id="tab-3">女 性</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="grat__tabs-btm">
					<div class="container-1280">
						<div class="tabs-stage">
							<div class="tabContent tab-1">
								<div class="grat__tabs-content">
									<!-- AREA 1 -->
									<?php
									global $post;
									$args = array(
										'posts_per_page' => -1,
										'post_type' => 'voice_page',
									);
									$myposts = get_posts($args);
									foreach ($myposts as $post) : setup_postdata($post); ?>
										<div class="grat__content-wpr">
											<div class="grat__tabs-row">
												<?php $customfield = get_post_meta($post->ID, '手書き画像', true) ?>
												<?php if (!empty($customfield)) : ?>
													<div class="grat__tabs-col-lg">
													<?php else : ?>
														<div class="grat__tabs-col-lg nonimg">
														<?php endif; ?>
														<div class="grat__tabs-details-box">
															<?php $status = SCF::get('性別'); ?>
															<?php if ($status == '男性') : ?>
																<img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/gratitude/person-male.png" alt="<?php $myfield = scf::get('年齢');
																																																																		echo $myfield; ?> <?php $myfield = scf::get('性別');
																																																																																											echo $myfield; ?> / <?php $myfield = scf::get('職業');
																																																																																																																						echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間');
																																																																																																																																																	echo $myfield; ?>" loading="lazy" width="107" height="107">
															<?php elseif ($status == '女性') : ?>
																<img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/gratitude/person-01.png" alt="<?php $myfield = scf::get('年齢');
																																																																	echo $myfield; ?> <?php $myfield = scf::get('性別');
																																																																																										echo $myfield; ?> / <?php $myfield = scf::get('職業');
																																																																																																																					echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間');
																																																																																																																																																echo $myfield; ?>" loading="lazy" width="107" height="107">
															<?php endif; ?>

															<div class="grat__detail">
																<h3 class="grat__date">
																	<?php $myfield = scf::get('ご成婚日');
																	echo $myfield; ?> ご成婚<br>
																	<?php $myfield = scf::get('年齢');
																	echo $myfield; ?> <?php $myfield = scf::get('性別');
																																											echo $myfield; ?> <?php $myfield = scf::get('出身地');
																																																																				echo $myfield; ?>
																</h3>
																<p class="grat__txt">ご職業：<?php $myfield = scf::get('職業');
																													echo $myfield; ?><span>活動期間：<?php $myfield = scf::get('活動期間');
																																																											echo $myfield; ?></span></p>
															</div>

														</div>
														<p class="grat__desc"><?php $customfield = SCF::get('本文テキスト');
																									echo nl2br($customfield); ?>
														</p>
														</div>
														<?php $customfield = get_post_meta($post->ID, '手書き画像', true) ?>
														<?php if (!empty($customfield)) : ?>
															<div class="grat__tabs-col-sm">

																<figure class="grat__fig d-none d-md-flex">
																	<?php $status = SCF::get('性別'); ?>
																	<?php if ($status == '男性') : ?>
																		<figcaption class="grat__fig-capt men">
																			実際の<br class="d-none d-md-block">
																			喜びの声
																		</figcaption>
																	<?php elseif ($status == '女性') : ?>
																		<figcaption class="grat__fig-capt">
																			実際の<br class="d-none d-md-block">
																			喜びの声
																		</figcaption>
																	<?php endif; ?>
																	<img src="<?php $myfield = scf::get('手書き画像');
																						echo wp_get_attachment_url($myfield); ?>" width="299" height="424" loading="lazy" alt="" class="img-fluid">
																</figure>

																<div class="grat__modal-btn-wpr">
																	<a class="grat__modal-btn btn-pic-modal d-md-none">直筆のお手紙を見る</a>
																</div>


															</div>
															<?php else : ?><?php endif; ?>
													</div>

													<div class="grat__msg-box">
														<p class="grat__msg acc-btn">
															カウンセラー<br class="d-none d-md-block">
															メッセージ
															<?php $status = SCF::get('性別'); ?>
															<?php if ($status == '男性') : ?>
																<span class="mn">
																</span>
															<?php elseif ($status == '女性') : ?>
																<span class="wmn">
																</span>
															<?php endif; ?>
														</p>

														<p class="grat__msg-txt acc-cnt">
															<span class="grat__msg-txt-span">
																<?php $customfield = SCF::get('コンシェルジュメッセージ');
																echo nl2br($customfield); ?></span>
														</p>
													</div>
											</div>
										<?php
									endforeach;
									wp_reset_postdata();
										?>
										<style>
											.grat__msg span.mn {
												background-color: #1F4E7C;
											}

											.nonimg {
												width: 100% !important;
											}

											@media only screen and (max-width: 767px) {
												.grat__msg-box {
													background-color: #ffffff;
												}

												.nonimg {
													margin-bottom: 20px;
												}
											}
										</style>
										</div>
								</div>
								<div class="tabContent tab-2">
									<div class="grat__tabs-content">


										<?php
										global $post;
										$args = array(
											'posts_per_page' => -1,
											'post_type' => 'voice_page',
											'taxonomy' => 'voice_sex',
											'field' => 'slug',
											'term' => 'cat_men',
										);
										$myposts = get_posts($args);
										foreach ($myposts as $post) : setup_postdata($post); ?>
											<div class="grat__content-wpr">
												<div class="grat__tabs-row">
													<?php $customfield = get_post_meta($post->ID, '手書き画像', true) ?>
													<?php if (!empty($customfield)) : ?>
														<div class="grat__tabs-col-lg">
														<?php else : ?>
															<div class="grat__tabs-col-lg nonimg">
															<?php endif; ?>
															<div class="grat__tabs-details-box">
																<?php $status = SCF::get('性別'); ?>
																<?php if ($status == '男性') : ?>
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/gratitude/person-male.png" alt="<?php $myfield = scf::get('年齢');
																																																																			echo $myfield; ?> <?php $myfield = scf::get('性別');
																																																																																												echo $myfield; ?> / <?php $myfield = scf::get('職業');
																																																																																																																							echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間');
																																																																																																																																																		echo $myfield; ?>" loading="lazy" width="107" height="107">
																<?php elseif ($status == '女性') : ?>
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/gratitude/person-01.png" alt="<?php $myfield = scf::get('年齢');
																																																																		echo $myfield; ?> <?php $myfield = scf::get('性別');
																																																																																											echo $myfield; ?> / <?php $myfield = scf::get('職業');
																																																																																																																						echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間');
																																																																																																																																																	echo $myfield; ?>" loading="lazy" width="107" height="107">
																<?php endif; ?>

																<div class="grat__detail">
																	<h3 class="grat__date">
																		<?php $myfield = scf::get('ご成婚日');
																		echo $myfield; ?> ご成婚<br>
																		<?php $myfield = scf::get('年齢');
																		echo $myfield; ?> <?php $myfield = scf::get('性別');
																																												echo $myfield; ?> <?php $myfield = scf::get('出身地');
																																																																					echo $myfield; ?>
																	</h3>
																	<p class="grat__txt">ご職業：<?php $myfield = scf::get('職業');
																														echo $myfield; ?><span>活動期間：<?php $myfield = scf::get('活動期間');
																																																												echo $myfield; ?></span></p>
																</div>

															</div>
															<p class="grat__desc"><?php $customfield = SCF::get('本文テキスト');
																										echo nl2br($customfield); ?>
															</p>
															</div>
															<?php $customfield = get_post_meta($post->ID, '手書き画像', true) ?>
															<?php if (!empty($customfield)) : ?>
																<div class="grat__tabs-col-sm">

																	<figure class="grat__fig d-none d-md-flex">
																		<?php $status = SCF::get('性別'); ?>
																		<?php if ($status == '男性') : ?>
																			<figcaption class="grat__fig-capt men">
																				実際の<br class="d-none d-md-block">
																				喜びの声
																			</figcaption>
																		<?php elseif ($status == '女性') : ?>
																			<figcaption class="grat__fig-capt">
																				実際の<br class="d-none d-md-block">
																				喜びの声
																			</figcaption>
																		<?php endif; ?>
																		<img src="<?php $myfield = scf::get('手書き画像');
																							echo wp_get_attachment_url($myfield); ?>" width="299" height="424" loading="lazy" alt="" class="img-fluid">
																	</figure>

																	<div class="grat__modal-btn-wpr">
																		<a class="grat__modal-btn btn-pic-modal d-md-none">直筆のお手紙を見る</a>
																	</div>


																</div>
																<?php else : ?><?php endif; ?>
														</div>

														<div class="grat__msg-box">
															<p class="grat__msg acc-btn">
																カウンセラー<br class="d-none d-md-block">
																メッセージ
																<?php $status = SCF::get('性別'); ?>
																<?php if ($status == '男性') : ?>
																	<span class="mn">
																	</span>
																<?php elseif ($status == '女性') : ?>
																	<span class="wmn">
																	</span>
																<?php endif; ?>
															</p>

															<p class="grat__msg-txt acc-cnt">
																<span class="grat__msg-txt-span">
																	<?php $customfield = SCF::get('コンシェルジュメッセージ');
																	echo nl2br($customfield); ?></span>
															</p>
														</div>
												</div>
											<?php
										endforeach;
										wp_reset_postdata();
											?>


											</div>
									</div>
									<div class="tabContent tab-3">
										<div class="grat__tabs-content">
											<!-- AREA 1 -->

											<?php
											global $post;
											$args = array(
												'posts_per_page' => -1,
												'post_type' => 'voice_page',
												'taxonomy' => 'voice_sex',
												'field' => 'slug',
												'term' => 'cat_women',
											);
											$myposts = get_posts($args);
											foreach ($myposts as $post) : setup_postdata($post); ?>
												<div class="grat__content-wpr">
													<div class="grat__tabs-row">
														<?php $customfield = get_post_meta($post->ID, '手書き画像', true) ?>
														<?php if (!empty($customfield)) : ?>
															<div class="grat__tabs-col-lg">
															<?php else : ?>
																<div class="grat__tabs-col-lg nonimg">
																<?php endif; ?>
																<div class="grat__tabs-details-box">
																	<?php $status = SCF::get('性別'); ?>
																	<?php if ($status == '男性') : ?>
																		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/gratitude/person-male.png" alt="<?php $myfield = scf::get('年齢');
																																																																				echo $myfield; ?> <?php $myfield = scf::get('性別');
																																																																																													echo $myfield; ?> / <?php $myfield = scf::get('職業');
																																																																																																																								echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間');
																																																																																																																																																			echo $myfield; ?>" loading="lazy" width="107" height="107">
																	<?php elseif ($status == '女性') : ?>
																		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/gratitude/person-01.png" alt="<?php $myfield = scf::get('年齢');
																																																																			echo $myfield; ?> <?php $myfield = scf::get('性別');
																																																																																												echo $myfield; ?> / <?php $myfield = scf::get('職業');
																																																																																																																							echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間');
																																																																																																																																																		echo $myfield; ?>" loading="lazy" width="107" height="107">
																	<?php endif; ?>

																	<div class="grat__detail">
																		<h3 class="grat__date">
																			<?php $myfield = scf::get('ご成婚日');
																			echo $myfield; ?> ご成婚<br>
																			<?php $myfield = scf::get('年齢');
																			echo $myfield; ?> <?php $myfield = scf::get('性別');
																																													echo $myfield; ?> <?php $myfield = scf::get('出身地');
																																																																						echo $myfield; ?>
																		</h3>
																		<p class="grat__txt">ご職業：<?php $myfield = scf::get('職業');
																															echo $myfield; ?><span>活動期間：<?php $myfield = scf::get('活動期間');
																																																													echo $myfield; ?></span></p>
																	</div>

																</div>
																<p class="grat__desc"><?php $customfield = SCF::get('本文テキスト');
																											echo nl2br($customfield); ?>
																</p>
																</div>
																<?php $customfield = get_post_meta($post->ID, '手書き画像', true) ?>
																<?php if (!empty($customfield)) : ?>
																	<div class="grat__tabs-col-sm">

																		<figure class="grat__fig d-none d-md-flex">
																			<?php $status = SCF::get('性別'); ?>
																			<?php if ($status == '男性') : ?>
																				<figcaption class="grat__fig-capt men">
																					実際の<br class="d-none d-md-block">
																					喜びの声
																				</figcaption>
																			<?php elseif ($status == '女性') : ?>
																				<figcaption class="grat__fig-capt">
																					実際の<br class="d-none d-md-block">
																					喜びの声
																				</figcaption>
																			<?php endif; ?>
																			<img src="<?php $myfield = scf::get('手書き画像');
																								echo wp_get_attachment_url($myfield); ?>" width="299" height="424" loading="lazy" alt="" class="img-fluid">
																		</figure>

																		<div class="grat__modal-btn-wpr">
																			<a class="grat__modal-btn btn-pic-modal d-md-none">直筆のお手紙を見る</a>
																		</div>


																	</div>
																	<?php else : ?><?php endif; ?>
															</div>

															<div class="grat__msg-box">
																<p class="grat__msg acc-btn">
																	カウンセラー<br class="d-none d-md-block">
																	メッセージ
																	<?php $status = SCF::get('性別'); ?>
																	<?php if ($status == '男性') : ?>
																		<span class="mn">
																		</span>
																	<?php elseif ($status == '女性') : ?>
																		<span class="wmn">
																		</span>
																	<?php endif; ?>
																</p>

																<p class="grat__msg-txt acc-cnt">
																	<span class="grat__msg-txt-span">
																		<?php $customfield = SCF::get('コンシェルジュメッセージ');
																		echo nl2br($customfield); ?></span>
																</p>
															</div>
													</div>
												<?php
											endforeach;
											wp_reset_postdata();
												?>

												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

</main>


<!-- The Modal -->
<div id="pic-modal" class="modal d-md-none">

	<!-- Modal content -->
	<div class="modal__content-wrapper">
		<div class="modal__content">
			<span class="close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/gratitude/cross.svg" width="48" height="48" loading="lazy" alt="CLOSE" class="img-fluid"></span>

			<span class="modal__fig-capt">
				実際の<br class="d-none d-md-block">
				喜びの声
			</span>

			<figure class="modal__fig">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/gratitude/grat-banner-01.jpg" width="299" height="424" loading="lazy" alt="" class="img-fluid">
			</figure>

			<span class="close -btm">閉じる</span>

		</div>
	</div>
</div>

<div class="btn__home">
	<a href="<?php echo home_url(); ?>" class="btn__home-link">TOPページへ戻る</a>
</div>
</div>

</main>
<?php get_footer('new'); ?>