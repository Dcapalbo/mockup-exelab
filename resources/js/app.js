
// make a scroll function to scroll the dom
function smoothScroll(elm, duration) {
    // get the element position 
    var elmPos = elm.getBoundingClientRect().top;
    console.log(elmPos);
    // get the starting position 
    var startPos = window.pageYOffset;
    console.log(startPos);
    // get the difference 
    var dist = elmPos - startPos;
    console.log(dist);
    var starTime = null;

    function animation(currenTime) {
        if (starTime === null) starTime = currenTime;
        var timeElapsed = currenTime - starTime;
        var run = ease(timeElapsed, startPos, dist, duration);
        window.scrollTo(0, run);
        if ( timeElapsed < duration) requestAnimationFrame(animation);
    }
    // make an ease function for the smooth effect 
    function ease(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t --;
        return - c / 2 * (t * (t - 2) -1) +b;
    }
    requestAnimationFrame(animation);
};

// define button
var moreButton = document.querySelector('.more');
// define the landing selector of mix 
var landingForm = document.getElementById('landing_form');
// add eventlistener and invoke the smooth function for the landing mix
moreButton.addEventListener('click', function() {
    smoothScroll(landingForm, 1000);
});