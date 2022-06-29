
  <html>
      <head>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
          $(document).ready(function() {
              $("#test").click(function() {
              $("#test").remove();
            });
          });
        </script>
      </head>
      <body>
          <center>
              <br>
              <h1>Case Builder</h1>
              <br>
              <!-- FORM STARTS -->
              <form action="" method="post">

                  <!-- CASE SYNOPSIS-->
                  <label for="synopsis">Reason for calling: &nbsp;</label>
                  <input type="text" id="synopsis" name="synopsis"> &nbsp;
                  <!-- CASE SYNOPSIS END -->

                  <!-- ERROR MESSAGES -->
                  <label for="err_messages">Error messages: &nbsp;</label>
                  <input type="text" id="err_messages" name="err_messages">
                  <!-- ERROR MESSAGES -->

                  <br><br>

                  <!-- SCANNER DROPDOWN -->
                  <label for="Scanners">Choose a scanner: &nbsp;</label>
                  <select name="scanners" id="scanners">
                      <option value="None">None</option>
                      <optgroup label="ScanSnap - Current">
                        <option value="iX1600">iX1600</option>
                        <option value="iX1500">iX1500</option>
                        <option value="iX1400">iX1400</option>
                        <option value="iX1300">iX1300</option>
                        <option value="iX100">iX100</option>
                        <option value="S1300i">S1300i</option>
                        <option value="SV600">SV600</option>
                      </optgroup>
                      <optgroup label="ScanSnap - Discontinued">
                          <option value="iX1600">iX1600</option>
                          <option value="iX1500">iX1500</option>
                          <option value="iX1400">iX1400</option>
                          <option value="iX1300">iX1300</option>
                          <option value="iX100">iX100</option>
                          <option value="S1300i">S1300i</option>
                          <option value="SV600">SV600</option>
                        </optgroup>
                        <optgroup label="fi-Series - Current">
                          <option value="fi-8170">fi-8170</option>
                          <option value="fi-800R">fi-800R</option>
                        </optgroup>
                      <optgroup label="SP-Series">
                        <option value="SP-1425">SP-1425</option>
                        <option value="SP-1120N">SP-1120N</option>
                      </optgroup>
                        <optgroup label="Network Scanners">
                          <option value="N7100E">N7100E</option>
                          <option value="fi-7300NX">fi-7300NX</option>
                        </optgroup>
                    </select>
                    <!-- SCANNER DROPDOWN END -->

                  <!-- OS DROPDOWN -->
                  <label for="OS">&nbsp; Operating System (OS): &nbsp;</label>
                  <select name="OS" id="OS">
                    <option value="None">None</option>
                    <optgroup label="Windows">
                        <option value="Win11">Win11</option>
                        <option value="Win10">Win10</option>
                        <option value="Win8">Win8</option>
                        <option value="Win7">Win7</option>
                    </optgroup>
                    <optgroup label="Mac">
                        <option value="Monterey">Monterey</option>
                        <option value="Big Sur">Big Sur</option>
                        <option value="Catalina">Catalina</option>
                        <option value="Mojave">Mojave</option>
                    </optgroup>
                  </select>
                  <!-- OS DROPDOWN END -->

                  <!-- SOFTWARE DROPDOWN -->
                  <label for="Software">&nbsp; ScanSnap Software: &nbsp;</label>
                  <select name="software" id="software">
                      <option value="None">None</option>
                      <optgroup label="ScanSnap Home">
                          <option value="SSH">SSH</option>
                          <option value="SSHv2.6.0">SSHv2.6.0</option>
                      </optgroup>
                      <optgroup label="ScanSnap Manager">
                          <option value="SSM">SSM</option>
                          <option value="SSMv7.2">SSMv7.2</option>
                          <option value="SSMv6.5">SSMv6.5</option>
                          <option value="SSMv6">SSMv6</option>
                          <option value="SSMv5.5">SSMv5.5</option>
                          <option value="SSMv4.5">SSMv4.5</option>
                      </optgroup>
                  </select>
                  <!-- SOFTWARE DROPDOWN END -->

                  <br><br>

                  <!-- CONNECTIVITY -->
                  <label for="connection-type">&nbsp; Connection Type: &nbsp;</label>
                  <select name="connection-type" id="connection-type">
                    <option value="None">None</option>
                    <optgroup label="Wireless">Wireless</optgroup>
                    <option value="Wirelessly connected.">Wireless</option>
                    <optgroup label="USB">USB</optgroup>
                    <option value="Plugged directly into PC via USB.">USB directly into PC</option>
                    <option value="Plugged into hub or dock via USB.">USB via hub or dock</option>
                    <option value="Plugged into adapter via USB.">USB via adapter</option>
                  </select>
                  <!-- CONNECTIVITY END -->

                  <br><br>

                  <!-- REMOTE IN -->
                  <label for="remote_in">Remote-in:&nbsp;</label>
                  <input type="checkbox" name="remote_in" id="remote_in">
                  <!-- REMOTE IN END -->

                  <br><br>
                  <!-- TROUBLESHOOTING STEPS DROPDOWN -->
                  <label for="TS">&nbsp; Troubleshooting Step: &nbsp;</label>
                  <select name="TS" id="TS">
                    <option value="None">None</option>
                    <option value="Changed software settings.">Changed software settings.</option>
                    <option value="Quit/reopen SS app.">Quit/reopen SS app.</option>
                    <option value="Restarted PC.">Restart PC.</option>
                    <option value="Cleared temp.">Cleared temp.</option>
                    <option value="Updated app to">Updated app</option>
                    <option value="Set WIA to local system account.">Set WIA to local system account.</option>
                    <option value="Pointed driver to SSMini.">Pointed driver to SSMini.</option>
                    <option value="Unplugged/replugged scanner power.">Unplugged/replugged scanner power.</option>
                    <option value="Unplugged/replugged USB from back of scanner.">Unplugged/replugged USB from back of scanner.</option>
                    <option value="Unplugged/replugged USB from PC.">Unplugged/replugged USB from PC.</option>
                  </select>
                  <!-- TROUBLESHOOTING STEPS DROPDOWN END -->

                  <br><br>

                  <!-- SUBMIT BUTTON -->
                  <input id="test" type="submit" value="Submit">
                  <!-- SUBMIT BUTTON END -->


              </form>
              <!-- FORM ENDS -->

              <!-- FORM PHP -->
              <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $case_synopsis = $_POST["synopsis"];
                    $err_messages = $_POST["err_messages"];
                    $scanner_model = $_POST["scanners"];
                    $OS = $_POST["OS"];
                    $software = $_POST["software"];
                    $connection_type = $_POST["connection-type"];
                    $remote_in = $_POST["remote_in"];

                    if ($scanner_model == "None") {
                      $scanner_model = "";
                    } else {
                      $scanner_model = $scanner_model . "&nbsp;&nbsp;";
                    }

                    if ($OS == "None") {
                      $OS = "";
                    } else {
                      $OS = $OS . "&nbsp;&nbsp;";
                    }

                    if ($software == "None") {
                      $software = "";
                    }

                    if ($connection_type == "None") {
                      $connection_type = "";
                    }

                    if ($remote_in == TRUE) {
                      $remote_in = "<br>Remoted in.<br>-";
                    } else {
                      $remote_in = "<br>Rejected remote in.<br>-";
                    }

                    if ($err_messages == "") {
                      $err_messages = "";
                    } else {
                      $err_messages = "<br>" . $err_messages;
                    }

                    echo $case_synopsis;
                    echo $err_messages;
                    echo $remote_in;
                    echo "<br>";
                    echo $scanner_model;
                    echo $OS;
                    echo $software;
                    echo "<br>";
                    echo $connection_type;
                }

            ?>
              <!-- FORM PHP END -->
          </center>
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
          <script>
            $(document).ready(function() {

              $( "p" ).click(function() {
                $( "p" ).css("color", "red")
              });

            });
          </script>
      </body>
  </html>