    echo "<form id='categories' action='php/category.survey.php' method='post' enctype='multipart/form-data'>
        <div class="left">

        <h1>What did you like the most about this project?</h1>

            <div class="radios">

            <input type="radio" class="rad" value="A" id="lA" name="like" onclick="uncheck('rA');left='A';check('l')"><label>The project's use of technology</label><br>
            <input type="radio" class="rad" value="B" id="lB" name="like" onclick="uncheck('rB');left='B';check('l')"><label></label>The user interface<br>
            <input type="radio" class="rad" value="C" id="lC" name="like" onclick="uncheck('rC');left='C';check('l')"><label></label>Other<br>
            </div>

        </div>

            <div class="right">

            <h1>What did you like the least?</h1>

            <div class="radios">

            <input type="radio" class="rad" value="A" id="rA" name="dlike" onclick="uncheck('lA');right='A';check('r')"><label>The project's use of tecnology</label><br>
            <input type="radio" class="rad" value="B" id="rB" name="dlike" onclick="uncheck('lB');right='B';check('r')"><label></label>The user interface<br>
            <input type="radio" class="rad" value="C" id="rC" name="dlike" onclick="uncheck('lC');right='C';check('r')"><label></label>Other<br>
            </div>

        </div>
        </form>

        <script src="js/category.js"></script>


