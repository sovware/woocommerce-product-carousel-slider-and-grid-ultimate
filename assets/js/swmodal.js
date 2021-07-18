(function ($) {
  // Modal
  let wpcuModal = document.querySelector('.wpcu-modal-js');
  $( 'body' ).on( 'click', '.wpcu-btn-modal-js', function( e ) {
      e.preventDefault();
      var data_target = $(this).attr("data-wpcu-target");
      document.querySelector(`.${data_target}`).classList.add('wpcu-show');
  });

  $('body').on('click', '.wpcu-modal-close-js', function(e){
      e.preventDefault();
      $(this).closest('.wpcu-modal-js').removeClass('wpcu-show');
  });

  $(document).bind('click', function(e) {
      if(e.target == wpcuModal){
          wpcuModal.classList.remove('wpcu-show');
      }
  });

})(jQuery)