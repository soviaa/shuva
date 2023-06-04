var popupViews = document.querySelectorAll('.popup_view');
var popupBtns = document.querySelectorAll('.popup-btn');
var closeBtns = document.querySelectorAll('.close-btn-popup');

var openPopup = function(popupClick) {
  popupViews[popupClick].classList.add('active');
};

var closePopup = function() {
  popupViews.forEach((popupView) => {
    popupView.classList.remove('active');
  });
};

popupBtns.forEach((popupBtn, i) => {
  popupBtn.addEventListener("click", () => {
    openPopup(i);
  });
});

closeBtns.forEach((closeBtn) => {
  closeBtn.addEventListener("click", () => {
    closePopup();
  });
});