<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BKKBN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ url('dist/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
        <script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('jquery/jquery-1.11.1.min.js') }}"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url('css/modal.css') }}">
        <link rel="stylesheet" href="{{ url('css/card.css') }}">
    </head>
    <body style="background-color: #00b7ee; overflow: hidden; padding-right: 10px;">
      <div class="content" style="background-color: #00b7ee; ">
        <br>
        <div class="row">
          <div class="col-md-3" style="margin-left: 10px;">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
      				<div class="container">
      					<div class="front" style="background-image: url(https://unsplash.it/500/500/); height: 94vh;">
      						<div class="inner">
      							<p>Buku Tamu</p>
                    <span>Lorem ipsum</span>
      						</div>
      					</div>
      					<div class="back" style="height: 94vh;">
      						<div class="inner">
      						  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
      						</div>
      					</div>
      				</div>
      			</div>
          </div>

          <div class="col-md-7" style="margin-left: -25px;">
            <center><img src="{{ url('images/bkkbn-logo-putih.png') }}" class="img-responsive" style="height: 100px;"></center>
            <div class="row">
              <div class="col-md-3">
                <div class="col" ontouchstart="this.classList.toggle('hover');">
          				<div class="container">
          					<div class="front" style="background-image: url(https://unsplash.it/502/502/)">
          						<div class="inner">
          							<p>Bangga Kencana</p>
                        <span>Lorem ipsum</span>
          						</div>
          					</div>
          					<div class="back">
          						<div class="inner">
          							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
          						</div>
          					</div>
          				</div>
          			</div>
              </div>
              <div class="col-md-3">
                <div class="col" ontouchstart="this.classList.toggle('hover');">
          				<div class="container">
          					<div class="front" style="background-image: url(https://unsplash.it/503/503/)">
          						<div class="inner">
          							<p>Kampung KB</p>
                        <span>Lorem ipsum</span>
          						</div>
          					</div>
          					<div class="back">
          						<div class="inner">
          							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
          						</div>
          					</div>
          				</div>
          			</div>
              </div>
              <div class="col-md-3">
                <div class="col" ontouchstart="this.classList.toggle('hover');">
          				<div class="container">
          					<div class="front" style="background-image: url(https://unsplash.it/504/504/">
          						<div class="inner">
          							<p>Pojok Kependudukan</p>
                        <span>Lorem ipsum</span>
          						</div>
          					</div>
          					<div class="back">
          						<div class="inner">
          							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
          						</div>
          					</div>
          				</div>
          			</div>
              </div>
              <div class="col-md-3">
                <div class="col" ontouchstart="this.classList.toggle('hover');">
          				<div class="container">
          					<div class="front" style="background-image: url(https://unsplash.it/505/505/)">
          						<div class="inner">
          							<p>POKTAN II</p>
                        <span>Lorem ipsum</span>
          						</div>
          					</div>
          					<div class="back">
          						<div class="inner">
          							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
          						</div>
          					</div>
          				</div>
          			</div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-1">

              </div>
              <div class="col-md-3">
                <div class="col" ontouchstart="this.classList.toggle('hover');">
          				<div class="container">
          					<div class="front" style="background-image: url(https://unsplash.it/506/506/)">
          						<div class="inner">
          							<p>PPID</p>
                        <span>Lorem ipsum</span>
          						</div>
          					</div>
          					<div class="back">
          						<div class="inner">
          							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
          						</div>
          					</div>
          				</div>
          			</div>
              </div>
              <div class="col-md-3">
                <div class="col" ontouchstart="this.classList.toggle('hover');">
          				<div class="container">
          					<div class="front" style="background-image: url(https://unsplash.it/508/508/)">
          						<div class="inner">
          							<p>Data Kependudukan</p>
                        <span>Lorem ipsum</span>
          						</div>
          					</div>
          					<div class="back">
          						<div class="inner">
          							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
          						</div>
          					</div>
          				</div>
          			</div>
              </div>
              <div class="col-md-3">
                <div class="col openModal" id="one" ontouchstart="this.classList.toggle('hover');">
                  <div class="container">
                    <div class="front" style="background-image: url(https://unsplash.it/511/511/)">
                      <div class="inner">
                        <p>Ular Tangga</p>
                        <span>Lorem ipsum</span>
                      </div>
                    </div>
                    <div class="back">
                      <div class="inner">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="col">
      				<div class="container">
      					<div class="front" style="background-image: url(https://unsplash.it/500/500/); height: 94vh;">
      						<div class="inner">
      							<p>Diligord</p>
                    <span>Lorem ipsum</span>
      						</div>
      					</div>
      				</div>
      			</div>
          </div>

        </div>
      </div>

      <div id="modal-container">
        <div class="modal-background">
          <div class="modal">
            <div class="col-xs-12"><div class="btn btn-primary pull-right">&#10006;</div></div>
            <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="{{ url('Data/swflash.cab') }}" style="width: 100vw; height: 100vh;" id="UlarTangga" ALIGN="">
              <PARAM NAME=movie VALUE="{{ url('flash/UlarTangga.swf') }}">
              <PARAM NAME=quality VALUE=high>
                <EMBED src="{{ url('flash/UlarTangga.swf') }}" quality=high style="width: 100vw; height: 100vh;" NAME="UlarTangga" ALIGN="" TYPE="application/x-shockwave-flash">
                </EMBED>
            </OBJECT>
            <!-- <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
							<rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
						</svg> -->
          </div>
        </div>
      </div>
    </body>

    <script>
      $('.openModal').click(function(){
        var buttonId = $(this).attr('id');
        $('#modal-container').removeAttr('class').addClass(buttonId);
        $('body').addClass('modal-active');
      });

      $('#modal-container').click(function(){
        $(this).addClass('out');
        $('body').removeClass('modal-active');
      });
    </script>
</html>
