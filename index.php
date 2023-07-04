
 <div class="container">
    <form action="../XML/construct.php" method="post">
    <fieldset>
      <legend>XML generátor:</legend>

      <div class="row">
      <div class="col-25">
        <label for="name">Meno a priezvysko:</label><br>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name"><br>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
       <label for="zmluva">Číslo zmluvy:</label><br>
      </div>
      <div class="col-75">
      <input type="text" id="zmluva" name="zmluva"><br>
      </div>
    </div> 

    <div class="row">
      <div class="col-25">
      <label for="ip">IP adresa:</label><br>
      </div>
      <div class="col-75">
      <input type="text" id="ip" name="ip" required pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$"><br>
      </div>
    </div> 

    <div class="row">
      <div class="col-25">
      <label for="snumber">Sériové číslo:</label><br>
      </div>
      <div class="col-75">
      <input type="text" id="snumber" name="snumber"><br>
       <br>
      </div>
    </div> 

    <div class="row">
      <div class="col-25">
      <label for="mac">MAC adresa:</label><br>
      </div>
      <div class="col-75">
      <input type="text" id="mac" name="mac" required pattern="^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$"><br>
      </div>
    </div> 

    <div class="row">
      <div class="col-25">
      <label for="onu">Model ONU:</label><br>
      </div>
      <div class="col-75">
      <select name="onu" id="cars">
        <option value="H665">H665</option>
        <option value="H665-C">H665-C</option>
        <option value="H660GM">H660GM</option>
        <option value="HL-4GMV">HL-4GMV</option>
        <option value="HL-1GE">HL-1GE</option>
      </div>
    </div> 
    <div class="row">
        <input type="submit" name="submit" />
    </div>
</select>
</fieldset>
</form>

          </div>
  </body>
</html>

