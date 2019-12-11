/* ==================================================================
   Script.js
   ================================================================== */

/* 関数 ------------------------------------------------------------- */

var $a = jQuery.noConflict(); 
$a(function() {
	// ウインドウ幅取得
	var windowWidth;
	function getWindowWidth() {
		return window.innerWidth ? window.innerWidth: $a(window).width();
	}
	// 表示モード取得（ウインドウ幅768px以下→sp、769px以上→pc）
	var viewMode;
	function getViewMode() {
		return (getWindowWidth() > 768) ? 'pc' : 'sp';
	}
	// PC向けヘッダ表示位置調整
	var headerHeight = 112;
	var headerNavHeight = 55;
	function headerSet() {
		if(getViewMode() === 'pc' && $a(window).scrollTop() > headerHeight) {
			$a('header').addClass('fixed').stop().animate({'top' : -(headerHeight - headerNavHeight) + 'px'}, 'slow');
			$a('header').css({'left' : -$a(window).scrollLeft()});
		} else if(getWindowWidth() > 768 && $a(window).scrollTop() < headerNavHeight) {
			$a('header').stop().removeClass('fixed').removeAttr('style');
		}
	}
	// PC向け「トップへ戻る」ボタン表示位置調整
	function setToTopBtn() {
		var btn = $a('#globalFooter_toTopBtn');
		var footerPositionY = $('.globalFooter').offset().top;
		var offsetY = $a(window).scrollTop() + $a(window).height();
		if(viewMode === 'pc' && offsetY > footerPositionY) {
				$a(btn).css({'bottom' : (offsetY - footerPositionY + 10) + 'px'});
		} else {
			$a(btn).removeAttr('style');
		}
	}
	// Andoroid 4.4以前の標準ブラウザかどうかを判定
	function isOldAndroidBrowser() {
		var ua = (navigator.userAgent).toLowerCase();
		if(ua.indexOf('android') > 0 && ua.indexOf('linux; u') > 0 && ua.indexOf('chrome') === -1) {
			var version = parseFloat(ua.slice(ua.indexOf('android') + 8));
			if(version < 4.4) { return true; }
		}
		return false;
	}
	// スライドの高さを設定
	function setSlideHeight() {
		if(getViewMode() === 'sp') {
			var image = new Image();
			var image_src = $a('.slide:visible img.onlySP').attr('src');
			if(image_src){
				image.src = image_src;
				var slideWrapperHeight = Math.round(getWindowWidth() / image.width * image.height);
				$a('.slideWrapper').css({'width' : '100%', 'height' : slideWrapperHeight + 'px'});
			}
		} else {
			$a('.slideWrapper').css({'width' : '1300px', 'height' : '450px'});
		}
	}
	// サブメニュー（メガドロップダウンメニュー）の左右の余白を設定
	function setSubMenuMargin() {
		if(getViewMode() === 'pc') {
			var subMenuMargin = ($a('html').prop('clientWidth') - 950) / 2;
			if($a('html').prop('clientWidth') < 1000) { subMenuMargin = 25; }
			$a('.globalSubNav_items').css({
				'margin-left' : -subMenuMargin,
				'margin-right' : -subMenuMargin,
				'padding-left' : subMenuMargin,
				'padding-right' : subMenuMargin
			});
		} else {
			$a('.globalSubNav_items').removeAttr('style');
		}
	}
	// recommendセクションの順序を変更
	function setRecommendOrder() {
		if(getViewMode() === 'pc') {
			$a('#recommend').insertAfter('.columnWrapper');
		} else {
			$a('#recommend').insertBefore('.subColumn');
		}
	}
	// カレント表示設定
	function setCurrentMenu() {
		var globalNav = $a('.globalNav_item');
		globalNav.removeClass('current');
		if(getViewMode() === 'pc') {
			for(var i = 0; i < globalNav.length; i++) {
				if(location.pathname.indexOf($a(globalNav[i]).children('a').attr('href')) > -1) {
					$a(globalNav[i]).addClass('current');
				}
			}
		}
	}
	// サブコラムに合わせてメインコラムの高さを調整
	function setWrapperHeight() {
		if($a('.subColumn').length > 0 && $a('.subColumn').outerHeight() > $a('.columnWrapper').height()) {
			$a('.columnWrapper').height($a('.subColumn').outerHeight());
		}
	}
	// 同一オフセットのボックスの高さを調整
	function adjustHeight() {
		var adjustElemList = $a('.js-adjustHeight, ul.anchor li, ul.navi a, dl.aboutOffice');
		adjustElemList.height('auto');

		for(var i = 0; i < adjustElemList.length; i++) {
			var currentOffset = $a(adjustElemList[i]).offset().top;
			var sameTopValueElemList = [];
			sameTopValueElemList.push(adjustElemList[i]);
			var highest = $a(adjustElemList[i]).height();
			for(var j = i + 1; j < adjustElemList.length; j++) {
				if($a(adjustElemList[j]).offset().top === currentOffset) {
					sameTopValueElemList.push(adjustElemList[j]);
					highest = Math.max(highest, $a(adjustElemList[j]).height());
				}
			}
			if(highest === 0) {
				for(j = 0; j < sameTopValueElemList.length; j++) {
					var taregetChildList = $a(sameTopValueElemList[j]).children();
					for(var k = 0; k < taregetChildList.length; k++) {
						highest = Math.max(highest, $a(taregetChildList[j]).height());
					}
				}
			}
			for(j = 0; j < sameTopValueElemList.length; j++) {
				$(sameTopValueElemList[j]).height(highest);
			}
			i += sameTopValueElemList.length - 1;
		}
	}
	// Andoroid 4.4以前の標準ブラウザにおけるflexbox対応
	function wrapBox() {
		var wrapBox = $a('.js-wrapBox');
		for(var i = 0; i < wrapBox.length; i++) {
			var childBox = $a(wrapBox[i]).children();
			var addWrapBoxLength = (childBox.length / 2) - 1;
			for(var j = 0; j < addWrapBoxLength; j++) {
				$a(wrapBox[i]).addClass('js-wrapBox-copy').clone().insertAfter(wrapBox[i]);
			}
			for(j = 0; j < addWrapBoxLength + 1; j++) {
				for(var k = 0; k < childBox.length; k++) {
					if(k < j * 2 || k > j * 2 + 1) {
						$a('.js-wrapBox-copy').eq(j).children().eq(k).addClass('delete');
					}
				}
			}
			$a('.js-wrapBox-copy > .delete').remove();
			$a('.js-wrapBox-copy').removeClass('js-wrapBox-copy');
		}
	}
	function anchorScroll(hash, offset) {
		var targetOffsetTop = $a(hash).offset().top;
		$a('body,html').animate({scrollTop:targetOffsetTop - offset}, 500, 'swing');
	}

/* メニュー表示制御（PC） ------------------------------------------- */

	var timerId = 0;
	var globalNavItem = $a('.globalHeader_pc .globalNav_item');
	globalNavItem.on({
		'mouseenter' : function(e) {
			clearTimeout(timerId);
			var currentGlobalNavItem = $a(this);
			var openedGlobalSubNavItems = $a('.globalHeader_pc .globalSubNav_items:visible');
			var delayTime = (openedGlobalSubNavItems.length !== 0) ? 200 : 0;

			globalNavItem.not(this).removeClass('subMenuOpen active');
			if(currentGlobalNavItem.children('ul').length > 0) {
				currentGlobalNavItem.addClass('subMenuOpen');
			} else {
				currentGlobalNavItem.addClass('active');
			}

			timerId = setTimeout(function() {
				if(currentGlobalNavItem.children('ul').length === 0) {
						currentGlobalNavItem.siblings().children('ul').fadeOut('fast');
				} else if(!openedGlobalSubNavItems.parent().is(currentGlobalNavItem)) {
					currentGlobalNavItem.children('ul').fadeIn('fast', function() {
						openedGlobalSubNavItems.fadeOut('fast');
					});
				}
			}, delayTime);
		},
		'mouseleave' : function(e) {
			var currentElement = $a(e.relatedTarget).closest('.globalNav_item');
			if(currentElement.length === 0) {
				globalNavItem.removeClass('subMenuOpen active');
				globalNavItem.children('ul').fadeOut('fast');
			}
		}
	});

/* メニュー表示制御（SP） ------------------------------------------- */

	$a('.globalHeader_sp .globalNav_item > a').on('click', function() {
		var currentGlobalNavItem = $a(this).parent();
		currentGlobalNavItem.toggleClass('active');
		if(currentGlobalNavItem.children('ul').length > 0) {
			currentGlobalNavItem.children('ul').slideToggle();
			return false;
		}
	});

/* アンカースムーズスクロール --------------------------------------- */

	$a('a[href*=#]').on('click', function() {
		var targetURL= $a(this).attr("href");
		if(targetURL.indexOf('#') === 0) {
			anchorScroll(targetURL, (getViewMode() === 'pc') ? 170 : 60);
		} else {
			anchorScroll('#' + (targetURL.split('#'))[1], (getViewMode() === 'pc') ? 63 : 60);
		}
		return false;
	});

/* SPメニュー開閉制御 ----------------------------------------------- */

	var bodyOffsetTop;
	$a('.globalHeader_menuOpen').on('click', function() {
		bodyOffsetTop = ($a('body').scrollTop() > $a('html').scrollTop()) ? $a('body').scrollTop() : $a('html').scrollTop();
		$a('body').css({'position' : 'fixed', 'width' : '100%', 'top' : -bodyOffsetTop});
		$a('.globalHeader_bg').show();
		$a('.globalHeader_slideArea, .globalHeader_menuClose').animate({'right' : '0%'}, 350);
	});
	$a('.globalHeader_menuClose').on('click', function() {
		bodyOffsetTop = $a('body').offset().top;
		if(isOldAndroidBrowser()) {
			$a('body').removeAttr('style').scrollTop(-bodyOffsetTop);
		} else {
			$a('html, body').removeAttr('style').scrollTop(-bodyOffsetTop);
		}
		$a('.globalHeader_slideArea, .globalHeader_menuClose').animate({'right' : '-80%'}, 350);
		$a('.globalHeader_bg').hide();
	});

/* 「もっと見る」ボタン --------------------------------------------- */

	var moreBtn = $a('.moreBtn');
	moreBtn.on('click', function() {
		var showList = moreBtn.prev().children('.hide');
		var max =Math.min(15, showList.length);
		for(var i =0; i < max; i++) {
			showList.eq(i).fadeIn().removeClass('hide');
		}
		if(moreBtn.prev().children('.hide').length === 0) {
			moreBtn.css({'display' : 'none'});
		}
	});

/* 「地図を表示」ボタン --------------------------------------------- */

	$a(function(){
		$a('.acTrigger').click(function(){
			if($a(this).is('.open')){
				$a(this).removeClass('open');
				$a(this).next().slideUp('slow');
			} else {
				$a(this).addClass('open');
				$a(this).next().slideDown('slow');
			}
		});
	});

/* ロード時処理 ----------------------------------------------------- */

	$a(window).on('load', function () {
		if(location.hash.length > 0) {
			var targetOffsetTop = $(location.hash).offset().top;
			history.replaceState(null, null, location.pathname);
			var offset = (getViewMode() === 'pc') ? 63 : 60;
			$a('body,html').animate({scrollTop:targetOffsetTop - offset}, 500, 'swing');
		}

		if(isOldAndroidBrowser()) {
			$a('body').addClass('oldAndroidBrowser');
			wrapBox();
		}
		$a('.blank > a, a.blank, .pdfLink a:not(.noIcon), .businessReport a, .pageLinkTxtList a').attr('target', '_blank');

		var fitImg = $a('.mediaBox .imgBox img');
		for(var i = 0; i < fitImg.length; i++) {
			var image = new Image();
			image.src = $a(fitImg).eq(i).attr('src');
			if(image.width < 340) {
				$a(fitImg).eq(i).width(image.width);
			}
		}
		if(getViewMode() === 'pc') {
			setWrapperHeight();
		}

		if($a('.slideWrapper').length > 0) {
			$a('.slideWrapper').cycle({
				fx:      'fade',
				speed:   800,
				timeout: 5000,
			});
		}
		if($a('#recommend').length > 0) {
			setRecommendOrder();
		}
		adjustHeight();
		headerSet();
		setCurrentMenu();
		setSlideHeight();
		setSubMenuMargin();
		setToTopBtn();
		viewMode = getViewMode();
		windowWidth = getWindowWidth();
	});

/* スクロール時処理 ------------------------------------------------- */
	$a(window).on('scroll', function() {
		headerSet();
		setToTopBtn();
	});

/* リサイズ時処理 --------------------------------------------------- */

	var timer = false;
	$a(window).on('resize', function() {
		if (timer !== false) {
			clearTimeout(timer);
		}
		timer = setTimeout(function() {
			if(isOldAndroidBrowser()) {
				wrapBox();
			}
			if(getWindowWidth() !== windowWidth) {
				adjustHeight();
				setSlideHeight();
				if(getViewMode() !== viewMode) {
					if(getViewMode() === 'sp') {
						$a('header').removeClass('fixed').removeAttr('style');
						$a('.columnWrapper').height('auto');
						$a('.globalSubNav_items').removeAttr('style');
					} else {
						$('html').removeAttr('style');
						headerSet();
						setCurrentMenu();
					}
				}
				if($a('#recommend').length > 0) {
					setRecommendOrder();
				}
			setToTopBtn();
			}
			if(getViewMode() === 'pc') {
				setSubMenuMargin();
				setWrapperHeight();
			}
			viewMode = getViewMode();
			windowWidth = getWindowWidth();
		}, 200);
	});
});