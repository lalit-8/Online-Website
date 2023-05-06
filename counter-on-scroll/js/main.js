window.addEventListener('scroll', function() {
  var counter = document.querySelector('#counter');
  var oTop = counter.getBoundingClientRect().top - window.innerHeight;
  
  if (window.pageYOffset > oTop) {
    var counterValues = document.querySelectorAll('.counter-value');
    counterValues.forEach(function(counterValue) {
      var countTo = counterValue.getAttribute('data-count');
      var countNum = parseInt(counterValue.innerText);
      var animationDuration = 1000;
      var increment = Math.ceil(countTo / (animationDuration / 20));
      
      var countAnimation = setInterval(function() {
        countNum += increment;
        counterValue.innerText = countNum;
        if (countNum >= countTo) {
          clearInterval(countAnimation);
          counterValue.innerText = countTo;
        }
      }, 20);
    });
  }
});