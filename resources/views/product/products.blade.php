@extends('layouts.app')

@section('content')

<div class="section-1">
<div class="products-main">
  <div class="description">
    <p>Elevate Your Space with </p><h4>Shuva Furniture & Furnishing,</h4><p> Where Style Meets Function.</p>
  </div>
  <div class="scrolldown">

</div>
  <div class="products">
    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="mySlides" src="/images/homepage2.jpg" alt="chair">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="mySlides" src="/images/homepage5.jpg" alt="chair" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="mySlides" src="/images/homepage3.jpg" alt="chair">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="mySlides" src="/images/homepage1.jpg" alt="chair">

    <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  
  </div>
</div>
</div>
<div class="section-2">
  productsss
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs((slideIndex += n));
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = x.length;
  }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    x[i].style.transform = "translateX(5%)"; 
  }
  x[slideIndex - 1].style.display = "block";

  // Apply transition for smooth movement
  setTimeout(function() {
    x[slideIndex - 1].style.transform = "translateX(0)";
  }, 50);
}

// Auto slide functionality
var interval = setInterval(function() {
  plusDivs(1);
}, 3000); // Change slide every 3 seconds

// Pause slide on hover
var slideshowContainer = document.querySelector('.products');
slideshowContainer.addEventListener('mouseover', function() {
  clearInterval(interval);
});

// Resume slide on mouseout
slideshowContainer.addEventListener('mouseout', function() {
  interval = setInterval(function() {
    plusDivs(1);
  }, 3000); // Change slide every 3 seconds
});
</script>
@endsection
