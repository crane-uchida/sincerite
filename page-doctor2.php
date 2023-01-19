<?php
/*
Template Name: doctor
*/
?>

<?php get_header(); ?>

<link media='(min-width: 641px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/doctor.css"
      rel="stylesheet">
<link media='(max-width: 640px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/sp_doctor.css"
      rel="stylesheet">

<!-- Google 構造化データ JSON-LD マークアップ -->
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "理想とするポイントがいくつかありますが、希望の女性と出会う事は可能ですか",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "面談で希望条件をお伺いし、在籍している会員の中からご希望のお相手や、カウンセラーお勧めの素敵だと思える方をご紹介致します。まずは積極的にお申込みください。"
            }
        },
        {
            "@type": "Question",
            "name": "どれくらいの年齢差が最も多いでしょうか",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "一般的には5～6歳前後の歳の差カップルが最も多いですが、中には10歳以上離れているカップルが誕生される事もございます。様々なお相手とお会いして行く中で、お互いに『この人だ』というお相手をお探し下さい。"
            }
        },
        {
            "@type": "Question",
            "name": "女性会員はどんなご職業の方が在籍していますか",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "メガバンクにお勤めの銀行員や外資系企業にお勤めの会社員、その他IT系や公務員、医療系など様々です。"
            }
        },
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
            "name": "まだ研修医なのですが入会は可能ですか。",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "当会では研修医の方も活動をサポート致します。まずはお気軽にお問い合わせ下さい。"
            }
        },
        {
            "@type": "Question",
            "name": "男性ではどんな職業の方が在籍していますか。",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "医師や弁護士といった士業をはじめ、外資系金融会社勤務の会社員やIT企業勤務の会社員、経営者や教授といった高収入、高ステータスな方々が在籍しています。"
            }
        }
    ]
}
</script>
<?php /* ?>
<script type="application/ld+json">
  {
    "@context" : "https://schema.org/",
    "@type": "store",
    "name": "医師",
    "image": "https://www.club-sincerite.co.jp/wp-content/themes/sincerite/images/doctor/topbanner.jpg",
    "AggregateRating":{
      "@type":"AggregateRating",
      "ratingCount":"5",
      "ratingValue":"4.6"
    }
  }
</script>
<?php */ ?>

<section class="breadcrumb">
    <div class="flow"><a href="<?php echo get_site_url(); ?>" class="toppage">結婚相談所 サンセリテ青山</a>　>　ステータスプラン</div>
</section>
<section class="topsection">
    <div class="topbanner">
    </div>
    <div class="textsec">
        <span class="ttl">医者の結婚・お見合いなら、<br class="sp">サンセリテ青山</span>
        <span class="desc">サンセリテ青山は設立から15年以上に渡って、社会的ステータスをお持ちの男性会員に特化した結婚相談所として多数の会員様をお見合い・成婚に導いてまいりました。<br class="pc">
            中でもお医者様との出会い・お見合い・結婚については多くの女性会員様よりご要望をいただき、男性会員数・成婚ともに多くの実績を誇ります。男性会員を厳選した会員組織だからこそ医者を職業とした方が多くご入会されています。
        </span>
    </div>
</section>
<section class="reason">
    <div class="reasoncont">
        <div class="image"><img class="reasonimg"
                 src="<?php echo get_template_directory_uri() ?>/images/doctor/reasonimg.jpg"></div>
        <div class="reason-text">
            <h2 class="text-ttl">サンセリテ青山が<br>
                医者の結婚、医者との結婚に<br>
                強い理由。</h2>
            <div class="text-desc">
                サンセリテ青山は設立から15年以上に渡って、お医者様のご成婚に多く携わってきました。開業時から医者の男性の方には完全成果報酬型でご入会を案内しており、研修医師の方に対しても当社の「ドクターズ・プレミアム」の告知によりご入会いただいています。
                <br><br>
                地道な活動によりお医者様の会員数もクチコミで広がり、そこからサンセリテ青山で活動して成婚になった会員様から多くのお医者様のご紹介を頂く流れとなりました。医者というお忙しい職業だからこそ、お相手を早く選び幸せな家庭を持ちたいという声もたくさん頂いております。
                <br><br>
                サンセリテ青山では女性会員様からお医者様を希望する声が多く非常に多く、お見合い・ご成婚へ至った実績も豊富です。理想の相手をしっかりとお選びできるようにカウンセラーも誠心誠意フォローさせて頂きますので是非お気軽にご来店下さい。
            </div>
        </div>
    </div>
</section>
<section class="price">
    <div class="pricecont">
        <div class="ttlcont-sp sp">
            <div class="boxline"></div>
            <h2 class="topttl">
                自信と実績に裏打ちされた完全成果報酬型
            </h2>
        </div>
        <h2 class="topttl pc">
            自信と実績に裏打ちされた完全成果報酬型
        </h2>
        <div class="feecont">
            <div class="left">
                <div class="leftcont">
                    <span class="texttop">入会金</span>
                    <span class="priceline-anmt"></span>
                    <span class="textbtm">月額活動費</span>
                </div>
            </div>
            <div class="right">
                <span class="text1">¥</span><span class="text2">0</span>
            </div>
        </div>
        <div class="pricedesc sp">お見合いの成立・ご成婚時のみ料金が発生いたします。</div>
    </div>
    <div class="pricebox">
        <div class="leftbox">
            <span class="boxttl">
                お見合いアレンジメント料
            </span>
            <span class="boxsubttl">
                お見合いが成立すると発生する費用です
            </span>
            <span class="boxprice">
                ¥10,000
            </span>
        </div>
        <span class="priceline"></span>
        <div class="rightbox">
            <span class="boxttl">
                ご成婚料
            </span>
            <span class="boxsubttl">
                ご結婚が成立すると発生する費用です
            </span>
            <span class="boxprice">
                ¥400,000
            </span>
        </div>
    </div>
    <span class="subnote">※上記金額には消費税が含まれております。 ※交際成立時の費用は不要です。</span>
    <a class="applybttn" href="<?php echo get_site_url(); ?>/form01/">
        <span class="bttntext">あなたの理想の相手をご紹介。<br class="sp">初回無料カウンセリングに申し込む。</span>
        <span class="bttnicon"></span>
    </a>
</section>
<section class="qualification">
    <div class="textcont">
        <h2 class="topttl">
            サンセリテ青山の男性入会資格
        </h2>
        <div class="desc">
            サンセリテ青山は高収入・エリート男性に特化した結婚相談所としてご好評をいただいてまいりました。<br>
            男性のご入会には原則年収700万円以上、安定したご職業という審査基準を設けさせていただいておりますので、予めご了承ください。
        </div>
    </div>
    <div class="info">
      <a href="#media-popup" data-media="https://www.youtube.com/embed/DqN1TYa1blk" target="_blank">
        <img class="infoimg" src="<?php echo get_template_directory_uri() ?>/images/frontpage/richmarriage.jpg" class="media-capture-img">
      </a>
        <div class="infocont">
            <span class="toptext">本会の趣旨を理解し、会員規約及びその他の運営規則を遵守することに同意される方で、<br class="pc">
                所定の入会申込書により申込みを行い、次の各号のすべてに該当し、当社が審査の上、承認した方。</span>
            <div class="btmtext">
                <span class="textlist">年収700万円以上</span>
                <span class="textlist">安定した、社会的地位の高い職業にお就きの方</span>
                <span class="textlist">大学卒以上の方</span>
                <span class="textlist">満年齢25歳以上59歳未満の方</span>
                <span class="textlist">喫煙しない、もしくは結婚を機にやめる意志のある方</span>
                <span class="textlist">結婚について誠実にお考えの独身の方</span>
            </div>
        </div>
    </div>
    <div class="maincont">
        <div class="toptext">サンセリテ青山の男性会員様は、以下のようなご職業の方に多くご登録いただいております。</div>
        <div class="imgcont">
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/doctor/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner1.jpg">
                <span class="text">医者</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/dentist/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner2.jpg">
                <span class="text">歯科医師</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/president/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner3.jpg">
                <span class="text">会社経営者</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/lawyer/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner4.jpg">
                <span class="text">弁護士</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/pilot/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner5.jpg">
                <span class="text">パイロット</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/accountant/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner6.jpg">
                <span class="text">公認会計士</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/judicial/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner7.jpg">
                <span class="text">司法書士</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/architect/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner8.jpg">
                <span class="text">一級建築士</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/professor/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner9.jpg">
                <span class="text">大学教授</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/servant/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner10.jpg">
                <span class="text">国家公務員Ⅰ種</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/trading/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner11.jpg">
                <span class="text">大手商社勤務</span>
            </a>
            <a class="imgbox" href="<?php echo get_site_url(); ?>/statusplan2/advertising/">
                <img src="<?php echo get_template_directory_uri() ?>/images/statusplan/partner12.jpg">
                <span class="text">大手広告代理店勤務</span>
            </a>
        </div>
        <div class="btmtext">
            内科医、外科医、脳外科医、形成外科医、心臓外科医、心療内科医、整形外科医、精神科医、眼科医、小児科医、獣医、病院院長、開業医、研修医、薬剤師、臨床心理士、社長、会社役員、実業家、投資家、MBA取得者、外資系、銀行員、銀行マン、コンサルタント、住職
            官僚、議員、政治家、外交官、官公庁、裁判官、検事、教授、学者、操縦士、消防士、レーサー、有名人、芸能人、タレント、俳優、芸人、スポーツ選手、TV業界、プロデューサー、記者、作家、音楽家、作詞家、歌手、デザイナー、etc
        </div>

    </div>
</section>

<section class="consult">
    <h2 class="topttl">
        こんなお医者様にご相談・<br class="sp">ご入会いただいています
    </h2>
    <div class="consultcont">
        <div class="image"><img class="consultimg"
                 src="<?php echo get_template_directory_uri() ?>/images/doctor/consultimg.jpg"></div>
        <div class="consult-text">
            <div class="textinfo">
                <div class="icon"></div>
                <div class="text">診察や学会に追われ、女性と知り合う機会がない</div>
            </div>
            <div class="textinfo">
                <div class="icon"></div>
                <div class="text">職場の女性とは恋愛関係になりたくない</div>
            </div>
            <div class="textinfo">
                <div class="icon"></div>
                <div class="text">医者という不規則な仕事に理解のある女性がよい</div>
            </div>
            <div class="textinfo">
                <div class="icon"></div>
                <div class="text">家庭を任せられる、懐の広い女性がよい</div>
            </div>
            <div class="textinfo">
                <div class="icon"></div>
                <div class="text">お金や子供の教育に対する価値観がある方がよい</div>
            </div>
            <div class="textinfo">
                <div class="icon"></div>
                <div class="text">これまで恋愛してこなかったので、サポートしてほしい</div>
            </div>
            <div class="textinfo">
                <div class="icon"></div>
                <div class="text">自分の見た目や、服装に自身がない</div>
            </div>
        </div>
    </div>
    <div class="consult-desc">サンセリテ青山では、専任カウンセラーによる無料婚活カウンセリングを実施しております。<br class="pc">
        上記のようなお医者様ならではのお悩みやご希望、また恋愛や女性とのコミニュケーションに自信がない方へのアドバイス、そしてご紹介できるお相手の参考リストなど、お客様にとっての結婚・婚活のイメージを固めるような場をご提供したいと考えています。カウンセリングは無料です。オンラインでも承りますので、ぜひお気軽にご相談ください。
    </div>
    <a class="applybttn" href="<?php echo get_site_url(); ?>/form01/">
        <span class="bttntext">あなたの理想の相手をご紹介。<br class="sp">初回無料カウンセリングに申し込む。</span>
        <span class="bttnicon"></span>
    </a>
</section>
<section class="counselor">
    <div class="counselorcont">
        <div class="image"><img class="counselorimg"
                 src="<?php echo get_template_directory_uri() ?>/images/doctor/counselorimg.jpg"></div>
        <div class="counselor-text">
            <div class="ttlcont">
                <h2 class="top-ttl">サンセリテ青山 チーフカウンセラー川部より</h2>
                <div class="btm-ttl">お医者様と結婚したい女性の方へ<br>
                    ワンポイントアドバイス</div>
            </div>
            <div class="text-desc">
                お医者様との出逢い・結婚をご希望になる女性会員の方はとても多くいらっしゃいます。ほぼすべての方、と言っても過言ではありません。かと言って、職場結婚でもない限り、日常生活で医者と出会う確率はほとんどないのが現状です。<br>
                一般の女性が医者と出会うには、医師が多く出席するお見合いパーティーに参加するのが一番です。サンセリテではパーティーごとに多くのお医者様に参加申し込みをいただいており、たいへんな盛り上がりをみせています。実は、一般の女性とプライベートで話す機会がないのはお医者様も一緒なんですよ。<br>
                お医者様はお好きな女性のタイプとして「家庭的な女性」をあげられる方が多いです。医師の勤務形態は過酷で、夜勤や当直、残業が沢山ありますから、自宅に帰り、身体のことを考えたバランスのとれた料理を作ってくれる奥様を求めるのは当然なのかもしれません。<br>
                他にもお伝えできることがたくさんございます。ぜひ一度、サンセリテ青山の無料来店カウンセリングにお越しくださいませ。　
            </div>
        </div>
    </div>
</section>
<section class="charm">
    <div class="charmbox">
        <img class="charmimg" src="<?php echo get_template_directory_uri() ?>/images/statusplan/charm1.jpg">
        <div class="charmcont">
            <span class="charmrank">サンセリテ青山の魅力 #1</span>
            <span class="charmttl">徹底したプライバシー管理</span>
            <div class="btmtext">
                一般的な職業に増して、名前が知れ渡ることを懸念されるステータス職にお就きの方の環境に配慮し、完全ハンドメイドのご紹介で、個人情報を徹底的に保護させていただきます。
            </div>
        </div>
    </div>
    <div class="charmbox">
        <img class="charmimg" src="<?php echo get_template_directory_uri() ?>/images/statusplan/charm2.jpg">
        <div class="charmcont">
            <span class="charmrank">サンセリテ青山の魅力 #2</span>
            <span class="charmttl">早期成婚を目指したシステム</span>
            <div class="btmtext">
                欧米への海外赴任が決まり、日本を発つ前にパートナーを見つけたい方を含め、とにかくお忙しい毎日を送る会員のご要望にお応えしたいと、可能な限り早く『ご成婚』へ至れるよう配慮した、複数の出逢いのシステムをご用意しております。
            </div>
        </div>
    </div>
    <div class="charmbox">
        <img class="charmimg" src="<?php echo get_template_directory_uri() ?>/images/statusplan/charm3.jpg">
        <div class="charmcont">
            <span class="charmrank">サンセリテ青山の魅力 #3</span>
            <span class="charmttl">専任カウンセラーシステム</span>
            <div class="btmtext">
                サンセリテ青山では会員様1人ひとりに専任カウンセラーがつきます。あなたの細かい要望を伺い、さまざまな観点から理想に近いお相手をお探しします。ご自身ではなかなか表現できないような長所や魅力を見つけ、お相手にお伝えできることも専任カウンセラーならではの強み。人と人とが出逢うのは人を介しての紹介が1番まとまりやすいことはインターネットが普及した今でも変わっていません。大事な結婚相手をお探しするには専任カウンセラーの存在はとても重要だと当社は考えています。
            </div>
        </div>
    </div>
    <div class="charmbox">
        <img class="charmimg" src="<?php echo get_template_directory_uri() ?>/images/statusplan/charm4.jpg">
        <div class="charmcont">
            <span class="charmrank">サンセリテ青山の魅力 #4</span>
            <span class="charmttl">会員検索・パーティーへの参加</span>
            <div class="btmtext">
                日々のお仕事が忙しい会員様のために、自宅で会員検索ができる仕組みを構築しています。プロフィールだけではなかなか伝わらない情報もカウンセラーにお問い合わせ頂ければお答えいたします。
                また年に数回開催されるパーティーへ参加されることにより一度に10人以上の方と出逢いのチャンスを作ることができます。サンセリテ青山のパーティーは雰囲気や場所にこだわっています。是非一度当社のパーティーレポートをご覧下さい。当社のパーティーのマッチング比率はとても高くご好評頂いております。

            </div>

        </div>
    </div>
    <div class="charmbox">
        <img class="charmimg" src="<?php echo get_template_directory_uri() ?>/images/statusplan/charm5.jpg">
        <div class="charmcont">
            <span class="charmrank">サンセリテ青山の魅力 #5</span>
            <span class="charmttl">お見合いから成婚までのアドバイス</span>
            <div class="btmtext">
                お見合い成立後、お付き合いできれば終了ではありません。サンセリテ青山では交際中や成婚に至るまで、継続してアドバイスをさせて頂きます。交際中は相手に聞きづらい点もカウンセラーを通して聞くことでスムーズに交際できるという利点があります。時間は有限ですので、結婚へ向けて出来るだけ早く交際・成婚に繋がるように全力でサポートさせて頂きます。もちろん、あまり口を出されたくないという方には無理に入ってくることはございませんのでご安心下さい。
            </div>
        </div>
    </div>
    <div class="charmbox">
        <img class="charmimg" src="<?php echo get_template_directory_uri() ?>/images/statusplan/charm6.jpg">
        <div class="charmcont">
            <span class="charmrank">サンセリテ青山の魅力 #6</span>
            <span class="charmttl">会員期限の設定なし</span>
            <div class="btmtext">
                ステータスプランの会員様には基本的に会員期間は設けておりません。結婚を真剣に考えている皆様なので、出来るだけ早く大事な結婚相手をお探しすることが当社の使命だと考えています。会員様の貴重な時間を有意義に使って頂ける様にサンセリテ青山はサポートします。
            </div>
        </div>
    </div>
    <a class="applybttn charmsec" href="<?php echo get_site_url(); ?>/form01/">
        <span class="bttntext">あなたの理想の相手をご紹介。<br class="sp">初回無料カウンセリングに申し込む。</span>
        <span class="bttnicon"></span>
    </a>
    <div class="toparticle">
        <div class="articlebox">
            <a href="<?php echo get_site_url(); ?>/form06/"> </a>
            <img class="smallimg" src="<?php echo get_template_directory_uri() ?>/images/frontpage/toparticle1.jpg">
            <div class="articledesc">2分程度の診断で<br>
                未来のセレブパートナーを
                簡単チェック！</div>
        </div>
        <div class="articlebox">
            <a href="<?php echo get_site_url(); ?>/online/"></a>
            <img class="smallimg" src="<?php echo get_template_directory_uri() ?>/images/frontpage/toparticle2.jpg">
            <div class="articledesc">ご自宅から安心・簡単。<br>
                オンラインカウンセリング
                大好評受付中です。</div>
        </div>
    </div>
</section>

<section class="voice">

    <h2 class="topttl">
        サンセリテ青山で活動された会員様より<br class="sp">喜びの声をいただいています。
    </h2>

    <div class="voice-cont">
        <div class="voice-box">
            <div class="topbox">
                <div class="star-rating">
                    <div class="star-rating-front" style="width: 92%;">★★★★★</div>
                    <div class="star-rating-back">★★★★★</div>
                </div>
                <div class="value">4.6</div>
                <div class="person">40代男性</div>
            </div>
            <div class="midbox">
                <p>医師の事情についてよく理解頂けている相談所。お見合いが決まっている時に発生した急な手術の際には、相談したところすぐにお相手に事情を説明してくださり再度日程を調整して頂けました。その時の出会いが今の成婚に繋がりました。</p>
            </div>
            <div class="replybox">
                <div class="replyshow">
                    <span class="text">口コミへの返信</span>
                    <span class="icon"></span>
                </div>
                <div class="replycont">
                    <p class="replytext">レビュー頂きありがとうございました。これまでに多くのお医者様の出会いをサポートしてきたからこそ手の届くサービスを提供できてとても嬉しく存じます。お二人の末永いお幸せを願っております。</p>
                </div>
            </div>
        </div>
        <div class="voice-box">
            <div class="topbox">
                <div class="star-rating">
                    <div class="star-rating-front" style="width: 88%;">★★★★★</div>
                    <div class="star-rating-back">★★★★★</div>
                </div>
                <div class="value">4.4</div>
                <div class="person">50代男性</div>
            </div>
            <div class="midbox">
                <p>ハイクラスの結婚相談所。お見合いの日程調整等、ある程度カウンセラーに丸投げできたこともあり、相手と調整を繰り返すという手間を省けてスムーズに活動できた。綺麗で聡明な方を紹介してくれた。</p>
            </div>
            <div class="replybox">
                <div class="replyshow">
                    <span class="text">口コミへの返信</span>
                    <span class="icon"></span>
                </div>
                <div class="replycont">
                    <p class="replytext">レビューありがとうございました。お一人お一人に選任のカウンセラーが担当してご紹介からお見合いの調整、交際中のサポートも行いますので多忙なお医者様でも効率よく活動できますように精進致します。</p>
                </div>
            </div>
        </div>
        <div class="voice-box">
            <div class="topbox">
                <div class="star-rating">
                    <div class="star-rating-front" style="width: 90%;">★★★★★</div>
                    <div class="star-rating-back">★★★★★</div>
                </div>
                <div class="value">4.5</div>
                <div class="person">30代男性</div>
            </div>
            <div class="midbox">
                <p>仕事中は気にせず問診しているのですが恋愛経験に乏しく、割と緊張しいなので女性とのお見合いではなかなか自然体で話すという事ができないと思っていました。担当カウンセラーさんがお見合いの時にどんな話題を出すと良いか、どこに気を使っておくべきかをアドバイス下さったのはとても助かりました。</p>
            </div>
            <div class="replybox">
                <div class="replyshow">
                    <span class="text">口コミへの返信</span>
                    <span class="icon"></span>
                </div>
                <div class="replycont">
                    <p class="replytext">レビューありがとうございました。経験豊富なベテランカウンセラーが魅力を引き出す為にお力になれますようアドバイス致します。何でもご相談ください。</p>
                </div>
            </div>
        </div>
        <div class="voice-box">
            <div class="topbox">
                <div class="star-rating">
                    <div class="star-rating-front" style="width: 90%;">★★★★★</div>
                    <div class="star-rating-back">★★★★★</div>
                </div>
                <div class="value">4.5</div>
                <div class="person">40代男性</div>
            </div>
            <div class="midbox">
                <p>40を過ぎた医師ですが、仕事が忙しく出会いもまったくなく、自分のキャリアを活かしつつ多くの女性と出会えそうなこちらにお伺いしました。高級志向を謳っているだけあり、女性もみなお綺麗な方ばかりでとても贅沢な気分でした。良い出会いができ、本当に感謝しています。
                </p>
            </div>
            <div class="replybox">
                <div class="replyshow">
                    <span class="text">口コミへの返信</span>
                    <span class="icon"></span>
                </div>
                <div class="replycont">
                    <p class="replytext">
                        レビューを頂き誠にありがとうございます。女性会員の皆様も、入会にあたって自分磨きをしていらっしゃいます。良いご縁をお届けすることができ、スタッフ一同大変うれしく感じております。
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="qna">
    <h2 class="qnattl">よくある質問</h2>
    <div class="qnacont">
        <div class="quesbox">
            <div class="qlogo"></div>
            <span class="qtext">在籍する医者の数を教えてください。</span>
            <div class="qicon"></div>
        </div>
        <div class="ansbox">
            <div class="alogo"></div>
            <span class="anstext">現在(2020.12月時点)およそ合計60名以上の医師、歯科医師が在籍しております。
            </span>
            <div class="aicon-dummy"></div>
        </div>
    </div>
    <div class="qnacont">
        <div class="quesbox">
            <div class="qlogo"></div>
            <span class="qtext">勤務医として働いていますが、勤め先の病院は知られませんか？ 同じ職場の方とは会いませんか？</span>
            <div class="qicon"></div>
        </div>
        <div class="ansbox">
            <div class="alogo"></div>
            <span class="anstext">万が一同じお勤め先の会員様がいらっしゃった場合はお互いにお知らせする事はなく、ご紹介する事も控えさせて頂きます。またお勤め先をお相手へお伝えする事はございません。
            </span>
            <div class="aicon-dummy"></div>
        </div>
    </div>
    <div class="qnacont">
        <div class="quesbox">
            <div class="qlogo"></div>
            <span class="qtext">
                男性ではどんな職業の方が在籍していますか</span>
            <div class="qicon"></div>
        </div>
        <div class="ansbox">
            <div class="alogo"></div>
            <span class="anstext">医師や弁護士といった士業をはじめ、外資系金融会社勤務の会社員やIT企業勤務の会社員、経営者や教授といった高収入、高ステータスな方々が在籍しています。
            </span>
            <div class="aicon-dummy"></div>
        </div>
    </div>
    <div class="qnacont">
        <div class="quesbox">
            <div class="qlogo"></div>
            <span class="qtext">男性が医師であると偽る事はありませんか</span>
            <div class="qicon"></div>
        </div>
        <div class="ansbox">
            <div class="alogo"></div>
            <span class="anstext">国家資格保有者は男性も女性もご入会時に資格証明をご提出頂いております。その為、医師と偽る事はできません。どうぞご安心下さい。
            </span>
            <div class="aicon-dummy"></div>
        </div>
    </div>
    <div class="qnacont">
        <div class="quesbox">
            <div class="qlogo"></div>
            <span class="qtext">どれくらいの年齢差が最も多いでしょうか</span>
            <div class="qicon"></div>
        </div>
        <div class="ansbox">
            <div class="alogo"></div>
            <span
                  class="anstext">一般的には5～6歳前後の歳の差カップルが最も多いですが、中には10歳以上離れているカップルが誕生される事もございます。様々なお相手とお会いして行く中で、お互いに『この人だ』というお相手をお探し下さい。
            </span>
            <div class="aicon-dummy"></div>
        </div>
    </div>
    <div class="qnacont">
        <div class="quesbox">
            <div class="qlogo"></div>
            <span class="qtext">女性会員はどんなご職業の方が在籍していますか</span>
            <div class="qicon"></div>
        </div>
        <div class="ansbox">
            <div class="alogo"></div>
            <span class="anstext">メガバンクにお勤めの銀行員や外資系企業にお勤めの会社員、その他IT系や公務員、医療系など様々です。
            </span>
            <div class="aicon-dummy"></div>
        </div>
    </div>
    <div class="qnacont">
        <div class="quesbox">
            <div class="qlogo"></div>
            <span class="qtext">入会資格は何歳までですか。</span>
            <div class="qicon"></div>
        </div>
        <div class="ansbox">
            <div class="alogo"></div>
            <span class="anstext">男性は59歳まで、女性は42歳までご入会頂けます。
            </span>
            <div class="aicon-dummy"></div>
        </div>
    </div>
    <div class="qnacont">
        <div class="quesbox">
            <div class="qlogo"></div>
            <span class="qtext">まだ研修医なのですが入会は可能ですか。</span>
            <div class="qicon"></div>
        </div>
        <div class="ansbox">
            <div class="alogo"></div>
            <span class="anstext">当会では研修医の方も活動をサポート致します。まずはお気軽にお問い合わせ下さい。
            </span>
            <div class="aicon-dummy"></div>
        </div>
    </div>
    <div class="qnacont">
        <div class="quesbox">
            <div class="qlogo"></div>
            <span class="qtext">男性ではどんな職業の方が在籍していますか。</span>
            <div class="qicon"></div>
        </div>
        <div class="ansbox">
            <div class="alogo"></div>
            <span class="anstext">医師や弁護士といった士業をはじめ、外資系金融会社勤務の会社員やIT企業勤務の会社員、経営者や教授といった高収入、高ステータスな方々が在籍しています。
            </span>
            <div class="aicon-dummy"></div>
        </div>
    </div>
    <!-- <a href="<?php echo get_site_url(); ?>/faq" class="moreqna">そのほかの「よくある質問」をもっと見る</a> -->
</section>
</div><!-- end -->
<div id="overlay" class="hidden-md hidden-lg"></div>
<?php get_footer(); ?>
<script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/doctor.js"></script>
