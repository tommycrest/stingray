  <div class="container" ng-controller="HomeCtrl">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <!--li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li -->
      <li data-slide-to="0" class="active"></li>
      <li data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="_templates/default/imgs/slide_uno.jpg" alt="slide uno">
      </div>

      <div class="item">
        <img src="_templates/default/imgs/slide_due.jpg" alt="slide due">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Preview container -->
  <!-- div class="container" -->
  <div class="row">
    <div class="col-xs-12 col-sm-4"  ng-repeat="homepromobox in homepromoboxs">
      <div class="panel panel-primary" ng-if="$index <=2">
        <div class="panel-body"><img src=<?echo ENDPOINT?>{{homepromobox.image}} class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{{homepromobox.label}}</div>
      </div>
    </div>
  </div>

  <!-- Begin Text Paragraph 3 / 3 -->
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8 paragraphTwoThird">testo da inserire qui testo da inserire qui  testo da inserire qui testo da inserire qui testo da inserire qui testo da inserire qui testo da inserire qui testo da inserire qui </div>
    <div class="col-xs-6 col-md-4"> </div>
  </div>
  <!-- End Text Paragraph         -->

  <!-- Preview container -->
  <!-- div class="container" -->
  <div class="row">
    <div class="col-xs-12 col-sm-4"  ng-repeat="homepromobox in homepromoboxs">
      <div class="panel panel-primary" ng-if="$index >2">
        <div class="panel-body"><img src=<?echo ENDPOINT?>{{homepromobox.image}} class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{{homepromobox.label}}</div>
      </div>
    </div>
  </div>
</div>

<!-- /div -->
