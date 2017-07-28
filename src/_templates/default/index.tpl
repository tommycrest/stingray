

      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" aria-expanded="true">
        <ul class="nav navbar-nav">
          {foreach item=listItem from=$navigation}
            {if $listItem eq "home"}
                <li class="active"><a href="#">{$listItem}</a></li>
            {else}
              <li><a href="#">{$listItem}</a></li>
            {/if}
          {/foreach}
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li> -->
          <li><a href="#"><span class= "{$glyphicon} {$glyphicon}-{$shopping}-{$cart}"></span>{$cartlabel}</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron">

  </div>
      <!-- bootstrap carousel -->
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
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
    <div class="col-xs-12 col-sm-4">
      <div class="panel panel-primary">
        <!--div class="panel-heading">BLACK FRIDAY DEAL</div -->
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4">
      <div class="panel panel-primary">
        <!--div class="panel-heading">BLACK FRIDAY DEAL</div -->
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4">
      <div class="panel panel-primary last-promo">
        <!--div class="panel-heading">BLACK FRIDAY DEAL</div -->
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
  <!-- div -->

  <!-- Begin Text Paragraph 3 / 3 -->
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8 paragraphTwoThird">testo da inserire qui testo da inserire qui  testo da inserire qui testo da inserire qui testo da inserire qui testo da inserire qui testo da inserire qui testo da inserire qui </div>
    <div class="col-xs-6 col-md-4"> </div>
  </div>
  <!-- End Text Paragraph         -->

  <!-- Preview container -->
  <!-- div class="container" -->
  <div class="row">
    <div class="col-xs-12 col-sm-4">
      <div class="panel panel-primary">
        <!--div class="panel-heading">BLACK FRIDAY DEAL</div -->
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$panelOneText}</div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4">
      <div class="panel panel-primary">
        <!--div class="panel-heading">BLACK FRIDAY DEAL</div -->
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$panelSecondText}</div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4">
      <div class="panel panel-primary last-promo">
        <!--div class="panel-heading">BLACK FRIDAY DEAL</div -->
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{$panelThirdText}</div>
      </div>
    </div>
  </div>
  <!-- div -->

</div>
