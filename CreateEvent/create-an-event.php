<?php
$a = session_id();
session_start();
setcookie("SessionID", $a);


?>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <title>Twitter Bootstrap Version2.0 inline form layout example</title>
    <meta name="description" content="Twitter Bootstrap Version2.0 inline form layout example from w3resource.com." />

    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="../bootstrap/bootstrap-datetimepicker\build\css\bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen"/>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="span3">
        <p>Event Title:</p>
      </div>
      <div class="span9">
        <p>
          <input type="text" name="EventTitle" />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="span3">
        <p>Date:</p>
      </div>
      <div class="span9">
        <div id="datetimepicker2" class="input-append">
          <input data-format="MM/dd/yyyy HH:mm:ss PP" type="text" />
        </div>
        <script type="text/javascript">
  $(function() {
    $(&#39;#datetimepicker2&#39;).datetimepicker({
      language: &#39;en&#39;,
      pick12HourFormat: true
    });
  });
</script>
      </div>
    </div>
    <div class="row">
      <div class="span12">
        <h3>Some of the topics and more... :</h3>
      </div>
      <div class="span2">
        <p>
          <img src="images/html5_logo.png" width="140" height="86" alt="html5 logo" />
        </p>
      </div>
      <div class="span2">
        <p>
          <img src="images/javascript-logo.png" width="140" height="86" alt="javascript logo" />
        </p>
      </div>
      <div class="span2">
        <p>
          <img src="images/json.gif" width="140" height="86" alt="JSON logo" />
        </p>
      </div>
      <div class="span2">
        <p>
          <img src="images/php.png" width="140" height="86" alt="PHP logo" />
        </p>
      </div>
      <div class="span2">
        <p>
          <img src="images/mysql-logo.png" width="140" height="86" alt="MySQL logo" />
        </p>
      </div>
      <div class="span2">
        <p>
          <img src="images/browser-statistics.png" width="140" height="86" alt="Browser Statistics logo" />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="span12">
        <h3>Social networking sites to share:</h3>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <p>
          <img src="images/gplus.png" width="50" height="49" alt="GPlus logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/twitter.png" width="50" height="38" alt="Twitter logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/orkut.png" width="50" height="55" alt="Orkut logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/ipad.png" width="50" height="53" alt="iPad logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/digo.png" width="50" height="54" alt="Digo logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/zapface.png" width="51" height="53" alt="Zapface logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/facebook.png" width="48" height="53" alt="facebook logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/netvibes.png" width="51" height="53" alt="Netvibes logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/linkedin.png" width="49" height="54" alt="LinkedIn logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/newsvine.png" width="48" height="53" alt="Newsvine logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/blogger.png" width="51" height="53" alt="Blogger logo" />
        </p>
      </div>
      <div class="span1">
        <p>
          <img src="images/reditt.png" width="48" height="57" alt="Reddit logo" />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="span3">
        <h3>Fontend Development:</h3>
        <p>HTML4.0, XHTML1.0, CSS2.1, HTML5, CSS3, JavaScript</p>
      </div>
      <div class="span3">
        <h3>Backend Developemt:</h3>
        <p>PHP, Ruby, Python, Java, ASP.NET, SCALA</p>
      </div>
      <div class="span3">
        <h3>Database Management:</h3>
        <p>SQL, MySQL POstgreSQL, NoSQL, MongoDB</p>
      </div>
      <div class="span3">
        <h3>APIs, Tools and Tips:</h3>
        <p>Google Plus API, Twitter Bootstrap, JSON, Firebug, WebPNG</p>
      </div>
    </div>
  </div>
  <form>
    <div>Date: 
    <input type="text" />Event Address or Zipcode: 
    <input type="text" /> 
    <input type="checkbox" name="thirdParty" />Are you a third party event organizer?
    <br />-Host Iformation: 
    <input type="text" />Event Overview and goals:
    <br />
    <input type="text" />
    <table class="table">
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Type of Event:</td>
        <td>Event Ambiance:</td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table>
    <input type="submit" value="Create Auction" /></div>
  </form>Type of Event: Event Ambiance:</body>
</html>