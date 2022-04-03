<?php get_header();
/*
Template Name: recruit
*/
?>
<div class="recruit_main">
    <div class="container">
        <h2>採用情報</h2>

        <dl class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
            <dt>求人のご案内</dt>
            <dd>
                若さあふれるアットホームな雰囲気のあるグループ調剤薬局です。
                地域の皆様の心にやさしい和みのある薬局創りを目指して、
                全職員１人１人のコミュニケーションを大切にしています。
                また、在宅医療を含め 地域医療への取り組みも積極的に行っています。
                どうぞお気軽にお問い合わせ下さい。
            </dd>
        </dl>
    </div>
</div>
<div class="container recruit_contents">
    <h3>募集要項</h3>
    <div class="col-md-4 col-sm-4 hidden-xs">
        <img src="<?php bloginfo('template_directory'); ?>/img/recruit/recruit_contents.png" alt="募集要項">
    </div>
    <table class="col-md-8 col-sm-8 col-xs-12">
        <tr>
            <th>採用形態</th>
            <td>正社員、パート</td>
        </tr>
        <tr>
            <th>資格</th>
            <td>薬剤師免許</td>
        </tr>
        <tr>
            <th>業務内容</th>
            <td>調剤及び医薬品の販売</td>
        </tr>
        <tr>
            <th>給与</th>
            <td>経験を考慮します</td>
        </tr>
        <tr>
            <th>勤務地</th>
            <td>株式会社 上別府コミュニティファーマシー各店舗</td>
        </tr>
        <tr>
            <th>勤務時間</th>
            <td>各店舗による</td>
        </tr>
        <tr>
            <th>休日休暇</th>
            <td>年次121日程度</td>
        </tr>
        <tr>
            <th>福利厚生</th>
            <td>社会保険完備</td>
        </tr>
        <tr>
            <th>諸手当</th>
            <td>薬剤師手当</td>
        </tr>
    </table>

    <div class="recruit_contact col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
        <p>まずはお気軽にご連絡ください。詳細をお知らせいたします。</p>
        <table>
            <tr>
                <th>【TEL・FAXからの問い合わせ】</th>
                <td>0983-42-6227</td>
            </tr>
            <tr>
                <th>【メールでのお問い合わせ】</th>
                <td>メールフォームからお願いいたします。</td>
            </tr>
        </table>
        <div class="col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-3 col-xs-12">
            <a href="<?php echo site_url(); ?>/contact">お問合わせはこちら</a>
        </div>
    </div>
</div>


<?php include("block_menu.php"); ?>
<?php get_footer(); ?>
