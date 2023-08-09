<?php
/*
Template Name: faq
*/
?>

<?php get_header('new'); ?>

<!-- Google 構造化データ JSON-LD マークアップ -->
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "FAQPage",
    "@id": "faq",
    "mainEntity":
    [
    {
      "@type": "Question",
      "name": "他の結婚相談所との違いは？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "高ステータス男性に特化した相談所の為、男性は大卒以上、年収700万円以上、非喫煙者の方という業界でもかなり高い入会基準を設定しております。その為、弊社のご紹介で出会う方は全員が入会基準をクリアした高い水準の収入や学歴を有する方々となります。"
      }
    }
    ,
    {
      "@type": "Question",
      "name": "婚活アプリとの違いは？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "アプリの登録の審査とは異なり、実際に面談をして入会審査を実施している点や、ご提出頂く各種証明書の豊富さから、より確かな身元で既婚者が紛れ込む事や、医師や弁護士といった異なる職業を騙る事もない安心の出会いを提供致します。"
      }
    }
    ,
    {
      "@type": "Question",
      "name": "紹介というのは具体的にどうやるの？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "毎月のご紹介は、入会された会員様お一人おひとりに専用の会員ページをご用意致します。専任カウンセラーが面談でお伺いした内容を元にお相手様を選出して、ご紹介としてプロフィールを掲載致します。その中でお会いしてみたいと思う方がいらっしゃったらお申し込みをして頂きます。"
      }
    }
    ,
    {
      "@type": "Question",
      "name": "紹介以外の出会い方はありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "男女それぞれに異性のプロフィールをご紹介していますので、お相手よりお申し込みが入る事があるかもしれません。お申し込みは紹介人数のカウントに含まれませんので、もしお会いしてもいいなと思える方なら是非OKされて下さい。全国ネットワークの連盟のシステム利用も可能なのでご自由に検索してお申し込みもできます。"
      }
    }
    ,
    {
      "@type": "Question",
      "name": "専任カウンセラーは何をしてくれるの？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "お見合いの申し込みの取次や成立したお見合いの日程・場所の調整、お見合い後のフィードバックや交際中のお悩み相談など、会員様お1人おひとりの活動をサポートをいたします。なんでも頼って頂きたいと思います。"
      }
    }
  ]
}
</script>


<div class="hero__heading">
    <div class="intro-heading">
        <div class="container-1280">
            <h1 class="heading-secondary">
                FAQ
                <span class="heading-secondary-sm">よくあるご質問</span>
            </h1>
        </div>
    </div>
</div>

<div class="breadcrumb">
    <div class="container-1280">
        <ul class="breadcrumb-ul">
            <li class="breadcrumb-li">
                <a href="<?php echo get_site_url(); ?>/" class="breadcrumb-link -home">HOME</a>
            </li>
            <li class="breadcrumb-li">
                <a href="#" class="breadcrumb-link -active">よくあるご質問</a>
            </li>
        </ul>
    </div>
</div>


<main id="main" class="main">
    <div class="faq-page">
        <div class="intro-nav">
            <div class="container-1280">
                <div class="intro-nav__nav">
                    <a href="#cat01" class="intro-nav__nav-link">
                        <span><?php $myfield = scf::get('質問カテゴリ1'); echo $myfield; ?></span>

                    </a>
                    <a href="#cat02" class="intro-nav__nav-link -mid">
                        <span><?php $myfield = scf::get('質問カテゴリ2'); echo $myfield; ?></span>
                    </a>
                    <a href="#cat03" class="intro-nav__nav-link -mid">
                        <span><?php $myfield = scf::get('質問カテゴリ3'); echo $myfield; ?></span>
                    </a>
                    <a href="#cat04" class="intro-nav__nav-link">
                        <span><?php $myfield = scf::get('質問カテゴリ4'); echo $myfield; ?></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- FAQ -->
        <div class="faq">
            <div class="faq-page__color" id="cat01">
                <h3 class="faq-page__ttl"><?php $myfield = scf::get('質問カテゴリ1'); echo $myfield; ?></h3>
                <div class="container-1280">
                    
                    
                    <div class="faq__box">
                       <?php $group_set = SCF::get( '質問カテゴリ1グループ' );	foreach ( $group_set as $field_name => $field_value ) {	?>
                        <div class="faq__question">
                            <div class="faq__heading-wpr acc-btn">
                                <h4 class="faq__heading">
                                    <span class="faq__icon">Q</span>
                                    <span><?php echo nl2br( $field_value['質問カテゴリ1 質問'] ); ?></span>
                                </h4>
                                <span></span>
                            </div>

                            <div class="faq__answer-wpr">
                                <p class="faq__answer">
                                    <span class="faq__icon">A</span>
                                    <span class="faq__text">
                                        <?php echo nl2br( $field_value['質問カテゴリ1 回答'] ); ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="faq-page__color -wh" id="cat02">
                <h3 class="faq-page__ttl"><?php $myfield = scf::get('質問カテゴリ2'); echo $myfield; ?></h3>
                <div class="container-1280">
                    
                    
                    <div class="faq__box">
                       <?php $group_set = SCF::get( '質問カテゴリ2グループ' );	foreach ( $group_set as $field_name => $field_value ) {	?>
                        <div class="faq__question">
                            <div class="faq__heading-wpr acc-btn">
                                <h4 class="faq__heading">
                                    <span class="faq__icon">Q</span>
                                    <span><?php echo nl2br( $field_value['質問カテゴリ2 質問'] ); ?></span>
                                </h4>
                                <span></span>
                            </div>

                            <div class="faq__answer-wpr">
                                <p class="faq__answer">
                                    <span class="faq__icon">A</span>
                                    <span class="faq__text">
                                        <?php echo nl2br( $field_value['質問カテゴリ2 回答'] ); ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="faq-page__color" id="cat03">
                <h3 class="faq-page__ttl"><?php $myfield = scf::get('質問カテゴリ3'); echo $myfield; ?></h3>
                <div class="container-1280">
                    
                    
                    <div class="faq__box">
                       <?php $group_set = SCF::get( '質問カテゴリ3グループ' );	foreach ( $group_set as $field_name => $field_value ) {	?>
                        <div class="faq__question">
                            <div class="faq__heading-wpr acc-btn">
                                <h4 class="faq__heading">
                                    <span class="faq__icon">Q</span>
                                    <span><?php echo nl2br( $field_value['質問カテゴリ3 質問'] ); ?></span>
                                </h4>
                                <span></span>
                            </div>

                            <div class="faq__answer-wpr">
                                <p class="faq__answer">
                                    <span class="faq__icon">A</span>
                                    <span class="faq__text">
                                        <?php echo nl2br( $field_value['質問カテゴリ3 回答'] ); ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
         
            <div class="faq-page__color -wh" id="cat04">
                <h3 class="faq-page__ttl"><?php $myfield = scf::get('質問カテゴリ4'); echo $myfield; ?></h3>
                <div class="container-1280">
                    
                    
                    <div class="faq__box">
                       <?php $group_set = SCF::get( '質問カテゴリ4グループ' );	foreach ( $group_set as $field_name => $field_value ) {	?>
                        <div class="faq__question">
                            <div class="faq__heading-wpr acc-btn">
                                <h4 class="faq__heading">
                                    <span class="faq__icon">Q</span>
                                    <span><?php echo nl2br( $field_value['質問カテゴリ4 質問'] ); ?></span>
                                </h4>
                                <span></span>
                            </div>

                            <div class="faq__answer-wpr">
                                <p class="faq__answer">
                                    <span class="faq__icon">A</span>
                                    <span class="faq__text">
                                        <?php echo nl2br( $field_value['質問カテゴリ4 回答'] ); ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn__home">
            <a href="../" class="btn__home-link">TOPページへ戻る</a>
        </div>
    </div>

</main>

<?php get_footer('new'); ?>
