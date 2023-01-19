<?php
/* Template Name: MyCustom */
?>
<?php get_header(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/statusplan2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/statusplan2_sp.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/work_type2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/work_type_sp2.css"/>
    <div class="main-contents clearfix">

        <div class="main-inner-box clearfix">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>

                    <div class="main-sub-left">
                        <div class="main-sub-custom clearfix main-article">

                            <?php $main_image = get_field('main_image'); if ($main_image) { ?>
                            <div class="mainvisu-status">
                                <img src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt'] ?>" />
<?php if(is_page('doctor')): ?>
                                <p class="txt mincho">医師との<br>出会い・結婚なら<br>サンセリテ青山へ</p>
<?php else: ?>
<?php endif; ?>
                            </div>
                            <?php } ?>

                            <p><?php the_field('text_1'); ?></p>
                            <?php if (get_field('heading_2')) { ?>
                                <h2><?php the_field('heading_2'); ?></h2>
                                <!-- <img src="../../wp-content/themes/sincerite/images/img_border3.gif" class="title_img" alt="結婚相談所 サンセリテ青山" data-pin-nopin="true"> -->
                            <?php } ?>
                            <p><?php the_field('text_2'); ?></p>
                            <?php if (get_field('heading_3')) { ?>
                                <h2><?php the_field('heading_3'); ?></h2>
                                <!-- <img src="../../wp-content/themes/sincerite/images/img_border3.gif" class="title_img" alt="結婚相談所 サンセリテ青山" data-pin-nopin="true"> -->
                            <?php } ?>
                            <p class="txt01"><?php the_field('text_3'); ?></p>

                            <div class="img-area3 clearfix">
                                <ul>
                                    <?php $left_image = get_field('left_image'); if ($left_image) { ?>
                                        <li>
                                            <img src="<?php echo $left_image['url'] ?>" alt="<?php echo $left_image['alt'] ?>" width="197" height="124" />
                                        </li>
                                    <?php } ?>
                                    <?php $center_image = get_field('center_image'); if ($center_image) { ?>
                                        <li>
                                            <img src="<?php echo $center_image['url'] ?>" alt="<?php echo $center_image['alt'] ?>" width="197" height="124" />
                                        </li>
                                    <?php } ?>
                                    <?php $right_image = get_field('right_image'); if ($right_image) { ?>
                                        <li class="mg0">
                                            <img src="<?php echo $right_image['url'] ?>" alt="<?php echo $right_image['alt'] ?>" width="197" height="124" />
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php if (get_field('heading_4')) { ?>
                                <h2><?php the_field('heading_4'); ?></h2>
                                <!-- <img src="../../wp-content/themes/sincerite/images/img_border3.gif" class="title_img" alt="結婚相談所 サンセリテ青山" data-pin-nopin="true"> -->
                            <?php } ?>
                            <p><?php the_field('text_4'); ?></p>

                            <?php if (get_field('heading_5')) { ?>
                                <h2><?php the_field('heading_5'); ?></h2>
                                <!-- <img src="../../wp-content/themes/sincerite/images/img_border3.gif" class="title_img" alt="結婚相談所 サンセリテ青山" data-pin-nopin="true"> -->
                            <?php } ?>
                            <p class="txt03"><?php the_field('text_5'); ?></p>




                            <div class="statusplan2_linkbox clearfix">
                            <!-- img src="../wp-content/themes/sincerite/images/statusplan2/statusplan2_link.jpg" class="statusplan2_link" / -->
                            <div class="statusplan2_title mincho">ステータスプラン入会資格</div>
                            <div class="statusplan2_title02">原則として年収700万円以上の安定した職業にお就きの方</div>
                            <div class="linkboxWrap">
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/doctor/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/doctor.jpg" alt="医師との出会い" /></a>医師</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/dentist/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/dentist.jpg" alt="歯科医師との出会い" /></a>歯科医師</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/president/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/president.jpg" alt="会社経営者との出会い" /></a>会社経営者</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/lawyer/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/lawyer.jpg" alt="弁護士との出会い" /></a>弁護士</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/pilot/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/pilot.jpg" alt="パイロットとの出会い" /></a>パイロット</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/accountant/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/accountant.jpg" alt="公認会計士との出会い" /></a>公認会計士</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/judicial/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/judicial.jpg" alt="司法書士との出会い" /></a>司法書士</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/architect/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/architect.jpg" alt="一級建築士との出会い" /></a>一級建築士</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/professor/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/professor.jpg" alt="大学教授との出会い" /></a>大学教授</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/servant/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/servant.jpg" alt="国家公務員との出会い" /></a>国家公務員Ⅰ種</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/trading/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/trading.jpg" alt="大手商社勤務男性との出会い" /></a>大手商社勤務</div>
                            <div class="linkbox"><a href="<?php echo get_site_url(); ?>/advertising/"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/advertising.jpg" alt="大手広告代理店勤務男性との出会い" /></a>大手広告代理店勤務</div>
                            </div>

                            <!-- img src="../wp-content/themes/sincerite/images/statusplan2/statusplan2_link02.jpg" class="statusplan2_link02" / -->
                            <div class="statusplan2_title02">本会の趣旨を理解し、会員規約及びその他の運営規則を遵守することに同意される方で、所定の入会申込書により申込みを行い、次の各号のすべてに該当し、当社が審査の上、承認した方。</div>

                            <div class="condition_box clearfix">
                            <div class="condition_img"><img src="<?php echo get_template_directory_uri() ?>/images/statusplan2/doctor02.jpg" alt="ステータスプラン入会資格"></div>
                            <div class="condition_exp">
                            <ul>
                            <li>男性の方</li>
                            <li>上記の例にある、社会的地位の高い職業にお就きの方</li>
                            <li>大学卒以上の方</li>
                            <li>満年齢25歳以上59歳未満の方</li>
                            <li>喫煙しない、もしくは結婚を機にやめる意志のある方</li>
                            <li>結婚について誠実にお考えの独身の方</li>
                            </ul>
                            </div>
                            </div>

                            <div class="carrer">
                            内科医、外科医、脳外科医、形成外科医、心臓外科医、心療内科医、整形外科医、精神科医、眼科医、小児科医、獣医、病院院長、開業医、研修医、薬剤師、臨床心理士、社長、会社役員、実業家、投資家、ＭＢＡ取得者、外資系、銀行員、銀行マン、コンサルタント、住職 官僚、議員、政治家、外交官、官公庁、裁判官、検事、教授、学者、操縦士、消防士、レーサー、有名人、芸能人、タレント、俳優、芸人、スポーツ選手、TV業界、プロデューサー、記者、作家、音楽家、作詞家、歌手、デザイナー、etc
                            </div>
                            </div>












                            <div class="ttl-text-box chef_g">
                                <div class="clearfix chef_name">
                                    <div class="chef_img"><img src="<?php echo get_template_directory_uri() ?>/images/work04.png" alt="チーフカウンセラー川部"></div>
                                    <div class="name_text">
                                        <p>チーフカウンセラー川部より</p>
                                        <?php if (get_field('counsellor_heading')) { ?>
                                            <h3><?php the_field('counsellor_heading'); ?></h3>
                                        <?php } ?>
                                    </div>
                                </div>
                                <p class="chef_text"><?php the_field('counsellor_text'); ?></p>
                            </div>


                            <ul class="main-button-area pc">
                                <li class="firstComeReserveBtn"><a href="../form01">初回来店予約はこちら</a></li>
                                <li class="freeDocumentRequest"><a href="../form05">無料パンフレット請求</a></li>
                            </ul>






                            <?php if (is_page('doctor') || is_page('dentist') || is_page('president')) : ?>

<?php
$q1 = get_field( 'q1' );
$a1 = get_field( 'a1' );
$q2 = get_field( 'q2' );
$a2 = get_field( 'a2' );
$q3 = get_field( 'q3' );
$a3 = get_field( 'a3' );
$q4 = get_field( 'q4' );
$a4 = get_field( 'a4' );
$q5 = get_field( 'q5' );
$a5 = get_field( 'a5' );
?>

                            <!-- Google 構造化データ JSON-LD マークアップ -->
                            <script type="application/ld+json">
                            {
                              "@context": "http://schema.org",
                              "@type": "FAQPage",
                              "@id": "statusplan",
                              "mainEntity":
                              [
                              {
                                "@type": "Question",
                                "name": "<?php the_field('q1'); ?>",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "<?php the_field('a1'); ?>"
                                }
                              }
                              ,
                              {
                                "@type": "Question",
                                "name": "<?php the_field('q2'); ?>",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "<?php the_field('a2'); ?>"
                                }
                              }
                              ,
                              {
                                "@type": "Question",
                                "name": "<?php the_field('q3'); ?>",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "<?php the_field('a3'); ?>"
                                }
                              }
                              ,
                              {
                                "@type": "Question",
                                "name": "<?php the_field('q4'); ?>",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "<?php the_field('a4'); ?>"
                                }
                              }
                              ,
                              {
                                "@type": "Question",
                                "name": "<?php the_field('q5'); ?>",
                                "acceptedAnswer": {
                                  "@type": "Answer",
                                  "text": "<?php the_field('a5'); ?>"
                                }
                              }
                            ]
                            }
                            </script>

                            <div class="faq-wrap">
                            	<h2 class="ttl">よくあるご質問</h2>
                            	<dl class="cont">
                            		<dt><?php the_field('q1'); ?></dt>
                            		<dd><?php the_field('a1'); ?></dd>
                            		<dt><?php the_field('q2'); ?></dt>
                            		<dd><?php the_field('a2'); ?></dd>
                            		<dt><?php the_field('q3'); ?></dt>
                            		<dd><?php the_field('a3'); ?></dd>
                            		<dt><?php the_field('q4'); ?></dt>
                            		<dd><?php the_field('a4'); ?></dd>
                            		<dt><?php the_field('q5'); ?></dt>
                            		<dd><?php the_field('a5'); ?></dd>
                            	</dl>
                            </div>



                            <script type="application/ld+json">
                            	{
                                "@context" : "https://schema.org/",
                                "@type": "Product",
                                "@id": "statusplan",
                                "name": "<?php the_title(); ?>",
                                "review": {
                                        "@type": "Review",
                                        "reviewRating": {
                                          "@type": "Rating",
                                          "ratingValue": "4.6",
                                          "bestRating": "5"
                                        },
                                        "author": {
                                        "@type": "Person",
										"name": "sincerite_user"
                                        }
                                      },
                                      "aggregateRating": {
                                        "@type": "AggregateRating",
                                        "ratingValue": "4.6",
                                        "reviewCount": "28"
                                      }
                            	}
                            </script>

<?php else: ?>

  <!-- Google 構造化データ JSON-LD マークアップ -->
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "FAQPage",
    "@id": "statusplan",
    "mainEntity":
    [
    {
      "@type": "Question",
      "name": "入会資格は何歳までですか。",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "男性は59歳まで、女性は42歳までご入会頂けます。"
      }
    },
    {
      "@type": "Question",
      "name": "どれくらいの年齢差が最も多いでしょうか",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "一般的には5～6歳前後の歳の差カップルが最も多いですが、中には10歳以上離れているカップルが誕生される事もございます。様々なお相手とお会いして行く中で、お互いに『この人だ』というお相手をお探し下さい。"
      }
    } ]
  }
  </script>



  <script type="application/ld+json">
    {
      "@context" : "https://schema.org/",
      "@type": "Product",
      "@id": "statusplan",
      "name": "<?php the_title(); ?>",
      "review": {
              "@type": "Review",
              "reviewRating": {
                "@type": "Rating",
                "ratingValue": "4.6",
                "bestRating": "5"
              },
              "author": {
              "@type": "Person",
			  "name": "sincerite_user"
              }
            },
            "aggregateRating": {
              "@type": "AggregateRating",
              "ratingValue": "4.6",
              "reviewCount": "29"
            }
    }
  </script>
<?php endif; ?>



<div class="review-wrap">
  <h2 class="ttl">お客様の声</h2>

<?php if (is_page('dentist')) : ?>

<?php
  for ($i=1; $i<=4; $i++) {
?>
<div class="box">
  <div class="head">
    <div class="star-rating">
      <div class="star-rating-front" style="width: 92%;">★★★★★</div>
      <div class="star-rating-back">★★★★★</div>
    </div>
    <div class="value"><?php the_field('customers_voice_rating'.$i); ?></div>
    <div class="person"><?php the_field('customers_voice_person'.$i); ?></div>
  </div>
  <p class="review"><?php the_field('customers_voice'.$i); ?></p>
  <div class="reply">
    <div class="ttl accordionBtn">口コミへの返信</div>
    <p class="cont" style="display:none;"><?php the_field('customers_voice_reply'.$i); ?></p>
  </div>
</div>
<?php
  }
?>

<?php else: ?>

  <div class="box">
    <div class="head">
      <div class="star-rating">
        <div class="star-rating-front" style="width: 92%;">★★★★★</div>
        <div class="star-rating-back">★★★★★</div>
      </div>
      <div class="value">4.6</div>
      <div class="person">30代女性</div>
    </div>
    <p class="review">沢山ある結婚相談所の中でもこちらのサンセリテが１番だなと感じました。数年間にわたり何社か入会し婚活をしてきましたが、結婚に至るまでのお付き合いは出来ずのくりかえしていました。カウンセラーさんは親身で尚且つ現実的で客観的にプロのアドバイスをしてくださいます。やはり実績が豊富だからか信頼できます。本当に最初から最後までお世話になりました。おかげで成婚に繋がり、今は幸せです！</p>
    <div class="reply">
      <div class="ttl accordionBtn">口コミへの返信</div>
      <p class="cont" style="display:none;">レビューを頂き誠にありがとうございます。カウンセラーのアドバイスに耳を傾けていただき、柔軟に自分を変えていけることが結婚への近道だと感じております。</p>
    </div>
  </div>

  <div class="box">
    <div class="head">
      <div class="star-rating">
        <div class="star-rating-front" style="width: 93%;">★★★★★</div>
        <div class="star-rating-back">★★★★★</div>
      </div>
      <div class="value">4.7</div>
      <div class="person">30代女性</div>
    </div>
    <p class="review">結婚相談所に行くのって勇気がいるし、私もずっと踏みだせずにいました。少々お高いのですが．．．結果サンセリテに入会して私は良かったと思っています。しっかりプライバシーにも配慮してくれているし、カウンセラーさんが気さくでいい人で安心できます。自分が意識していなかった点にも気がついてくれて、アドバイスをしてくれました。幸いにもたった数回通っただけで良い人と巡り合い、順調に話が進んでいます。勇気をだして結婚相談所にきて本当によかったです。</p>
    <div class="reply">
      <div class="ttl accordionBtn">口コミへの返信</div>
      <p class="cont" style="display:none;">レビューを頂き誠にありがとうございます。最初の一歩が最も大切なので、ご活動頂けて本当に良かったです。このままご成婚までお世話させて頂きますのでどうぞ宜しくお願い致します。</p>
    </div>
  </div>

  <div class="box">
    <div class="head">
      <div class="star-rating">
        <div class="star-rating-front" style="width: 91%;">★★★★★</div>
        <div class="star-rating-back">★★★★★</div>
      </div>
      <div class="value">4.5</div>
      <div class="person">20代女性</div>
    </div>
    <p class="review">高収入、高学歴の男性が揃っている結婚相談所。実績もあるという理由で勇気をだして行ったところ、確かに細かく希望も聞いてくれるし、何より誠実で仕事に前向きな方と多く出会う事が出来て、色んな面で私のモチベーションを上げてくれてます。しばらくはこちらのサンセリテで婚活をしてみようかと思っています。今後ともよろしくお願いします。</p>
    <div class="reply">
      <div class="ttl accordionBtn">口コミへの返信</div>
      <p class="cont" style="display:none;">口コミの投稿ありがとうございます。当会にはお仕事に真面目に取り組む素敵な男性が多数在籍しておりますので、良いご縁に恵まれますように精一杯サポートさせて頂きます。</p>
    </div>
  </div>

  <div class="box">
    <div class="head">
      <div class="star-rating">
        <div class="star-rating-front" style="width: 92%;">★★★★★</div>
        <div class="star-rating-back">★★★★★</div>
      </div>
      <div class="value">4.6</div>
      <div class="person">30代女性</div>
    </div>
    <p class="review">30代に突入し初めての結婚相談所ということもあり不安でしたが、そんな不安が嘘だったかのようにスムーズにお見合いをセッティングして頂き、そして成婚に至ることができました。サンセリテのカウンセラーさんはとてもやさしく、とても親身にサポートをして頂き、医者の彼とも出会うことが出来ました。入会から成婚まで約半年かかりましたが、あっというまでした。おかげさまで今では幸せに暮らしています。</p>
    <div class="reply">
      <div class="ttl accordionBtn">口コミへの返信</div>
      <p class="cont" style="display:none;">レビューを頂き誠にありがとうございます。半年間のご自身の努力の成果ですので、末永いお幸せをお祈り致しております。</p>
    </div>
  </div>

<?php endif; ?>

</div>












                        </div>
                    </div>
                    <?php get_sidebar(); ?>

                    <?php
                endwhile;
            else:
                ?>

                <p>ページはありません！</p>

                <?php
            endif;
            ?>

        </div><!-- /main-inner-box -->


    </div><!-- /main-contents -->
    <?php include('map-foott.php'); ?>
<?php get_footer(); ?>
