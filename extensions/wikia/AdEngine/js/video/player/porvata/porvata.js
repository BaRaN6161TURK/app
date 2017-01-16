/*global define*/
define('ext.wikia.adEngine.video.player.porvata', [
	'ext.wikia.adEngine.video.player.porvata.porvataPlayerFactory',
	'ext.wikia.adEngine.video.player.porvata.googleIma',
	'wikia.document',
	'wikia.log',
	'wikia.viewportObserver'
], function (porvataPlayerFactory, googleIma, doc, log, viewportObserver) {
	'use strict';
	var logGroup = 'ext.wikia.adEngine.video.player.porvata';

	function inject(params) {
		var autoPlayed = false,
			shouldResume = false,
			viewportListener;

		log(['injecting porvata player', params], log.levels.debug, logGroup);

		params.vastTargeting = params.vastTargeting || {
			src: params.src,
			pos: params.slotName,
			passback: 'porvata'
		};

		return googleIma.load()
			.then(function () {
				log('google ima loaded', log.levels.debug, logGroup);

				return googleIma.getPlayer(params);
			}).then(function (ima) {
				log(['ima player set up', ima], log.levels.debug, logGroup);

				return porvataPlayerFactory.create(params, ima);
			}).then(function (video) {
				log(['porvata video player created', video], log.levels.debug, logGroup);

				video.addEventListener('adCanPlay', function () {
					video.ima.getAdsManager().dispatchEvent('wikiaAdStarted');
				});
				video.addEventListener('allAdsCompleted', function () {
					video.ima.getAdsManager().dispatchEvent('wikiaAdCompleted');
					if (viewportListener) {
						viewportObserver.removeListener(viewportListener);
					}
				});
				video.addEventListener('start', function () {
					video.ima.getAdsManager().dispatchEvent('wikiaAdPlay');
				});
				video.addEventListener('resume', function () {
					video.ima.getAdsManager().dispatchEvent('wikiaAdPlay');
					shouldResume = false;
				});
				video.addEventListener('pause', function () {
					video.ima.getAdsManager().dispatchEvent('wikiaAdPause');
				});

				if (params.onReady) {
					params.onReady(video);
				}

				viewportListener = viewportObserver.addListener(params.container, function (isVisible) {
					if (isVisible && !autoPlayed && params.autoPlay) {
						video.play();
						autoPlayed = true;
					} else if (isVisible && shouldResume) {
						video.resume();
					} else if (!isVisible && !video.isPaused()) {
						video.pause();
						shouldResume = true;
					}
				});

				return video;
			});
	}

	return {
		inject: inject
	};
});
