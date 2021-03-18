var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/s/AKfycbxicWvVuwVdIlNVrenh0RXQhIdpHLLl4HzMCXqXgrIug5dSPThVsnK21OssqvuZwYD1LA/exec'

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})
