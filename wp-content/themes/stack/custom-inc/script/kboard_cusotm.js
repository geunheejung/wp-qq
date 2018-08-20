jQuery(document).ready(function(){
  var customTitleEle = jQuery('.kboard-list-title');

  customTitleEle.each(function (index, ele) {

    jQuery(ele).off('click').on('click', function() {
      var kboardContent = jQuery(this).children('#list-content__toggle');

      kboardContent.toggleClass('hide');
    })
  });
});