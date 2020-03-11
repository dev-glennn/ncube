<?php
add_stylesheet("<link rel='stylesheet' href='" . $NC_PATH . "/css/main.css'>");
add_javascript('<script type="text/javascript" src="' . $NC_PATH . '/js/tw.slide.js"></script>');
?>
<section id="main">
    <ul>
        <li>
            <div>
                <img src="/ncube/images/main-bg01.png" alt="main01">
                <div class="main-box">
                    <img src="/ncube/images/main-icon01.png" alt="Humunity">
                    <h1>HUMUNITY</h1>
                    <p>
                        <?= lang('새로운 흐름, 선도적 경제, 도전적 <span>‘人’</span> 공동체',
                            'a new trend, a leading economy, a challenging <span> people </span>\'s community.',
                            '新潮流,先導性經濟,挑戰性<span> \'人\' </span>共同體', '新しい流れ、先導的経済、挑戦的<span> ‘人’ </span>共同体') ?></p>
                </div>
            </div>
        </li>
        <li>
            <div>
                <img src="/ncube/images/main-bg02.png" alt="main02">
                <div class="main-box">
                    <img src="/ncube/images/main-icon02.png" alt="Eco system">
                    <h1>ECOSYSTEM</h1>
                    <p><?= lang('자유로운 <span>‘人’</span> 공동체로 구성되는 새로운 경제 생태계', 'a new economic ecosystem consisting of a free <span> people </span>\'s community.', '由自由的<span> \'人\' </span>共同體構成的新經濟生態系', '自由な<span> \'人\' </span>共同体で構成される新しい経済生態系') ?></p>
                </div>
            </div>
        </li>
        <li>
            <div>
                <img src="/ncube/images/main-bg03.png" alt="main03">
                <div class="main-box">
                    <img src="/ncube/images/main-icon03.png" alt="Block chain">
                    <h1>BLOCK CHAIN</h1>
                    <p><?= lang('자율적 <span>‘人’</span> 공동체로 구성되는 새로운 경제 생태계', 'a new economic ecosystem consisting of autonomous <span> people </span>\'s community.', '由自主的<span> \'人\' </span>共同體構成的新經濟生態系', '自律的<span> \'人\' </span>共同体で構成される新しい経済生態系') ?></p>
                </div>
            </div>
        </li>
    </ul>
    <script>
        $('#main').tw_slide({
            mode: 'basic',
            loop: false,
            auto: true,
            pause: ".pause-div",
            speed: 1000,
            time: 5500,
            navi: true
        });
    </script>
</section>