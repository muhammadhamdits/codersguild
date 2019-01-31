const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav);

const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
	indicators: false,
	height: 500,
	duration: 600,
	interval: 4000
});