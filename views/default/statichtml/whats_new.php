<?php

$site_url = elgg_get_site_url();

echo  "<hr /><span><h3>新着情報</h3></span><hr />";
echo  "<table border=0 width=200 align=bottom>";
/*
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/new.gif\"></th>";
echo  "        <th>";
if (elgg_is_logged_in()) {
        echo  "          <a href=\"" . $site_url . "events/event/view/608/\">";
} else {
        echo  "          <a href=\"" . $site_url . "register\">";
}
echo  "            <span style=\"font-size: small;\">";
echo  "敬老の日プレゼント作り";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
*/
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/new.gif\"></th>";
echo  "        <th>";
if (elgg_is_logged_in()) {
        echo  "          <a href=\"" . $site_url . "events/event/view/493/\">";
} else {
        echo  "          <a href=\"" . $site_url . "register\">";
}
echo  "            <span style=\"font-size: small;\">";
echo  "在宅ワーク事前告知";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/new.gif\"></th>";
echo  "        <th>";
echo  "          <a href=\"" . $site_url . "customhtml/news/20130817/\">";
echo  "            <span style=\"font-size: small;\">";
echo  "「ニュース和歌山」紙面掲載";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/up07_md_m.gif\"></th>";
echo  "        <th>";
echo  "          <a href=\"" . $site_url . "photos/album/316/\">";
echo  "            <span style=\"font-size: small;\">";
echo  "「四季の郷ネイチャーゲーム」写真";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/up07_md_m.gif\"></th>";
echo  "        <th>";
echo  "          <a href=\"" . $site_url . "photos/album/292/\">";
echo  "            <span style=\"font-size: small;\">";
echo  "「緊急用浮き輪作り」写真";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
/*
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/new.gif\"></th>";
echo  "        <th>";
if (elgg_is_logged_in()) {
	echo  "          <a href=\"" . $site_url . "photos/album/223/\">";
} else {
	echo  "          <a href=\"" . $site_url . "photos/album/223/\">";
}
echo  "            <span style=\"font-size: small;\">";
echo  "夏の思い出写真コンテスト開催";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
*/
/*
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/new.gif\"></th>";
echo  "        <th>";
if (elgg_is_logged_in()) {
	echo  "          <a href=\"" . $site_url . "events/event/view/289/\">";
} else {
	echo  "          <a href=\"" . $site_url . "register\">";
}
echo  "            <span style=\"font-size: small;\">";
echo  "              四季の郷ネイチャーゲーム";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
*/
/*
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/up07_md_m.gif\"></th>";
echo  "        <th>";
echo  "          <a href=\"" . $site_url . "photos/album/225/\">";
echo  "            <span style=\"font-size: small;\">";
echo  "「親子でパン作り」写真";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
*/
/*
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/up07_md_m.gif\"></th>";
echo  "        <th>";
echo  "          <a href=\"" . $site_url . "photos/album/150/\">";
echo  "            <span style=\"font-size: small;\">";
echo  "「親子で七夕祭り」写真";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
*/
/*
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/invite.gif\"></th>";
echo  "        <th>";
if (elgg_is_logged_in()) {
	echo  "          <a href=\"" . $site_url . "events/event/view/120/\">";
} else {
	echo  "          <a href=\"" . $site_url . "register\">";
}
echo  "            <span style=\"font-size: small;\">";
echo  "イベント企画募集";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
*/
/*
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/invite.gif\"></th>";
echo  "        <th>";
if (elgg_is_logged_in()) {
	echo  "          <a href=\"" . $site_url . "events/event/view/96/\">";
} else {
	echo  "          <a href=\"" . $site_url . "register\">";
}
echo  "            <span style=\"font-size: small;\">";
echo  "ママ講師募集！";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
*/
/*
echo  "    <tr>";
echo  "        <th><img src=\"_graphics/invite.gif\"></th>";
echo  "        <th>";
if (elgg_is_logged_in()) {
	echo  "          <a href=\"" . $site_url . "events/event/view/97/\">";
} else {
	echo  "          <a href=\"" . $site_url . "register\">";
}
echo  "            <span style=\"font-size: small;\">";
echo  "JoinHands開発者募集";
echo  "            </span>";
echo  "          </a>";
echo  "        </th>";
echo  "    </tr>";
*/
echo  "</table>";
