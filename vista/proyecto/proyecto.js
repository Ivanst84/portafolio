$(document).ready(function() {
    $('.btn-primary').click(function(e) {
      e.preventDefault();
      var title = $(this).siblings('.card-title').text();
      var imgSrc = $(this).siblings('.card-img-top').attr('src');
      var description = $(this).siblings('.card-text').text();
      var link = $(this).attr('href');
      $('#modalProyecto .modal-title').text(title);
      $('#modalProyecto .modal-body img').attr('src', imgSrc);
      $('#modalProyecto .modal-body p').text(description);
      $('#modalProyecto .modal-footer a').attr('href', link);
      $('#modalProyecto').modal('show');
      initSlider()
    });
 
   

});
  $(document).ready(function() {
    $('.card').click(function() {
      $(this).toggleClass('border-primary');
    });
  });
  function initSlider() {
    const radios = document.getElementsByName("slider");
    const slides = document.querySelectorAll(".slide");
    console.log(slides);
    radios.forEach((radio, index) => {
      radio.addEventListener("change", () => {
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
  
        slides[index].classList.add("active");
      });
    });
  }

$('#modalProyecto').on('shown.bs.modal', function() {
  initSlider();
});