function revealOnScroll() {
	const elementsLeft = document.querySelectorAll('.slide-in-left');
	const elementsRight = document.querySelectorAll('.slide-in-right');
	const windowHeight = window.innerHeight;
  
	elementsLeft.forEach(el => {
	  const top = el.getBoundingClientRect().top;
	  if (top < windowHeight - 100) {
		el.classList.add('active');
	  }
	});
  
	elementsRight.forEach(el => {
	  const top = el.getBoundingClientRect().top;
	  if (top < windowHeight - 100) {
		el.classList.add('active');
	  }
	});
  }
  
  window.addEventListener('scroll', revealOnScroll);
  window.addEventListener('load', revealOnScroll);
  