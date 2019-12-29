<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Imghere - 假圖產生器</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="/css/bootstrap-darkly.css" media="screen">
    <link rel="stylesheet" href="/css/custom.css" media="screen">
  </head>
  <body>
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="../" class="navbar-brand">Imghere</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
    <div class="container">
      <div class="jumbotron">
          <h1 class="display-3">Imghere</h1>
          <p class="lead">使用API產生假圖，讓您在開發網頁或者要塞圖片到某些地方時可以直接使用！</p>
          <p class="lead">
              <a class="btn btn-primary btn-lg" href="" target="__blank" role="button">Use It</a>
          </p>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <h1 id="typography">How to use</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="bs-component">
            <p>你需要一個200x100大小的圖片，那你只需要在HTML的img tag裡面，打上<span>https://imghere.imin.tw/<圖片大小></span></p>
            <code>
              <?php echo htmlspecialchars('<img src="https://imghere.imin.tw/200x100">');?>
            </code>
            <p><img src="https://imghere.imin.tw/200x100"> 就會出現一個這樣的暫時取代圖(Placeholder)出現 </p>
            <hr>
            <p>你也可以自己修改圖片內的文字，只需要在網址後面加上 <code>text</code> 的參數</p>
            <code>
              <?php echo htmlspecialchars('<img src="https://imghere.imin.tw/200x100?text=Testing">');?>
            </code>
            <p><img src="https://imghere.imin.tw/200x100?text=Testing"></p>
            <hr>
            <p>修改背景顏色或者文字顏色也是OK的喔，分別使用 <code>bgColor</code> 和 <code>textColor</code> 這兩個參數 <small class="text-muted">(hex代碼不需要帶#字號)</small></p>
            <code>
              <?php echo htmlspecialchars('<img src="https://imghere.imin.tw/200x100?text=TestColor&bgColor=c78dd8&textColor=ffffff">');?>
            </code>
            <p><img src="https://imghere.imin.tw/200x100?text=TestColor&bgColor=c78dd8&textColor=ffffff"></p>
          </div>
        </div>
      </div>
        
      <footer id="footer">
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="float-lg-right"><a href="#top">Back to top</a></li>
              <li><a href="https://github.com/minhsieh/imghere/">GitHub</a></li>
              <li><a href="javascript:;">API</a></li>
              <li><a href="javascript:;">Donate</a></li>
            </ul>
            <p>Made by <a href="https://imin.tw">Min</a>.</p>
            <p>Based on <a href="https://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fontawesome.io/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="https://fonts.google.com/" rel="nofollow">Google</a>.</p>
          </div>
        </div>
      </footer>
    </div>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
  </body>
</html>
