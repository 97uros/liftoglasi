jQuery(document).ready(function($) {
  var page = 2;
  var loading = false;
  var loader = $('<div id="loader"><i class="fas fa-spinner fa-spin"></i></div>');

  $('#post-container').after(loader);
	loader.hide();

  $('#load-more').on('click', function() {
    if (!loading) {
      loading = true;
      $(this).text('...');
      $.ajax({
        url: ajax_search_params.ajax_url,
        type: 'POST',
        data: {
          action: 'ajax_load_more',
          page: page
        },
        success: function(response) {
          if (response.success) {
            $('#post-container').append(response.data.posts);
            page++;
            if (!response.data.more_posts) {
              $('#load-more').hide();
            } else {
              $('#load-more').text('Učitaj više');
            }
            loading = false;
          }
        }
      });
    }
  });

  $('#search-field').on('keyup', function() {
    var searchField = $(this).val();
    $('#post-container').hide(); 
    loader.show();
    $.ajax({
      url: ajax_search_params.ajax_url,
      type: 'POST',
      data: {
        action: 'ajax_live_search',
        search: searchField
      },
      success: function(response) {
        $('#post-container').html(response);
        if ($(response).length > 6) {
          $('#load-more').show();
        } else {
          $('#load-more').hide();
        }
        loader.hide();
        $('#post-container').show();
      }
    });
  });

  $('.widget_categories .dropdown-item').on('click', function(e) {
    e.preventDefault();
    var categoryID = $(this).data('category-id');
    $('#post-container').hide();
    loader.show();
    $.ajax({
      url: ajax_search_params.ajax_url,
      type: 'POST',
      data: {
        action: 'ajax_category_filter',
        category_id: categoryID
      },
      success: function(response) {
        $('#post-container').html(response.posts);
        if ($(response.posts).length > 6) {
          $('#load-more').show();
        } else {
          $('#load-more').hide();
        }
        loader.hide();
        page = 2;
      },
      error: function(errorThrown) {
        console.log(errorThrown);
        loader.hide();
        $('#post-container').show();
      }
    });
  });
});