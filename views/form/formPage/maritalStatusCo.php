<div class="container text-center situation_pro tab subStepCoBorrower step" id="14-content">
  <div class="row" id="coMaritalStatus">
    <div class="title">
      <h2 class="fw-light">
        Mon état civil co-emprunteur
      </h2>
    </div>
    <!-- Civilité co-emprunteur - debut -->
    <div class="row mx-0 step1_1A_project etatCivilCo">
      <!-- situation familiale - début -->
      <div class="col-md-12 col-lg-12 alignRow">
      <div class="civiliteCo">
        <label for="civilityGenderCo" class="required">Civilité <span class="civilityGenderCo-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="civilityGenderCo" name="civilityGenderCo">
            <option value="" class="selectListe">Sélectionner</option>
            <option value="mr">M.</option>
            <option value="mrs">Mme</option>
          </select>
        </div>
      </div>
        <!-- Nom co-emprunteur - debut -->
        <div class="textInput">
          <label for="civilityLastnameCo" class="required">Nom <span class="civilityLastnameCo-validation validation-error"></span></label>
          <input oninput="this.className = '' " type="text" id="civilityLastnameCo" name="civilityLastnameCo">
        </div>
        <!-- Nom co-emprunteur - fin -->
        <!-- Prénom co-emprunteur - debut -->
        <div class="textInput">
          <label for="civilityFirstnameCo" class="required">Prénom <span class="civilityFirstnameCo-validation validation-error"></span></label>
          <input oninput="this.className = '' " type="text" id="civilityFirstnameCo" name="civilityFirstnameCo">
        </div>
        <!-- Prénom co-emprunteur - fin -->
      </div>
      <div class="col-md-12 col-sm-12 alignRow">
        <!-- Pays de naissance co-emprunteur - debut -->
        <div class="listCountry">
          <label for="civilityNationalityCo" class="required">Pays de naissance <span class="civilityNationalityCo-validation validation-error"></span></label>
          <div class="labelSelect">
            <select id="civilityNationalityCo" name="civilityNationalityCo">
              <?php include('listCountry.php'); ?>
            </select>
          </div>
        </div>
        <!-- Pays de naissance co-emprunteur - debut -->

        <!-- ville de naissance co-emprunteur - debut -->
        <div class="textInput">
          <label for="civilityCityCo">Ville de naissance <span class="civilityCityCo-validation validation-error"></span></label><br>
          <input oninput="this.className = '' " type="text"  autocomplete="off" id="civilityCityCo" name="civilityCityCo">
          <ul id="city-list-co"></ul>
        <!--  <select id="city-list-co" style="width: 100% !important;"></select> -->
        </div>
      </div>
      <!-- ville de naissance co-emprunteur - fin -->
      <div id="dateSelected" class="col-md-12 col-sm-12" style="width: 100%;">
        <!-- Date de naissance co-emprunteur - debut -->
        <div class="dateLabel">Date de naissance</div>
        <div class="dateInput">
          <div class="labelSelect">
            <select class="select_day" name="civilityDayBirthDayCo">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_month" name="civilityMonthBirthDayCo">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_year" name="civilityYearBirthDayCo">
            </select>
          </div>
        </div>
        <!-- Date de naissance co-emprunteur - fin -->
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