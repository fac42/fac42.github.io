// Rewrite in Pure JS
window.onload = function() {
	// Set Date
	const date = new Date();
	document.querySelector('#date').innerHTML = date.getFullYear();
	// Navbar Resize
	const height = window.innerHeight;
	const width = window.innerWidth;
	window.addEventListener('scroll', function() {
		const header = document.querySelector('header');
		if (width < 500) {
			if (document.documentElement.scrollTop > height * 0.60) {
				header.classList.add('shrink');
			}
			else {
				header.classList.remove('shrink');
			}
		}
		else {
			if (document.documentElement.scrollTop > height * 0.85) {
				header.classList.add('shrink');
			}
			else {
				header.classList.remove('shrink');
			}
		}
	})
}

