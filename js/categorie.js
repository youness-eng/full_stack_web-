
var $grid = $('.grid').isotope({
    itemSelector: '.element-item'
  });
  

  var filters = {};
  
  $('.filters').on( 'click', '.button', function() {
    var $this = $(this);
    var $buttonGroup = $this.parents('.button-group');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    filters[ filterGroup ] = $this.attr('data-filter');
    var filterValue = concatValues( filters );
    $grid.isotope({ filter: filterValue });
  });
  
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
    
  function concatValues( obj ) {
    var value = '';
    for ( var prop in obj ) {
      value += obj[ prop ];
    }
    return value;
  }