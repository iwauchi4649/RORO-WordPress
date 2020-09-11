jQuery(".toggle").on("click", function () {
  jQuery('.toggle').toggleClass('active');
  jQuery('.header__container__responsive-button').toggleClass('active');
  jQuery('.header__container__global-menu').toggleClass('active');
});