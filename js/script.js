document.getElementById('menu-toggle').addEventListener('click', function () {
	document.getElementById('mobile-menu').classList.toggle('hidden');
});

document.addEventListener('DOMContentLoaded', function () {
	const links = document.querySelectorAll('.nav-link');
	const currentPath = window.location.pathname;

	links.forEach((link) => {
		if (currentPath.endsWith(link.getAttribute('href'))) {
			link.classList.add('text-green-700', 'font-semibold', 'underline');
		}
	});
});
