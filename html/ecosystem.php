<?php
add_stylesheet("<link rel='stylesheet' href='" . $NC_PATH . "/css/ecosystem.css?ver=" . time() . "'>");
?>

<section id="ecosystem">
    <h2 class="ecosystem-title">ECOSYSTEM</h2>
    <div class="table">
        <div class="table-cell">
            <div class="wrap">
                <div class="ecosystem-content">
                    <div class="content-top">
                        <div class="top-exchange">
                            <img src="/ncube/images/eco-bithumb.png" alt="bithumb">
                            <img src="/ncube/images/eco-hudex.png" alt="hudex">
                            <img src="/ncube/images/eco-hudex-gb.png" alt="hudex global">
                        </div>
                        <div class="top-coin">
                            <div class="coin"><img src="/ncube/images/eco-cbc.png" alt="cbc"></div>
                            <div class="coin"><img src="/ncube/images/eco-ncash.png" alt="ncash"></div>
                            <div class="coin"><img src="/ncube/images/eco-ncb.png" alt="ncb"></div>
                        </div>
                    </div>
                    <div class="content-bottom">
                        <div class="content-bottom-wrap">
                            <a class="bottom-item" target="_blank" href="http://humall.kr/shop/">
                                <img src="/ncube/images/eco-humall.png" alt="humall">
                                <span><?= lang('Danomic <br/>온라인쇼핑몰', 'Danomic Online shopping mall', 'Danomic 网上购物中心',
                                        'Danomic オンラインショッピングモール')
                                    ?></span>
                            </a>
                            <a class="bottom-item">
                                <img src="/ncube/images/eco-cube.png" alt="cubezone">
                                <span><?= lang('Danomic  <br/>O2O 오프라인 매장', 'Danomic O2O Offline Stores', 'Danomic O2O实体店', 'Danomic O2Oオフラインショップ') ?></span>
                            </a>
                            <a class="bottom-item" target="_blank" href="http://hustory.net/">
                                <img src="/ncube/images/eco-hustory.png" alt="hustory">
                                <span><?= lang('앤큐브 공동체  <br/>비즈니스 오피스', 'nCube Community Business Office', 'nCube共同体商务办公', 'nCube共同体ビジネスオフィス')
                                    ?></span>
                            </a>
                            <a class="bottom-item">
                                <img src="/ncube/images/eco-huwallet.png" alt="huwallet">
                                <span><?= lang('Danomic  <br/>전자지갑', 'Danomic Electronic wallet', 'Danomic 电子钱包', 'Danomic 電子財布')
                                    ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
