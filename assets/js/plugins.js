jQuery.fn.shorten = function(settings) {
  var config = {
    showChars : 100,
    ellipsesText : "",
    moreText : "Show More",
    lessText : "Show Less"
  };
 
  if (settings) {
    $.extend(config, settings);
  }
 
  $('.morelink').live('click', function() {
    var $this = $(this);
    if ($this.hasClass('less')) {
      $this.removeClass('less');
      $this.html(config.moreText);
    } else {
      $this.addClass('less');
      $this.html(config.lessText);
    }
    $this.parent().prev().toggle();
    $this.prev().toggle();
    return false;
  });
 
  return this.each(function() {
    var $this = $(this);
 
    var content = $this.html();
    if (content.length > config.showChars) {
      var c = content.substr(0, config.showChars);
      var h = content.substr(config.showChars , content.length - config.showChars);
      var html = c + '<span class="moreellipses">' + config.ellipsesText + '</span><span class="morecontent"><span>' + h + '</span><a href="javascript://nop/" class="link morelink">' + config.moreText + '</a></span>';
      $this.html(html);
      $(".morecontent span").hide();
      
    }
  });
}