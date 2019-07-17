$(document).ready(function() {
  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    masonry: {
      columnWidth: 200,
      gutter: 20
    }
  });
  $('#sidebarCollapse').on('click', function () {
    setTimeout(() => {
      $grid.isotope('reloadItems').isotope()
    },250);
  });
});


  
//   $('.append-button').on( 'click', function() {

//       var rand = Math.floor(Math.random() * 6) + 1;
//       for( var i = 0; i < rand; i++){
//         // create new item elements
//         var $items = getItemElement();
//         // append elements to container
//         $grid.append( $items )
//           // add and lay out newly appended elements
//           .isotope( 'appended', $items );
//       }
//   });
  
//   // make <div class="grid-item grid-item--width# grid-item--height#" />
//   function getItemElement() {
//     var imgs = ['img/photos-dart/2016-04-12-003,medium.2x.1484501038.jpg','img/photos-dart/2016-04-12-004,medium.2x.1484501042.jpg','img/photos-dart/2016-08-01-1,medium.2x.1484500951.jpg'];

//     var img = imgs[Math.floor(Math.random() * imgs.length)];
//     var $item = $('<div class="grid-item"><img src="'+img+'"></div>');
//     // add width and height class
//     var wRand = Math.random();
//     var hRand = Math.random();
//     var widthClass = wRand > 0.85 ? 'grid-item--width3' : wRand > 0.7 ? 'grid-item--width2' : '';
//     var heightClass = hRand > 0.85 ? 'grid-item--height3' : hRand > 0.5 ? 'grid-item--height2' : '';
//     $item.addClass( widthClass ).addClass( heightClass );
//     return $item;
//   }

//   // filtering 

// $('.filters-button-group .button').on('click', function(){
//   var $class = $(this).attr('data-filter');
//   $grid.isotope({filter: $class})
// })