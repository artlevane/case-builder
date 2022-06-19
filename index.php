
  <html>
      <head></head>
      <body>
          <center>
              <br>
              <h1>Case Builder</h1>
              <br>
              <!-- FORM STARTS -->
              <form action="" method="post">

                  <!-- CASE SYNOPSIS-->
                  <label for="synopsis">Reason for calling: &nbsp;</label>
                  <input type="text" id="synopsis" name="synopsis"><br><br>
                  <!-- CASE SYNOPSIS END -->

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
                      <option value="Wirelessly connected">Wireless</option>
                      <optgroup label="USB">USB</optgroup>
                      <option value="Plugged directly into PC via USB">USB directly into PC</option>
                      <option value="Plugged into hub or dock via USB">USB via hub or dock</option>
                      <option value="Plugged into adapter via USB">USB via adapter</option>
                    </select>
                    <!-- CONNECTIVITY END -->
                    <br><br>
                    <input type="submit" value="Submit">
              </form>
              <!-- FORM ENDS -->

              <!-- FORM PHP -->
              <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $case_synopsis = $_POST["synopsis"];
                    $scanner_model = $_POST["scanners"] . "&nbsp;&nbsp;";
                    $OS = $_POST["OS"] . "&nbsp;&nbsp;";
                    $software = $_POST["software"];
                    $connection_type = $_POST["connection-type"];

                    if ($software !== "none") {
                      $software = "HEY";
                    }

                    echo $case_synopsis;
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
      </body>
  </html>