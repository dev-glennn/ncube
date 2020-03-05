<?php
include_once('head.sub.php');
add_javascript('<script type="text/javascript" src="' . $NC_PATH . '/js/header.js"></script>');
?>
<header class="start">
    <div class="wrap">
        <a class="header-logo" href="/ncube"></a>
        <nav class="header__nav">
            <ul>
                <li data-target="#story" class="select"><a>STORY</a></li>
                <li data-target="#philosophy"><a>PHILOSOPHY</a></li>
                <li data-target="#ecosystem"><a>ECOSYSTEM</a></li>
                <li data-target="#vision"><a>VISION</a></li>
                <li data-target="#contact"><a>CONTACT</a></li>
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
</aside>

<aside id="rightAside">

</aside>

<div id="container" data-index="0">
