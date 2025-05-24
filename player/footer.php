<?php


goto label134;

label1:

echo '        var rPlayer = jwplayer("now__playing__player");' . "\r\n" . '        rPlayer.setup({' . "\r\n" . '            "file": window.rURLs[0],' . "\r\n" . '            "aspectratio": \'16:9\',' . "\r\n" . '            "autostart": true,' . "\r\n" . '            "width": \'100%\'' . "\r\n" . '        });' . "\r\n" . '        rPlayer.on(\'error\', showError);' . "\r\n" . '        rPlayer.play();' . "\r\n" . '        ';

label2:

goto label307;

label3:

echo '        $(\'video source\').last().on(\'error\', function() {' . "\r\n" . '            ';
goto label173;

label5:

echo '        $("#episode_" + window.currentID).addClass("disabled");' . "\r\n" . '        $("#episode_" + window.currentID + " ul").show();' . "\r\n" . '        $("#player_row").slideUp(250, function() {' . "\r\n" . '            $(\'html,body\').animate({' . "\r\n" . '                scrollTop: $(".seasons").offset().top - 90' . "\r\n" . '            });' . "\r\n" . '        });' . "\r\n" . '        ';
goto label8;

label7:

echo '        $("#player_row").slideUp(250);' . "\r\n" . '        $(\'html,body\').animate({' . "\r\n" . '            scrollTop: 0' . "\r\n" . '        });' . "\r\n" . '        $("#player__error").html("Error " + rError.code + " - " + rError.message);' . "\r\n" . '        $("#player__error").slideDown(250);' . "\r\n" . '        ';

label8:

goto label159;

label9:

echo str_replace('\'', '\\\'', json_encode(array_flip($Fa372bd670cae8cd)));
echo '\');' . "\r\n" . '            var rCategories = JSON.parse(\'';
echo str_replace('\'', '\\\'', json_encode($F771d40e8cf51e59));
echo '\');' . "\r\n" . '            window.location.href = \'./';
echo $E8870c6f95210f68;
goto label194;

label34:

echo '],' . "\r\n\t\t\t\t" . 'format: wNumb({' . "\r\n\t\t\t\t\t" . 'decimals: 0,' . "\r\n\t\t\t\t" . '})' . "\r\n\t\t\t" . '});' . "\r\n\t\t\t" . 'var firstValues = [' . "\r\n\t\t\t\t" . 'document.getElementById(\'filter__years-start\'),' . "\r\n\t\t\t\t" . 'document.getElementById(\'filter__years-end\')' . "\r\n\t\t\t" . '];' . "\r\n\t\t\t" . 'firstSlider.noUiSlider.on(\'update\', function( values, handle ) {' . "\r\n\t\t\t\t" . 'firstValues[handle].innerHTML = values[handle];' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '} else {' . "\r\n\t\t\t" . 'return false;' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'return false;' . "\r\n\t" . '}' . "\r\n\t" . '$(window).on(\'load\', initYearSlider());' . "\r\n" . '    ' . "\r\n" . '    function initRatingSlider() {' . "\r\n\t\t" . 'if ($(\'#filter__rating\').length) {' . "\r\n\t\t\t" . 'var secondSlider = document.getElementById(\'filter__rating\');' . "\r\n\t\t\t" . 'noUiSlider.create(secondSlider, {' . "\r\n\t\t\t\t" . 'range: {' . "\r\n\t\t\t\t\t" . '\'min\': 0,' . "\r\n\t\t\t\t\t" . '\'max\': 10' . "\r\n\t\t\t\t" . '},' . "\r\n" . '                ';

if ($E8870c6f95210f68 == 'movies') {
	goto label40;
}

echo '                step: 1,' . "\r\n" . '                ';
goto label169;

label40:

goto label168;

label41:

echo '    window.currentID = 0;' . "\r\n" . '    window.rURLs = $.parseJSON(\'';
echo str_replace('\'', '\\\'', json_encode($F83b167f3cf044be));
echo '\');' . "\r\n" . '    ' . "\r\n" . '    ';

if (!($E8870c6f95210f68 == 'episodes')) {
	goto label265;
}

if ($A412a8fc85cbb7e7) {
	goto label238;
}

goto label236;

label59:

echo str_replace('\'', '\\\'', json_encode(array_flip($e00f609d4f0c2c89)));
echo '\');' . "\r\n" . '            ';
$F771d40e8cf51e59 = [];

foreach (XUI::d15Dce7a49F71fea($E59d0debc75e7be8['category_ids'], $E8870c6f95210f68 == 'movies' ? 'movie' : 'series') as $Dbcac322b4274e46) {
	$F771d40e8cf51e59[$Dbcac322b4274e46['title']] = $Dbcac322b4274e46['id'];
}

goto label180;

label92:

if ($E8870c6f95210f68 == 'profile') {
	goto label113;
}

if ($E8870c6f95210f68 == 'live') {
	goto label315;
}
if (($E8870c6f95210f68 == 'movie') || ($E8870c6f95210f68 == 'episodes')) {
	goto label145;
}
if (!(($E8870c6f95210f68 == 'movies') || ($E8870c6f95210f68 == 'series'))) {
	goto label144;
}

echo '    $(document).ready(function () {' . "\r\n" . '        $(".filter__btn").click(function() {' . "\r\n" . '            var rSort = JSON.parse(\'';
goto label59;

label113:

echo '    function AtoZ() {' . "\r\n" . '        $("#sort_bouquet").append($("#sort_bouquet option").remove().sort(function(a, b) {' . "\r\n" . '            var at = $(a).text().toUpperCase(), bt = $(b).text().toUpperCase();' . "\r\n" . '            return (at > bt) ? 1 : ((at < bt) ? -1 : 0);' . "\r\n" . '        }));' . "\r\n" . '    }' . "\r\n" . '    function MoveUp() {' . "\r\n" . '        var rSelected = $(\'#sort_bouquet option:selected\');' . "\r\n" . '        if (rSelected.length) {' . "\r\n" . '            var rPrevious = rSelected.first().prev()[0];' . "\r\n" . '            if ($(rPrevious).html() != \'\') {' . "\r\n" . '                rSelected.first().prev().before(rSelected);' . "\r\n" . '            }' . "\r\n" . '        }' . "\r\n" . '    }' . "\r\n" . '    function MoveDown() {' . "\r\n" . '        var rSelected = $(\'#sort_bouquet option:selected\');' . "\r\n" . '        if (rSelected.length) {' . "\r\n" . '            rSelected.last().next().after(rSelected);' . "\r\n" . '        }' . "\r\n" . '    }' . "\r\n" . '    function doLogout() {' . "\r\n" . '        window.location.href = "logout";' . "\r\n" . '    }' . "\r\n" . '    ' . "\r\n" . '    $(document).ready(function () {' . "\r\n" . '        $("#output_type").change(function() {' . "\r\n" . '            $("#download_type").trigger("change");' . "\r\n" . '        });' . "\r\n" . '        $("#download_type").change(function() {' . "\r\n" . '            if ($("#download_type").val()) {' . "\r\n" . '                ';
$A7ca171405b19571 = rtrim(XUI::C65C7f64E35C199f(), '/');

if (PLATFORM == 'xui') {
	goto label233;
}

echo '                rText = "';
goto label217;

label127:

echo '    ' . "\r\n" . '    function setChannel(rID, rStart=null, rDuration=null) {' . "\r\n" . '        if (window.updateTimer !== null) {' . "\r\n" . '            clearTimeout(window.updateTimer);' . "\r\n" . '        }' . "\r\n" . '        ' . "\r\n" . '        $("html, body").animate({ scrollTop: 0 }, "fast");' . "\r\n" . '        if (rStart && rDuration) {' . "\r\n" . '            var rURL = "listings.php?id=" + encodeURIComponent(rID) + "&start=" + encodeURIComponent(rStart) + "&duration=" + encodeURIComponent(rDuration);' . "\r\n" . '        } else {' . "\r\n" . '            var rURL = "listings.php?id=" + encodeURIComponent(rID);' . "\r\n" . '        }' . "\r\n" . '        $.getJSON(rURL, function(rData) {' . "\r\n" . '            $("#now__playing__title").html(rData.title);' . "\r\n" . '            $("#now__playing__epg").html(rData.epg_title);' . "\r\n" . '            $("#now__playing__text").html(rData.epg_description);' . "\r\n" . '            ' . "\r\n" . '            var rPlayer = jwplayer("now__playing__player");' . "\r\n" . '            rPlayer.setup({' . "\r\n" . '                "file": rData.url,' . "\r\n" . '                "aspectratio": \'16:9\',' . "\r\n" . '                "autostart": true,' . "\r\n" . '                "width": \'100%\',' . "\r\n" . '            });' . "\r\n" . '            rPlayer.play();' . "\r\n" . '            ' . "\r\n" . '            if ($(window).width() > 768) {' . "\r\n" . '                $(".close__btn").fadeIn(250);' . "\r\n" . '            }' . "\r\n" . '            $("#now__playing__box").slideDown(250);' . "\r\n" . '            ' . "\r\n" . '            if (!rStart || !rDuration) {' . "\r\n" . '                window.updateTimer = setTimeout(updateChannel, 60000, rID);' . "\r\n" . '            }' . "\r\n" . '        });' . "\r\n" . '    }' . "\r\n" . '    ' . "\r\n" . '    function closeChannel() {' . "\r\n" . '        if (window.updateTimer !== null) {' . "\r\n" . '            clearTimeout(window.updateTimer);' . "\r\n" . '        }' . "\r\n" . '        ' . "\r\n" . '        $(".close__btn").fadeOut(250);' . "\r\n" . '        $("#now__playing__box").slideUp(250, function() {' . "\r\n" . '            $("#now__playing__title").html("';

if (isset($Eac3da04c89f6001)) {
	goto label279;
}

echo 'LIVE TV';
goto label288;
goto label279;

label134:

echo '    <footer class="footer">' . "\r\n\t\t" . '<div class="container">' . "\r\n\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t" . '<div class="footer__copyright">' . "\r\n" . '                        &copy; 2021 <img height="20px" style="padding-left: 10px; padding-right: 10px; margin-top: -2px;" class="whiteout" src="img/logo.png"> v';
echo $E7d8244cf456584e;
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</footer>' . "\r\n\t" . '<script src="./js/jquery-3.5.1.min.js"></script>' . "\r\n\t" . '<script src="./js/bootstrap.bundle.min.js"></script>' . "\r\n\t" . '<script src="./js/owl.carousel.min.js"></script>' . "\r\n\t" . '<script src="./js/jquery.mousewheel.min.js"></script>' . "\r\n\t" . '<script src="./js/jquery.mcustomscrollbar.min.js"></script>' . "\r\n\t" . '<script src="./js/wnumb.js"></script>' . "\r\n\t" . '<script src="./js/nouislider.min.js"></script>' . "\r\n\t" . '<script src="./js/jquery.morelines.min.js"></script>' . "\r\n\t" . '<script src="./js/photoswipe.min.js"></script>' . "\r\n\t" . '<script src="./js/photoswipe-ui-default.min.js"></script>' . "\r\n" . '    <script src="./js/glightbox.min.js"></script>' . "\r\n" . '    <script src="./js/jBox.all.min.js"></script>' . "\r\n" . '    <script src="./js/select2.min.js"></script>' . "\r\n" . '    <script src="./js/jwplayer.js"></script>' . "\r\n" . '    <script src="./js/jwplayer.core.controls.js"></script>' . "\r\n" . '    <script src="./js/provider.hlsjs.js"></script>' . "\r\n\t" . '<script src="./js/main.js"></script>' . "\r\n" . '    <script>' . "\r\n" . '    $(document).ready(function () {' . "\r\n" . '        ';

if ($E8870c6f95210f68 != 'profile') {
	goto label303;
}

echo '        $(\'#search__select\').select2({' . "\r\n" . '            minimumResultsForSearch: -1' . "\r\n" . '        });' . "\r\n" . '        ';
goto label302;

label142:

echo $dcd05fe9ef95ab60;
echo '],' . "\r\n\t\t\t\t" . 'format: wNumb({' . "\r\n\t\t\t\t\t" . 'decimals: 1,' . "\r\n\t\t\t\t" . '})' . "\r\n\t\t\t" . '});' . "\r\n\r\n\t\t\t" . 'var secondValues = [' . "\r\n\t\t\t\t" . 'document.getElementById(\'filter__rating-start\'),' . "\r\n\t\t\t\t" . 'document.getElementById(\'filter__rating-end\')' . "\r\n\t\t\t" . '];' . "\r\n\r\n\t\t\t" . 'secondSlider.noUiSlider.on(\'update\', function( values, handle ) {' . "\r\n\t\t\t\t" . 'secondValues[handle].innerHTML = values[handle];' . "\r\n\t\t\t" . '});' . "\r\n\r\n\t\t\t" . '$(\'.filter__item-menu--range\').on(\'click.bs.dropdown\', function (e) {' . "\r\n\t\t\t\t" . 'e.stopPropagation();' . "\r\n\t\t\t\t" . 'e.preventDefault();' . "\r\n\t\t\t" . '});' . "\r\n\t\t" . '} else {' . "\r\n\t\t\t" . 'return false;' . "\r\n\t\t" . '}' . "\r\n\t\t" . 'return false;' . "\r\n\t" . '}' . "\r\n\t" . '$(window).on(\'load\', initRatingSlider());' . "\r\n" . '    ';

label144:

goto label314;

label145:

goto label41;

label146:

echo intval($d02ef9ae10a41939['id']);
echo '&season=" + rSplit[rSplit.length-1];' . "\r\n" . '        });' . "\r\n" . '        ';

label152:

if (!isset(XUI::$rRequest['season'])) {
	goto label313;
}

echo '        $(\'html,body\').animate({' . "\r\n" . '            scrollTop: $(".seasons").offset().top - 90' . "\r\n" . '        });' . "\r\n" . '        ';
goto label313;

label159:

echo '    }' . "\r\n" . '    ';

label160:

echo '    ' . "\r\n" . '    $(document).ready(function () {' . "\r\n" . '        ';

if ($A412a8fc85cbb7e7) {
	goto label3;
}

if (!($E8870c6f95210f68 == 'movie')) {
	goto label2;
}

goto label1;

label168:

echo "\t\t\t\t" . 'step: 0.5,' . "\r\n" . '                ';

label169:

echo "\t\t\t\t" . 'connect: true,' . "\r\n\t\t\t\t" . 'start: [';
echo $f41820ace7a6107e;
echo ', ';
goto label142;

label173:

if ($E8870c6f95210f68 == 'movie') {
	goto label178;
}

echo '            $("#episode_" + window.currentID).addClass("disabled");' . "\r\n" . '            $("#episode_" + window.currentID + " ul").show();' . "\r\n" . '            $("#player_row").slideUp(250, function() {' . "\r\n" . '                $(\'html,body\').animate({' . "\r\n" . '                    scrollTop: $(".seasons").offset().top - 90' . "\r\n" . '                });' . "\r\n" . '            });' . "\r\n" . '            ';
goto label306;

label178:

echo '            $("#player__error").html("Error - This movie is currently unavailable. Please try again later.");' . "\r\n" . '            $("#player__error").slideDown(250);' . "\r\n" . '            $("#player_row").slideUp(250);' . "\r\n" . '            $(\'html,body\').animate({' . "\r\n" . '                scrollTop: 0' . "\r\n" . '            });' . "\r\n" . '            ';
goto label306;

label180:

echo '            var rCategories = JSON.parse(\'';
echo str_replace('\'', '\\\'', json_encode($F771d40e8cf51e59));
echo '\');' . "\r\n" . '            window.location.href = \'./';
echo $E8870c6f95210f68;
echo '?sort=\' + rSort[$("#filter__sort input").val()] + "&category=" + rCategories[$("#filter__genre input").val()] + "&rating_s=" + encodeURIComponent($("#filter__rating-start").html()) + "&rating_e=" + encodeURIComponent($("#filter__rating-end").html()) + "&year_s=" + encodeURIComponent($("#filter__years-start").html()) + "&year_e=" + encodeURIComponent($("#filter__years-end").html());' . "\r\n" . '        });' . "\r\n" . '        ' . "\r\n" . '        $(".clear__btn").click(function() {' . "\r\n" . '            window.location.href = \'./';
goto label273;

label194:

echo '?sort=\' + rSort[$("#filter__sort input").val()] + "&category=" + rCategories[$("#filter__genre input").val()] + "&filter=" + rFilter[$("#filter__filter input").val()];' . "\r\n" . '        });' . "\r\n" . '        ' . "\r\n" . '        $(".clear__btn").click(function() {' . "\r\n" . '            window.location.href = \'./';
echo $E8870c6f95210f68;
echo '\';' . "\r\n" . '        });' . "\r\n" . '    });' . "\r\n" . '    ';

label197:

goto label252;
goto label113;

label199:

if (!(0 < count($dec36723d7be7c49))) {
	goto label127;
}

echo '    window.updateTimer = null;' . "\r\n" . '    window.XUI = window.XUI || {};' . "\r\n" . '    window.XUI.Listings = window.XUI.Listings || {};' . "\r\n" . '    window.XUI.Listings.DefaultChannels = "';
echo implode(',', $dec36723d7be7c49);
echo '";' . "\r\n" . '    ';

if ($c06098d489559fa8 == 'epg') {
	goto label250;
}

goto label248;

label217:

echo $A7ca171405b19571;
echo '/get.php?username=';
echo htmlentities($E59d0debc75e7be8['username']);
echo '&password=';
echo htmlentities($E59d0debc75e7be8['password']);
goto label231;

label231:

echo '&type=" + decodeURIComponent($(\'#download_type\').val());' . "\r\n" . '                ';
goto label240;

label233:

echo '                rText = "';
echo $A7ca171405b19571;
goto label333;

label236:

echo '    function openPlayer(rID = 0) {' . "\r\n" . '        window.currentID = rID;' . "\r\n" . '        var rPlayer = jwplayer("now__playing__player");' . "\r\n" . '        rPlayer.setup({' . "\r\n" . '            "file": window.rURLs[rID],' . "\r\n" . '            "aspectratio": \'16:9\',' . "\r\n" . '            "autostart": true,' . "\r\n" . '            "width": \'100%\'' . "\r\n" . '        });' . "\r\n" . '        rPlayer.on(\'error\', showError);' . "\r\n" . '        rPlayer.play();' . "\r\n" . '        $("#player_row").slideDown(250, function() {' . "\r\n" . '            $(\'html,body\').animate({' . "\r\n" . '                scrollTop: $("#player_row").offset().top - 100' . "\r\n" . '            });' . "\r\n" . '        });' . "\r\n" . '    }' . "\r\n" . '    ';
goto label239;

label238:

echo '    function openPlayer(rID = 0) {' . "\r\n" . '        if (!$(".filter__btn").hasClass("disabled")) {' . "\r\n" . '            window.currentID = rID;' . "\r\n" . '            $("video source").last().attr("src", window.rURLs[rID]);' . "\r\n" . '            $("video track").remove();' . "\r\n" . '            $("video")[0].load();' . "\r\n" . '            $("video")[0].play();' . "\r\n" . '            $("#player_row").slideDown(250, function() {' . "\r\n" . '                $(\'html,body\').animate({' . "\r\n" . '                    scrollTop: $("#player_row").offset().top - 100' . "\r\n" . '                });' . "\r\n" . '            });' . "\r\n" . '        }' . "\r\n" . '    }' . "\r\n" . '    ';

label239:

goto label265;

label240:

if (!(PLATFORM == 'xui')) {
	goto label246;
}

echo '                if ($("#output_type").val()) {' . "\r\n" . '                    if (rText.indexOf(\'?output=\') != -1) {' . "\r\n" . '                        rText = rText + "&key=" + encodeURIComponent($("#output_type").val());' . "\r\n" . '                    } else {' . "\r\n" . '                        rText = rText + "?key=" + encodeURIComponent($("#output_type").val());' . "\r\n" . '                    }' . "\r\n" . '                }' . "\r\n" . '                ';

label246:

echo '                $("#download_url").val(rText);' . "\r\n" . '            } else {' . "\r\n" . '                $("#download_url").val("");' . "\r\n" . '            }' . "\r\n" . '        });' . "\r\n" . '        $("#download_type").trigger("change");' . "\r\n" . '        $("#bouquet__form").submit(function(e){' . "\r\n" . '            rOrder = [];' . "\r\n" . '            $(\'#sort_bouquet option\').each(function() {' . "\r\n" . '                rOrder.push($(this).val());' . "\r\n" . '            });' . "\r\n" . '            $("#bouquet_order_array").val(JSON.stringify(rOrder));' . "\r\n" . '        });' . "\r\n" . '    });' . "\r\n" . '    ';
goto label252;

label248:

echo '    window.XUI.Listings.HideEmpty = 0;' . "\r\n" . '    ';
goto label251;

label250:

echo '    window.XUI.Listings.HideEmpty = 1;' . "\r\n" . '    ';

label251:

goto label127;

label252:

echo '    </script>' . "\r\n" . '    ';
if (!(($E8870c6f95210f68 == 'live') && (0 < count($dec36723d7be7c49)))) {
	goto label264;
}

echo '    <script src="./js/listings.js"></script>' . "\r\n" . '    ';

label264:

goto label347;

label265:

echo '    ' . "\r\n" . '    ';

if ($A412a8fc85cbb7e7) {
	goto label160;
}

echo '    function showError(rError) {' . "\r\n" . '        ';

if ($E8870c6f95210f68 == 'movie') {
	goto label7;
}

goto label5;

label273:

echo $E8870c6f95210f68;
echo '\';' . "\r\n" . '        });' . "\r\n" . '    });' . "\r\n" . '    ' . "\r\n" . '    function initYearSlider() {' . "\r\n\t\t" . 'if ($(\'#filter__years\').length) {' . "\r\n\t\t\t" . 'var firstSlider = document.getElementById(\'filter__years\');' . "\r\n" . '            var d = new Date();' . "\r\n" . '            var rYear = d.getFullYear();' . "\r\n\t\t\t" . 'noUiSlider.create(firstSlider, {' . "\r\n\t\t\t\t" . 'range: {' . "\r\n\t\t\t\t\t" . '\'min\': 1900,' . "\r\n\t\t\t\t\t" . '\'max\': rYear' . "\r\n\t\t\t\t" . '},' . "\r\n\t\t\t\t" . 'step: 1,' . "\r\n\t\t\t\t" . 'connect: true,' . "\r\n\t\t\t\t" . 'start: [';
echo $Bb96377dd3ea6d19;
echo ', ';
echo $Bb1ad3c3aa5b1156;
goto label34;

label279:

echo strtoupper(str_replace('"', '\\"', $Eac3da04c89f6001));

label288:

echo '");' . "\r\n" . '            $("#now__playing__epg").html("No Programme Information...");' . "\r\n" . '            $("#now__playing__text").html("");' . "\r\n" . '            ' . "\r\n" . '            var rPlayer = jwplayer("now__playing__player");' . "\r\n" . '            rPlayer.stop();' . "\r\n" . '        });' . "\r\n" . '    }' . "\r\n" . '    ' . "\r\n" . '    function updateChannel(rID) {' . "\r\n" . '        $.getJSON("listings.php?id=" + encodeURIComponent(rID), function(rData) {' . "\r\n" . '            $("#now__playing__title").html(rData.title);' . "\r\n" . '            $("#now__playing__epg").html(rData.epg_title);' . "\r\n" . '            $("#now__playing__text").html(rData.epg_description);' . "\r\n" . '            window.updateTimer = setTimeout(updateChannel, 60000, rID);' . "\r\n" . '        });' . "\r\n" . '    }' . "\r\n\r\n" . '    $(document).ready(function () {' . "\r\n" . '        $(".filter__btn").click(function() {' . "\r\n" . '            var rSort = JSON.parse(\'';
echo str_replace('\'', '\\\'', json_encode(array_flip($e00f609d4f0c2c89)));
goto label316;

label302:

goto label304;

label303:

echo '        $(\'select\').select2({' . "\r\n" . '            minimumResultsForSearch: -1' . "\r\n" . '        });' . "\r\n" . '        ';

label304:

echo '        $("#search__button").click(function() {' . "\r\n" . '            var rSearch = $("#search__input").val();' . "\r\n" . '            var rOption = $("#search__select").val();' . "\r\n" . '            window.location.href = rOption + "?search=" + encodeURIComponent(rSearch);' . "\r\n" . '        });' . "\r\n" . '    });' . "\r\n" . '    ';
goto label92;

label306:

echo '        });' . "\r\n" . '        ';

label307:

if (!($E8870c6f95210f68 == 'episodes')) {
	goto label152;
}

echo '        $("#season__select").change(function() {' . "\r\n" . '            var rSplit = $(this).val().split(" ");' . "\r\n" . '            window.location.href = "episodes?id=';
goto label146;

label313:

echo '    });' . "\r\n" . '    ';

label314:

goto label197;

label315:

goto label199;

label316:

echo '\');' . "\r\n" . '            ';
$F771d40e8cf51e59 = [];

foreach (XUI::D15DCE7A49f71feA($E59d0debc75e7be8['category_ids'], $E8870c6f95210f68) as $Dbcac322b4274e46) {
	$F771d40e8cf51e59[$Dbcac322b4274e46['title']] = $Dbcac322b4274e46['id'];
}

echo '            var rFilter = JSON.parse(\'';
goto label9;

label333:

echo '/playlist/';
echo htmlentities($E59d0debc75e7be8['username']);
echo '/';
echo htmlentities($E59d0debc75e7be8['password']);
echo '/" + decodeURIComponent($(\'#download_type\').val());' . "\r\n" . '                ';
goto label240;

label347:

echo '</body>' . "\r\n" . '</html>';

?>