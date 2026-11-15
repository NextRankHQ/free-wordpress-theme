/**
 * ClimateCraft Frontend Micro-Interactions (Vanilla ES6, Zero Dependencies)
 * - Sticky header elevation on scroll
 * - Accessible Before/After Repipe & Water Heater Comparison Slider (Mouse, Touch & Keyboard)
 */
(function () {
	'use strict';

	// 1. Sticky Header Elevation
	const header = document.querySelector('header.wp-block-template-part');
	if (header) {
		const onScroll = () => {
			header.classList.toggle('is-scrolled', window.scrollY > 12);
		};
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}

	// 2. Accessible Before / After Project Slider
	document.querySelectorAll('.climatecraft-ba').forEach((slider) => {
		const range = slider.querySelector('.climatecraft-ba__range');
		if (!range) {
			return;
		}
		const updateSplit = () => {
			slider.style.setProperty('--ba-pos', `${range.value}%`);
		};
		range.addEventListener('input', updateSplit);
		range.addEventListener('change', updateSplit);
		updateSplit();
	});
})();
