<?php
include_once('head.sub.php');
add_javascript('<script type="text/javascript" src="' . $NC_PATH . '/js/header.js"></script>');
?>
<header class="start">
    <div class="wrap">
        <a class="header-logo" href="/"></a>
        <nav class="header__nav pc-view">
            <ul>
                <li data-target="1" class="select"><a>STORY</a></li>
                <li data-target="2"><a>PHILOSOPHY</a></li>
                <li data-target="3"><a>ECOSYSTEM</a></li>
                <li data-target="4"><a>VISION</a></li>
                <li data-target="5"><a>CONTACT</a></li>
            </ul>
        </nav>
        <div class="header__lang">
            <ul>
                <li class="pc-view"><a target="_blank" href="http://hustory.net/bbs/register.php">JOIN +</a></li>
                <li class="lang__change">
                    <?php
                    if (strtoupper($country) == 'KO') {
                        echo "KOREAN";
                    } else if (strtoupper($country) == 'EN') {
                        echo "ENGLISH";
                    } else if (strtoupper($country) == 'CH') {
                        echo "CHINESE";
                    } else if (strtoupper($country) == 'JA') {
                        echo "JAPANESE";
                    }
                    ?>
                    <ul class="change__ul">
                        <li <?php if(strtoupper($country)=='EN') echo 'class="nav-none"'?>>
                            <a href="#" data-lang="en">ENGLISH</a></li>
                        <li <?php if(strtoupper($country)=='KO') echo 'class="nav-none"'?>>
                            <a href="#" data-lang="ko">KOREA</a></li>
                        <li <?php if(strtoupper($country)=='CH') echo 'class="nav-none"'?>>
                            <a href="#" data-lang="ch">CHINESE</a></li>
                        <li <?php if(strtoupper($country)=='JA') echo 'class="nav-none"'?>>
                            <a href="#" data-lang="ja">JAPANESE</a></li>
                    </ul>
                </li>
                <li class="mobile-view"><i class="xi-bars"></i></li>
            </ul>
        </div>
    </div>
</header>

<aside id="leftAside">
    <img class="scroll-down-w" src="<?= $NC_PATH ?>/images/scroll-down-w.png">
    <img class="scroll-down-b none" src="<?= $NC_PATH ?>/images/scroll-down-b.png">
    <img class="scroll-up none" src="<?= $NC_PATH ?>/images/scroll-up-w.png">
</aside>

<aside id="rightAside">
    <ul>
        <li data-target="0" class="select">01</li>
        <li data-target="1">02</li>
        <li data-target="2">03</li>
        <li data-target="3">04</li>
        <li data-target="4">05</li>
        <li data-target="5">06</li>
    </ul>
</aside>

<div id="container" data-index="0">
