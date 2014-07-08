<?
include "teechio-php-master/Material.php";
$i=0;
$material = new Material();
$materials = $material->fetchAll();

$numbers = array();
 
foreach($materials[0]->sudoku as $key => $val){
  $numbers[$key]=$val;
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Sudoku - Powered by Teech.io</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
  
  a:link {
    COLOR: #fff;
  }
  a:visited {
    COLOR: #fff;
  }
  a:hover {
    COLOR: #fff;
  }
  a:active {
    COLOR: #fff;
  }

  body{
      background: #354b72;
      color: #fff }

    /* change font size to change scale */
    input.form-fixer {
      padding: 1px;
      font-size: 24px;
    }

    .form-horizontal .form-group input, 
    .form-horizontal .form-group select,
    .form-horizontal .form-group label{ 
      height: 14px;
      line-height: 14px;
    }

    .sudoku-grid {
      font-size: 24px;
      display: inline-block;
      background: #fff;
    }

    /* groups */
    .sudoku-grid > div > div {
      float: left;
      color: :#fff;
      border: 1px solid black;
      border-color: #354b72;
    }

    /* rows */
    .sudoku-grid > div
    , .sudoku-grid > div > div > div {
      clear: left;
      border-color: #354b72;
    }

    /* cells */
    .sudoku-grid > div > div > div > div {
      float: left;
      width: 1.5em;
      height: 1.5em;

      border-color: #354b72;

      border-right: 1px solid lightgrey;
      border-bottom: 1px solid lightgrey;

      text-align: center;
      line-height: 1.3em;
    }

    /* outer border tweaks */
    .sudoku-grid > div > div:first-child {
      border-left: 2px solid black;
    }
    .sudoku-grid > div > div:last-child {
      border-right: 2px solid black;
    }
    .sudoku-grid > div:first-child > div {
      border-top: 2px solid black;
    }
    .sudoku-grid > div:last-child > div {
      border-bottom: 2px solid black;
    }

    /* inner border tweaks */
    .sudoku-grid > div > div > div div:last-child {
      border-right: none;
    }
    .sudoku-grid > div > div > div:last-child div {
      border-bottom: none;
    }
  </style>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12" align="center">
<p></p>
<img src="numbers.jpg"  height="100" width="120"></img>
<form action="check.php" method="post">
<div class="sudoku-grid" align="center">
  <div>
    <div>
      <div>
        <div><input type="text" name="1:1" class="form-control form-fixer" value="<? echo $numbers["1-1"]; ?>" readonly></div>
        <div><input type="text" name="1:2" class="form-control form-fixer" value="<? echo $numbers["1-2"]; ?>" readonly></div>
        <div><input type="text" name="1:3" class="form-control form-fixer" value="<? echo $numbers["1-3"]; ?>" ></div>
      </div>
      <div>
         <div><input type="text" name="2:1" class="form-control form-fixer" value="<? echo $numbers["2-1"]; ?>" readonly></div>
         <div><input type="text" name="2:2" class="form-control form-fixer" value="<? echo $numbers["2-3"]; ?>" ></div>
         <div><input type="text" name="2:3" class="form-control form-fixer" value="<? echo $numbers["2-3"]; ?>" ></div>
      </div>
      <div>
        <div><input type="text" name="3:1" class="form-control form-fixer" value="<? echo $numbers["3-1"]; ?>"></div>
        <div><input type="text" name="3:2" class="form-control form-fixer" value="<? echo $numbers["3-2"]; ?>" readonly></div>
        <div><input type="text" name="3:3" class="form-control form-fixer" value="<? echo $numbers["3-3"]; ?>" readonly></div>
      </div>
    </div>
    <div>
      <div>
        <div><input type="text" name="1:4" class="form-control form-fixer" value="<? echo $numbers["1-4"]; ?>" ></div>
        <div><input type="text" name="1:5" class="form-control form-fixer" value="<? echo $numbers["1-5"]; ?>" readonly></div>
        <div><input type="text" name="1:6" class="form-control form-fixer" value="<? echo $numbers["1-6"]; ?>" ></div>
      </div>
      <div>
        <div><input type="text" name="2:4" class="form-control form-fixer" value="<? echo $numbers["2-4"]; ?>" readonly></div>
        <div><input type="text" name="2:5" class="form-control form-fixer" value="<? echo $numbers["2-5"]; ?>" readonly></div>
        <div><input type="text" name="2:6" class="form-control form-fixer" value="<? echo $numbers["2-6"]; ?>" readonly></div>
      </div>
      <div>
        <div><input type="text" name="3:4" class="form-control form-fixer" value="<? echo $numbers["3-4"]; ?>"></div>
        <div><input type="text" name="3:5" class="form-control form-fixer" value="<? echo $numbers["3-5"]; ?>"></div>
        <div><input type="text" name="3:6" class="form-control form-fixer" value="<? echo $numbers["3-6"]; ?>"></div>
      </div>
    </div>
    <div>
      <div>
        <div><input type="text" name="1:7" class="form-control form-fixer" value="<? echo $numbers["1-7"]; ?>"></div>
        <div><input type="text" name="1:8" class="form-control form-fixer" value="<? echo $numbers["1-8"]; ?>"></div>
        <div><input type="text" name="1:9" class="form-control form-fixer" value="<? echo $numbers["1-9"]; ?>"></div>
      </div>
      <div>
        <div><input type="text" name="2:7" class="form-control form-fixer" value="<? echo $numbers["1-7"]; ?>"></div>
        <div><input type="text" name="2:8" class="form-control form-fixer" value="<? echo $numbers["1-8"]; ?>"></div>
        <div><input type="text" name="2:9" class="form-control form-fixer" value="<? echo $numbers["1-8"]; ?>"></div>
      </div>
      <div>
        <div><input type="text" name="3:7" class="form-control form-fixer" value="<? echo $numbers["3-7"]; ?>"></div>
        <div><input type="text" name="3:8" class="form-control form-fixer" value="<? echo $numbers["3-8"]; ?>" readonly></div>
        <div><input type="text" name="3:9" class="form-control form-fixer" value="<? echo $numbers["3-9"]; ?>"></div>
      </div>
    </div>
  </div>
  <div>
    <div>
      <div>
        <div><input type="text" name="4:1" class="form-control form-fixer" value="<? echo $numbers["4-1"]; ?>" readonly></div>
        <div><input type="text" name="4:2" class="form-control form-fixer" value="<? echo $numbers["4-2"]; ?>" ></div>
        <div><input type="text" name="4:3" class="form-control form-fixer" value="<? echo $numbers["4-3"]; ?>" ></div>
      </div>
      <div>
        <div><input type="text" name="5:1" class="form-control form-fixer" value="<? echo $numbers["5-1"]; ?>" readonly></div>
        <div><input type="text" name="5:2" class="form-control form-fixer" value="<? echo $numbers["5-2"]; ?>" ></div>
        <div><input type="text" name="5:3" class="form-control form-fixer" value="<? echo $numbers["5-3"]; ?>" ></div>
      </div>
      <div>
         <div><input type="text" name="6:1" class="form-control form-fixer" value="<? echo $numbers["6-1"]; ?>" readonly></div>
        <div><input type="text" name="6:2" class="form-control form-fixer" value="<? echo $numbers["6-2"]; ?>" ></div>
        <div><input type="text" name="6:3" class="form-control form-fixer" value="<? echo $numbers["6-3"]; ?>" ></div>
      </div>
    </div>
    <div>
      <div>
        <div><input type="text" name="4:4" class="form-control form-fixer" value="<? echo $numbers["4-4"]; ?>" ></div>
        <div><input type="text" name="4:5" class="form-control form-fixer" value="<? echo $numbers["4-5"]; ?>" readonly></div>
        <div><input type="text" name="4:6" class="form-control form-fixer" value="<? echo $numbers["4-6"]; ?>" ></div>
      </div>
      <div>
        <div><input type="text" name="5:4" class="form-control form-fixer" value="<? echo $numbers["5-4"]; ?>" readonly></div>
        <div><input type="text" name="5:5" class="form-control form-fixer" value="<? echo $numbers["5-5"]; ?>"></div>
        <div><input type="text" name="5:6" class="form-control form-fixer" value="<? echo $numbers["5-6"]; ?>" readonly></div>
      </div>
      <div>
        <div><input type="text" name="6:4" class="form-control form-fixer" value="<? echo $numbers["6-4"]; ?>" ></div>
        <div><input type="text" name="6:5" class="form-control form-fixer" value="<? echo $numbers["6-5"]; ?>" readonly></div>
        <div><input type="text" name="6:6" class="form-control form-fixer" value="<? echo $numbers["6-6"]; ?>" ></div>
      </div>
    </div>
    <div>
      <div>
        <div><input type="text" name="4:7" class="form-control form-fixer" value="<? echo $numbers["4-7"]; ?>"></div>
        <div><input type="text" name="4:8" class="form-control form-fixer" value="<? echo $numbers["4-8"]; ?>"></div>
        <div><input type="text" name="4:9" class="form-control form-fixer" value="<? echo $numbers["4-9"]; ?>" readonly></div>
      </div>
      <div>
        <div><input type="text" name="5:7" class="form-control form-fixer" value="<? echo $numbers["5-7"]; ?>"></div>
        <div><input type="text" name="5:8" class="form-control form-fixer" value="<? echo $numbers["5-8"]; ?>"></div>
        <div><input type="text" name="5:9" class="form-control form-fixer" value="<? echo $numbers["5-9"]; ?>" readonly></div>
      </div>
      <div>
        <div><input type="text" name="6:7" class="form-control form-fixer" value="<? echo $numbers["6-7"]; ?>"></div>
        <div><input type="text" name="6:8" class="form-control form-fixer" value="<? echo $numbers["6-8"]; ?>"></div>
        <div><input type="text" name="6:9" class="form-control form-fixer" value="<? echo $numbers["6-9"]; ?>" readonly></div>
      </div>
    </div>
  </div>
  <div>
    <div>
      <div>
        <div><input type="text" name="7:1" class="form-control form-fixer" value="<? echo $numbers["7-1"]; ?>"></div>
        <div><input type="text" name="7:2" class="form-control form-fixer" value="<? echo $numbers["7-2"]; ?>" readonly></div>
        <div><input type="text" name="7:3" class="form-control form-fixer" value="<? echo $numbers["7-3"]; ?>" ></div>
      </div>
      <div>
        <div><input type="text" name="8:1" class="form-control form-fixer" value="<? echo $numbers["8-1"]; ?>"></div>
        <div><input type="text" name="8:2" class="form-control form-fixer" value="<? echo $numbers["8-2"]; ?>"></div>
        <div><input type="text" name="8:3" class="form-control form-fixer" value="<? echo $numbers["8-3"]; ?>"></div>
      </div>
      <div>
        <div><input type="text" name="9:1" class="form-control form-fixer" value="<? echo $numbers["9-1"]; ?>"></div>
        <div><input type="text" name="9:2" class="form-control form-fixer" value="<? echo $numbers["9-2"]; ?>"></div>
        <div><input type="text" name="9:3" class="form-control form-fixer" value="<? echo $numbers["9-3"]; ?>"></div>
      </div>
    </div>
    <div>
      <div>
        <div><input type="text" name="7:4" class="form-control form-fixer" value="<? echo $numbers["7-4"]; ?>"></div>
        <div><input type="text" name="7:5" class="form-control form-fixer" value="<? echo $numbers["7-5"]; ?>"></div>
        <div><input type="text" name="7:6" class="form-control form-fixer" value="<? echo $numbers["7-6"]; ?>"></div>
      </div>
      <div>
        <div><input type="text" name="8:4" class="form-control form-fixer" value="<? echo $numbers["8-4"]; ?>" readonly></div>
        <div><input type="text" name="8:5" class="form-control form-fixer" value="<? echo $numbers["8-5"]; ?>" readonly></div>
        <div><input type="text" name="8:6" class="form-control form-fixer" value="<? echo $numbers["8-6"]; ?>" readonly></div>
      </div>
      <div>
        <div><input type="text" name="9:4" class="form-control form-fixer" value="<? echo $numbers["9-4"]; ?>" ></div>
        <div><input type="text" name="9:5" class="form-control form-fixer" value="<? echo $numbers["9-5"]; ?>" readonly></div>
        <div><input type="text" name="9:6" class="form-control form-fixer" value="<? echo $numbers["9-6"]; ?>" ></div>
      </div>
    </div>
    <div>
      <div>
        <div><input type="text" name="7:7" class="form-control form-fixer" value="<? echo $numbers["7-7"]; ?>" readonly></div>
        <div><input type="text" name="7:8" class="form-control form-fixer" value="<? echo $numbers["7-8"]; ?>" readonly></div>
        <div><input type="text" name="7:9" class="form-control form-fixer" value="<? echo $numbers["7-9"]; ?>"></div>
      </div>
      <div>
       <div><input type="text" name="8:7" class="form-control form-fixer" value="<? echo $numbers["8-7"]; ?>"></div>
        <div><input type="text" name="8:8" class="form-control form-fixer" value="<? echo $numbers["8-8"]; ?>"></div>
        <div><input type="text" name="8:9" class="form-control form-fixer" value="<? echo $numbers["8-9"]; ?>" readonly></div>
      </div>
      <div>
        <div><input type="text" name="9:7" class="form-control form-fixer" value="<? echo $numbers["9-7"]; ?>"></div>
        <div><input type="text" name="9:8" class="form-control form-fixer" value="<? echo $numbers["9-8"]; ?>" readonly></div>
        <div><input type="text" name="9:9" class="form-control form-fixer" value="<? echo $numbers["9-9"]; ?>" readonly></div>
      </div>
    </div>
  </div>
  </div>
  <br></br>
   <div id="showtm" style="font-size:21px; font-weight:800;">0:0</div>
    <p></p>
<input type="submit" class="btn btn-warning btn-lg" value=" Check ">
<br></br>
<h4><a href="http://www.teech.io>">Sudoku - Powered by Teech.io</a></h4>
</div>


</form>

</div>
</div>
<script type="text/javascript"><!--
// chronometer / stopwatch JS script - coursesweb.net

// Here set the minutes, seconds, and tenths-of-second when you want the chronometer to stop
// If all these values are set to 0, the chronometer not stop automatically
var stmints = 0;
var stseconds = 0;
var stzecsec = 0;

// function to be executed when the chronometer stops
function toAutoStop() {
  alert('Your life goes on');
}

// the initial tenths-of-second, seconds, and minutes
var zecsec = 0;
var seconds = 0;
var mints = 0;

var startchron = 0;

function chronometer() {
  if(startchron == 1) {
    zecsec += 1;       // set tenths of a second

    // set seconds
    if(zecsec > 9) {
      zecsec = 0;
      seconds += 1;
    }

    // set minutes
    if(seconds > 59) {
      seconds = 0;
      mints += 1;
    }

    // adds data in #showtm
    document.getElementById('showtm').innerHTML = mints+ ' : '+ seconds+ '<sub>'+ zecsec+ '</sub>';

    // if the chronometer reaches to the values for stop, calls whenChrStop(), else, auto-calls chronometer()
    if(zecsec == stzecsec && seconds == stseconds && mints == stmints) toAutoStop();
    else setTimeout("chronometer()", 100);
  }
}

function startChr() { startchron = 1; chronometer(); }      // starts the chronometer
function stopChr() { startchron = 0; }                      // stops the chronometer
function resetChr() {
  zecsec = 0;  seconds = 0; mints = 0; startchron = 0; 
  document.getElementById('showtm').innerHTML = mints+ ' : '+ seconds+ '<sub>'+ zecsec+ '</sub>';
}

// start the chronometer, delete this line if you want to not automatically start the stopwatch
startChr();
--></script>




</body>
</html>