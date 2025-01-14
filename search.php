<body>
    <div class="content-Wrap">
        <header role="banner" class="header">
            <h1 class="header-SiteName">
                <a href="/" class="header-SiteName_Link">
                    <img src="./assets/img/logo.png" alt="Kuroneko Hair">
                </a>
                <span class="header-Tagline">ゆったり時間と癒しの美容室サンプルサイト</span>
            </h1>
            <nav class="header-Nav">
                <button type="button" class="header-NavToggle" aria-controls="global-Nav" aria-expanded="false"
                    aria-label="メニュー開閉">
                    <span class="header-NavToggle_Bar"></span>
                </button>
                <div class="header-Nav_Inner" id="global-Nav" aria-hidden="true">
                    <ul class="header-Nav_Items">
                        <li><a href="#">ホーム</a></li>
                        <li><a href="#">コンセプト</a></li>
                        <li><a href="#">ヘアスタイル</a></li>
                        <li><a href="#">メニュー</a></li>
                        <li><a href="#">店舗案内</a></li>
                    </ul>
                    <form role="search" method="get" class="search-form" action="#">
                        <label>
                            <input type="search" class="search-field" placeholder="検索 &hellip;" value="" name="s" />
                        </label>
                        <input type="submit" class="search-submit" value="検索" />
                    </form>
                </div>
            </nav>
        </header>
        <?php get_headers(); ?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main">
                        <header class="content-Header">
                            <h1 class="content-Title">
                                検索結果
                            </h1>
                        </header>
                        <?php if (have_posts()) : ?>
                        <p class="search-ResultNum">「〇〇〇」の検索結果
                            <?php echo the_search_query(); ?>件</p>
                        <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'post'); ?>
                        <?php endwhile; ?>
                        <?php get_template_part('template-parts/pagination'); ?>
                        <?php else: ?>

                        <p class="search-NoResult">検索単語に一致するものはありませんでしたほかのキーワードでお試しください。</p>
                        <?php get_search_form(); ?>
                        <?php endif; ?>
                        <article class=" module-Article_Item">
                            <a href="#" class="module-Article_Item_Link">
                                <div class="module-Article_Item_Img">
                                    <img src="./assets/img/dummy-image.png" alt="" width="200" height="150" load="lazy">
                                </div>
                                <div class="module-Article_Item_Body">
                                    <h2 class="module-Article_Item_Title">臨時休業のお知らせ</h2>
                                    <p>いつもKuroneko Hairをご利用いただき、ありがとうございます。 誠に勝手ながら、防火設備点検のため下記期間を臨時休業とさせていただきます。
                                        休業期間：2020年11月3日（火） ご不便をおかけいたしますが、何卒</p>
                                    <ul class="module-Article_Item_Meta">
                                        <li class="module-Article_Item_Date">
                                            <time datetime="2020-10-23">2020年10月23日</time>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </article>
                        <article class="module-Article_Item">
                            <a href="#" class="module-Article_Item_Link">
                                <div class="module-Article_Item_Img">
                                    <img src="./assets/img/sunflower-thumb.jpg" alt="" width="200" height="150"
                                        load="lazy">
                                </div>
                                <div class="module-Article_Item_Body">
                                    <h2 class="module-Article_Item_Title">夏季休業のお知らせ</h2>
                                    <p>いつもKuroneko Hairをご利用いただき、ありがとうございます。
                                        誠に勝手ながら、当店は下記日程で夏季休業をいたします。皆様には大変ご迷惑をおかけいたしますが、何卒よろしくお願い申し上げます。 休業期間：2020
                                    </p>
                                    <ul class="module-Article_Item_Meta">
                                        <li class="module-Article_Item_Date">
                                            <time datetime="2020-08-01">2020年8月1日</time>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </article>
                        <article class="module-Article_Item">
                            <a href="#" class="module-Article_Item_Link">
                                <div class="module-Article_Item_Img">
                                    <img src="./assets/img/magazine-thumb.jpg" alt="" width="200" height="150"
                                        load="lazy">
                                </div>
                                <div class="module-Article_Item_Body">
                                    <h2 class="module-Article_Item_Title">雑誌に掲載されました</h2>
                                    <p>現在発売中の雑誌「LOVE NEKO HAIR 7月号」に、当店スタイリストが担当したページが掲載されています。
                                        当店でも大人気の「ミケのお手入れシリーズ」のヘアオイルを使った、お手軽スタイリングを解説しました。ぜひチェ</p>
                                    <ul class="module-Article_Item_Meta">
                                        <li class="module-Article_Item_Date">
                                            <time datetime="2020-07-16">2020年7月16日</time>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </article>
                        <article class="module-Article_Item">
                            <a href="#" class="module-Article_Item_Link">
                                <div class="module-Article_Item_Img">
                                    <img src="./assets/img/dummy-image.png" alt="" width="200" height="150" load="lazy">
                                </div>
                                <div class="module-Article_Item_Body">
                                    <h2 class="module-Article_Item_Title">臨時休業のお知らせ</h2>
                                    <p>いつもKuroneko Hairをご利用いただき、ありがとうございます。 誠に勝手ながら、社内研修のため下記期間を臨時休業とさせていただきます。
                                        休業期間：7月22日（水）〜23日（木） ご不便をおかけいたしますが、何卒</p>
                                    <ul class="module-Article_Item_Meta">
                                        <li class="module-Article_Item_Date">
                                            <time datetime="2020-07-01">2020年7月1日</time>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </article>
                        <article class="module-Article_Item">
                            <a href="#" class="module-Article_Item_Link">
                                <div class="module-Article_Item_Img">
                                    <img src="./assets/img/sakura-thumb.jpg" alt="" width="200" height="150"
                                        load="lazy">
                                </div>
                                <div class="module-Article_Item_Body">
                                    <h2 class="module-Article_Item_Title">スタッフが入りました</h2>
                                    <p>4月1日より、Kuroneko Hairに新規スタッフが加わりました。 昨年まで、東京都内の美容室でトップスタイリストとして活躍していた清水です。
                                        特に忙しい世代の短時間でスタイリングが決まる似合わせカットを得意としてい</p>
                                    <ul class="module-Article_Item_Meta">
                                        <li class="module-Article_Item_Date">
                                            <time datetime="2020-04-01">2020年4月1日</time>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </article>
                        <nav class="navigation pagination" role="navigation" aria-label="投稿">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">&lt;<span class="sr-only">前</span></a>
                                <a class="page-numbers" href="#">1</a>
                                <span aria-current="page" class="page-numbers current">2</span>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#"> <span class="sr-only">次</span>&gt;</a>
                            </div>
                        </nav>
                    </main>
                </div>
                <?php get_sidebar(); ?>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget_block">
                            <h2>カテゴリー</h2>
                            <ul class="wp-block-categories-list wp-block-categories">
                                <li><a href="#">お知らせ</a></li>
                                <li><a href="#">アイテム</a></li>
                                <li><a href="#">キャンペーン</a></li>
                                <li><a href="#">ブログ</a></li>
                            </ul>
                        </div>
                        <div class="widget_block">
                            <h2>アーカイブ</h2>
                            <ul class="wp-block-archives-list wp-block-archives">
                                <li><a href="#">2021年3月</a></li>
                                <li><a href="#">2020年11月</a></li>
                                <li><a href="#">2020年10月</a></li>
                                <li><a href="#">2020年9月</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>