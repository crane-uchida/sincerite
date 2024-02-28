<?php
/*
Template Name: faq
*/
?>

<?php get_header('new'); ?>



<div class="hero__heading newttl">
    <div class="intro-heading">
        <div class="container-1280">
            <h1 class="heading-secondary">
                よくあるご質問
                <span class="heading-secondary-sm">FAQ</span>
            </h1>
        </div>
    </div>
</div>

<div class="breadcrumb">
    <div class="container-1280">
        <div class="breadcrumb-content">
            <ul class="breadcrumb-ul">
                <li class="breadcrumb-li">
                    <a href="<?php echo get_site_url(); ?>/" class="breadcrumb-link">東京・表参道の結婚相談所 サンセリテ青山</a>
                </li>
                <li class="breadcrumb-li">
                    <a href="#" class="breadcrumb-link -active">よくあるご質問</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<main id="main" class="main">
    <div class="faq-page">
        <div class="intro-nav">
            <div class="container-1280">
                <div class="intro-nav__nav -four -padding">
                    <a href="#cat01" class="intro-nav__nav-link">
                        <span><?php $myfield = scf::get('質問カテゴリ1');
                                echo $myfield; ?></span>

                    </a>
                    <a href="#cat02" class="intro-nav__nav-link -bad">
                        <span><?php $myfield = scf::get('質問カテゴリ2');
                                echo $myfield; ?></span>
                    </a>
                    <a href="#cat03" class="intro-nav__nav-link">
                        <span><?php $myfield = scf::get('質問カテゴリ3');
                                echo $myfield; ?></span>
                    </a>
                    <a href="#cat04" class="intro-nav__nav-link -bad">
                        <span><?php $myfield = scf::get('質問カテゴリ4');
                                echo $myfield; ?></span>
                    </a>
                </div>
            </div>
        </div>


        <!-- FAQ -->
        <div class="faq">
            <div class="faq-page__color" id="cat01">
                <h3 class="faq-page__ttl"><?php $myfield = scf::get('質問カテゴリ1');
                                            echo $myfield; ?></h3>
                <div class="container-1280">


                    <div class="faq__box">
                        <?php $group_set = SCF::get('質問カテゴリ1グループ');
                        foreach ($group_set as $field_name => $field_value) {    ?>
                            <div class="faq__question">
                                <div class="faq__heading-wpr acc-btn">
                                    <h4 class="faq__heading">
                                        <span class="faq__icon">Q</span>
                                        <span><?php echo nl2br($field_value['質問カテゴリ1 質問']); ?></span>
                                    </h4>
                                    <span></span>
                                </div>

                                <div class="faq__answer-wpr">
                                    <p class="faq__answer">
                                        <span class="faq__icon">A</span>
                                        <span class="faq__text">
                                            <?php echo nl2br($field_value['質問カテゴリ1 回答']); ?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="faq-page__color -wh" id="cat02">
                <h3 class="faq-page__ttl"><?php $myfield = scf::get('質問カテゴリ2');
                                            echo $myfield; ?></h3>
                <div class="container-1280">


                    <div class="faq__box">
                        <?php $group_set = SCF::get('質問カテゴリ2グループ');
                        foreach ($group_set as $field_name => $field_value) {    ?>
                            <div class="faq__question">
                                <div class="faq__heading-wpr acc-btn">
                                    <h4 class="faq__heading">
                                        <span class="faq__icon">Q</span>
                                        <span><?php echo nl2br($field_value['質問カテゴリ2 質問']); ?></span>
                                    </h4>
                                    <span></span>
                                </div>

                                <div class="faq__answer-wpr">
                                    <p class="faq__answer">
                                        <span class="faq__icon">A</span>
                                        <span class="faq__text">
                                            <?php echo nl2br($field_value['質問カテゴリ2 回答']); ?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="faq-page__color" id="cat03">
                <h3 class="faq-page__ttl"><?php $myfield = scf::get('質問カテゴリ3');
                                            echo $myfield; ?></h3>
                <div class="container-1280">


                    <div class="faq__box">
                        <?php $group_set = SCF::get('質問カテゴリ3グループ');
                        foreach ($group_set as $field_name => $field_value) {    ?>
                            <div class="faq__question">
                                <div class="faq__heading-wpr acc-btn">
                                    <h4 class="faq__heading">
                                        <span class="faq__icon">Q</span>
                                        <span><?php echo nl2br($field_value['質問カテゴリ3 質問']); ?></span>
                                    </h4>
                                    <span></span>
                                </div>

                                <div class="faq__answer-wpr">
                                    <p class="faq__answer">
                                        <span class="faq__icon">A</span>
                                        <span class="faq__text">
                                            <?php echo nl2br($field_value['質問カテゴリ3 回答']); ?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="faq-page__color -wh" id="cat04">
                <h3 class="faq-page__ttl"><?php $myfield = scf::get('質問カテゴリ4');
                                            echo $myfield; ?></h3>
                <div class="container-1280">


                    <div class="faq__box">
                        <?php $group_set = SCF::get('質問カテゴリ4グループ');
                        foreach ($group_set as $field_name => $field_value) {    ?>
                            <div class="faq__question">
                                <div class="faq__heading-wpr acc-btn">
                                    <h4 class="faq__heading">
                                        <span class="faq__icon">Q</span>
                                        <span><?php echo nl2br($field_value['質問カテゴリ4 質問']); ?></span>
                                    </h4>
                                    <span></span>
                                </div>

                                <div class="faq__answer-wpr">
                                    <p class="faq__answer">
                                        <span class="faq__icon">A</span>
                                        <span class="faq__text">
                                            <?php echo nl2br($field_value['質問カテゴリ4 回答']); ?>
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