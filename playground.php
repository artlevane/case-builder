<html>
    <head>
        <title>Playground</title>
    </head>
    <body>
        <center>
            <!-- PAGE TITLE -->
            <h1 style="margin-top: 40px;">Playground</h1>

            <br><br>

            <!-- FORM START -->
            <form action="" method="post">
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
                <input type="submit" value="X">
                <!-- TROUBLESHOOTING STEPS DROPDOWN END -->

                <br><br>

                <!-- NOTE BUTTON -->
                <input type="submit" value="Add Note">
                <!-- NOTE BUTTON END -->

                <!-- TROUBLESHOOTING STEP BUTTON -->
                <input type="submit" value="Troubleshooting Step">
                <!-- TROUBLESHOOTING STEP BUTTON END -->

                <!-- TEST BUTTON -->
                <input type="submit" value="Test Scan">
                <!-- TEST BUTTON END -->

                <br><br>

                <!-- SUBMIT BUTTON -->
                <input type="submit" value="Submit">
                <!-- SUBMIT BUTTON END -->
            </form>
            <!-- FORM END -->

            <!-- FORM PHP START -->
            <?php 

            ?>
            <!-- FORM PHP END -->
        </center>
    </body>
</html>





