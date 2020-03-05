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
                    <p>새로운 흐름, 선도적 경제, 도전적‘人’공동체</p>
                </div>
            </div>
        </li>
        <li>
            <div>
                <img src="/ncube/images/main-bg02.png" alt="main02">
                <div class="main-box">
                    <img src="/ncube/images/main-icon02.png" alt="Eco system">
                    <h1>ECOSYSTEM</h1>
                    <p>자유로운 ‘人’공동체로 구성되는 새로운 경제 생태계</p>
                </div>
            </div>
        </li>
        <li>
            <div>
                <img src="/ncube/images/main-bg03.png" alt="main03">
                <div class="main-box">
                    <img src="/ncube/images/main-icon03.png" alt="Block chain">
                    <h1>BLOCK CHAIN</h1>
                    <p>자유로운 ‘人’공동체로 구성되는 새로운 경제 생태계</p>
                </div>
            </div>
        </li>
    </ul>
    <script>
        $('#main').tw_slide({
            mode:'basic',
            loop:true,
            auto:true,
            pause:".pause-div",
            speed:500,
            time:4500,
            navi:true
        });
    </script>
</section>