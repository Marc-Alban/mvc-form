<div class="container text-center situation_pro tab step" id="13-content">
  <div class="row" id="maritalStatus">
    <div class="title">
      <h2 class="fw-light">
        Mon état civil
      </h2>
    </div>
    <div class="row mx-0 step1_1A_project etatCivil ">
      <!-- situation familiale - début -->
      <div class="col-md-12 col-lg-12 alignRow">
      <div class="civilite">
        <label for="civility_gender" class="required">Civilité <span class="civilityGender-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="civilityGender" class="selectListe" name="civilityGender">
            <option value="" >Sélectionner</option>
            <option value="mr">M.</option>
            <option value="mrs">Mme</option>
          </select>
        </div>
      </div>
        <!-- nom - début -->
        <div class="textInput">
          <label for="civilityLastname" class="required">Nom <span class="civilityLastname-validation validation-error"></span></label>
          <input oninput="this.className = '' " type="text" id="civilityLastname" name="civilityLastname">
        </div>
        <!-- nom - fin -->
        <!-- prénom - début -->
        <div class="textInput">
          <label for="civilityFirstname" class="required">Prénom <span class="civilityFirstname-validation validation-error"></span></label>
          <input oninput="this.className = '' " type="text" id="civilityFirstname" name="civilityFirstname">
        </div>
        <!-- prénom - fin -->
      </div>
      <div class="col-md-12 col-sm-12 alignRow">
        <!-- pays de naissance - début -->
        <div class="listCountry">
          <label for="civilityNationality" class="required">Pays de naissance <span class="civilityNationality-validation validation-error"></span></label>
          <div class="labelSelect">
            <select id="civilityNationality" name="civilityNationality">
              <?php include('listCountry.php'); ?>
            </select>
          </div>
        </div>
        <!-- Pays de naissance - fin -->
        <!-- lieu de naissance - début -->
        <div class="textInput">
          <label for="civilityCity">Ville de naissance <span class="civilityCity-validation validation-error"></span></label><br>
          <input oninput="this.className = '' " type="text"  autocomplete="off" id="civilityCity" name="civilityCity">
          <ul id="city-list"></ul>
        <!--  <select id="city-list" style="width: 100% !important;"></select> -->
        </div>
        <!-- lieu de naissance - fin -->
      </div>
      <div id="dateSelected" class="col-md-12 col-sm-12" style="width: 100%;">
        <!-- date de naissance - début -->
        <div class="dateLabel">Date de naissance</div>
        <div class="dateInput">
          <div class="labelSelect">
            <select class="select_day" name="civilityDayBirthDay">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_month" name="civilityMonthBirthDay">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_year" name="civilityYearBirthDay">
            </select>
          </div>
        </div>
        <!-- date de naissance - fin -->
      </div>
    </div>
    <div class="btnForm">
      <div>
        <button type="button" class="btnPrev">Précédent</button>
        <button type="button" class="btnNext">Suivant</button>
      </div>
    </div>
  </div>
</div>