$(document).ready(function(){

  // JS Search Click Event
  $('#js-search button').on('click', function(event) {
    event.preventDefault();
    let val = $('#js-search input').val();
    console.log('value: ' + val);
    news_search_js(val);
  })

  // PHP Search Click Event
  $('#php-search button').on('click', function(event) {
    event.preventDefault();
    let val = $('#php-search input').val();
    console.log('value: ' + val);
    news_search_php(val);
  })


});

function news_search_js(query) {
  const api_key = "&apiKey=61c42825ab754c2b973d3041c2523b3f";
  var queryURL = "https://newsapi.org/v2/everything?sources=google-news&language=en&q=" + query + api_key;

  $.ajax({
    url: queryURL,
    method: "GET"
  }).done(function(response) {
    // console.log(response.articles);
    build_list(response.articles);
  });
}

function news_search_php(val) {
  let search_obj = {
    do_what: 'search',
    search_val: val
  }

  $.ajax({
    type: 'GET',
    url: 'controllers/search.ajax.php',
    data: search_obj,
    dataType: 'json',
    success: function(response){
      // console.log(response.articles);
      build_list(response.articles)
    }
  })
}

function build_list(articles) {
  $('#results').empty();
  Object.keys(articles).forEach(key => {
    let ak = articles[key];
    let img_url = (ak['urlToImage'])?ak['urlToImage']:'public/assets/placeholder.jpg';
    // console.log(key, articles[key])
    let new_card = `<div class="col card-deck">
                      <div class="card mb-3">
                        <div class="row no-gutters">
                          <a href="` + ak['url'] + `" target="blank">
                            <div>
                              <img src="` + img_url + `" class="card-img" alt="` + ak['title'] + `">
                            </div>
                            <div>
                              <div class="card-body">
                                <h4 class="card-title">` + ak['title'] + `</h4>
                                <p class="card-text">` + ak['description'] + `</p>
                                <p class="card-text"><small class="text-muted">` + ak['source']['name'] + `</small></p>
                              </div>
                            </div>
                           </a> 
                        </div>
                      </div>
                    </div>`;

    $('#results').append(new_card);
  });
}

