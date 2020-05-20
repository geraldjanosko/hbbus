(function($){
  var defaultURL = drupalSettings.path.baseUrl + drupalSettings.path.themeUrl + '/images/default.jpg';
  $( ".image-block-img" ).on('error', function() {
    $(this).attr("src", defaultURL);
  })
}(jQuery));
