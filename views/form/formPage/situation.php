<div class="container text-center situation_pro tab step" id="5-content">
  <div class="row" id="situation">
    <div class="title">
      <h2 class="fw-light">
        Ma situation personnelle
      </h2>
    </div>
    <div class="row step1_1A_project">
      <!-- liste situation - debut -->
      <div class="col-md-12 col-sm-12">
        <label for="maritalStatus">Votre situation personnelle <span class="maritalStatus-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="maritalStatus" onchange="selectMaritalStatus(this)" name="maritalStatus">
            <option value="" class="selectListe">Sélectionner</option>
            <option id="maried" value="maried">Mariée</option>
            <option id="single" value="single">Célibataire</option>
            <option id="widow" value="widow">Veuf(ve)</option>
            <option id="divorced" value="divorced">Divorcé(e)</option>
            <option id="civilPartnership" value="civilPartnership">Pacsé(e)</option>
            <option id="unmarried" value="unmarried">Union libre</option>
            <option id="pendingDivorce" value="pendingDivorce">En instance de divorce</option>
          </select>
        </div>
      </div>
      <!-- liste situation - fin -->
      <!-- date situation - debut -->
      <div id="dateSelected" class="hide col-md-12 col-sm-12" style="width: 100%;">
        <div class="dateLabel">Depuis quelle date ?</div>
        <div class="dateInput">
          <div class="labelSelect">
            <select class="select_day" name="daySituation">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_month" name="monthSituation">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_year" name="yearSituation">
            </select>
          </div>
        </div>
      </div>
      <!-- date situation - fin -->
      <!-- enfants - debut -->
      <div class="col-md-12 col-sm-12" style="width: 100%;">
        <label for="children" class="required">Enfant(s) à charge</label>
        <input class="numberstyle" id="children" type="number" min="0" max="10" step="1" value="0" name="enfant">
      </div>
      <!-- enfants - fin -->
    </div>
    <div class="btnForm">
      <div>
        <button type="button" class="btnPrev">Précédent</button>
        <button type="button" class="btnNext">Suivant</button>
      </div>
    </div>
  </div>
</div>