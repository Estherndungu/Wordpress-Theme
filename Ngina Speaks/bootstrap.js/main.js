const menuIcon = document.getElementById('menu-icon');
const slideOutMenu = document.getElementById('slideout-menu');


menuIcon.addEventListener('click', function(){
	if(slideOutMenu.style.opacity == '1'){
		slideOutMenu.style.opacity = '0';
		slideOutMenu.style.pointerEvents = 'none';

	}
	else{
		slideOutMenu.style.opacity = '1';
		slideOutMenu.style.pointerEvents = 'auto';
	}

})

// START POPULAR POSTS
/* Demo purposes only */
var snippet = [].slice.call(document.querySelectorAll('.hover'));
if (snippet.length) {
  snippet.forEach(function (snippet) {
    snippet.addEventListener('mouseout', function (event) {
      if (event.target.parentNode.tagName === 'figure') {
        event.target.parentNode.classList.remove('hover')
      } else {
        event.target.parentNode.classList.remove('hover')
      }
    });
  });
}




// SINGLE POST
