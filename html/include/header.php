<?php
include_once('head.sub.php');
add_javascript('<script type="text/javascript" src="' . $NC_PATH . '/js/header.js"></script>');
?>
<header class="start">
    <div class="wrap">
        <a class="header-logo" href="/ncube"></a>
        <nav class="header__nav">
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
                <li><a target="_blank" href="http://hustory.net/bbs/register.php">JOIN +</a></li>
                <li class="lang__change"><?= strtoupper($country) ?>
                    <ul class="change__ul">
                        <li><a href="#" data-lang="en">EN</a></li>
                        <li><a href="#" data-lang="ch">CH</a></li>
                        <li><a href="#" data-lang="ko">KO</a></li>
                    </ul>
                </li>
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
