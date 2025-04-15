document.getElementById('menu-toggle').addEventListener('click', function () {
	document.getElementById('mobile-menu').classList.toggle('hidden');
});

const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach((link) => {
	const dropdown = link.nextElementSibling;

	link.addEventListener('click', (e) => {
		e.stopPropagation();

		navLinks.forEach((otherLink) => {
			const otherDropdown = otherLink.nextElementSibling;
			if (otherDropdown !== dropdown) {
				otherDropdown.classList.add('hidden');
			}
		});

		dropdown.classList.toggle('hidden');
	});
});
