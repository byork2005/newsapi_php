<html>
  <head>
    <title>PHP Test</title>
    <?php require 'views/head_links.php'; ?>
  </head>

  <body>
    <div class="container">
      <h1>News API Example</h1>
      <div>
        <h4>Javascript Ajax Search (Google News)</h4>
        <form id="js-search">
          <div class="form-group">
            <label class="d-none" for="js-search">Search</label>
            <input
              name="js-search"
              type="text"
              class="form-control"
              placeholder="Ex. Florida"
              maxlength="30"
            />
            <br />
            <button class="btn btn-primary">Submit</button>
          </div>
        </form>
        <br />
        <h4>PHP Ajax Search (Top Headlines)</h4>
        <form id="php-search">
          <div class="form-group">
            <label class="d-none" for="php-search">Search</label>
            <input
              name="php-search"
              type="text"
              class="form-control"
              placeholder="Ex. Florida"
              maxlength="30"
            />
            <br />
            <button class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <?php require 'views/results.html'; ?>
    </div>
    <?php require 'views/footer_scripts.php'; ?>
  </body>
</html>
