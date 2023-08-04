<div class="container text-center situation_pro tab step" id="12-content">
  <div class="row" id="bank">
    <div class="title">
      <h2 class="fw-light">
        Ma banque
      </h2>
    </div>
    <div class="row mx-0 step1_1A_project conso_label">
      <!-- banque - début -->
      <div class="col-md-12 col-sm-12">
        <label for="bankType">Quelle est votre banque ? <span class="bankType-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="bankType" class="selectListe" name="bankType">
            <option value="">Sélectionner</option>
            <option value="BNP">BNP</option>
            <option value="BANQUE POPULAIRE">Banque populaire</option>
            <option value="CREDIT AGRICOLE">Crédit agricole</option>
            <option value="CCP">CCP</option>
            <option value="CAISSE D EPARGNE">Caisse d'épargne</option>
            <option value="CREDIT LYONNAIS">Crédit lyonnais</option>
            <option value="CREDIT MUTUEL">Crédit mutuel</option>
            <option value="SOCIETE GENERALE">Société générale</option>
            <option value="AUTRE">Autre</option>
            <option value="PAS DE BANQUE">Pas de banque</option>
          </select>
        </div>
      </div>
      <!-- banque - fin -->
      <!-- agence - début -->
      <div class="col-md-12 col-sm-12">
        <label for="bankCardType">Quelle est votre carte bancaire ? <span class="bankCardType-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="bankCardType" class="selectListe" name="bankCardType">
            <option value="">Sélectionner</option>
            <option value="blueCard">Cb</option>
            <option value="visa">Visa</option>
            <option value="mastercard">Mastercard</option>
            <option value="gold">Gold</option>
            <option value="premier">Premier</option>
            <option value="ae">American Express</option>
            <option value="sc">Sans Carte</option>
          </select>
        </div>
      </div>
      <!-- agence - fin -->
      <!-- année banque - début -->
      <div class="col-md-12 col-sm-12" style="width: 100%;">
        <div class="dateLabel">Depuis quelle date ?</div>
        <div class="dateInput">
          <div class="labelSelect">
            <select class="select_year" name="yearBank">
            </select>
          </div>
        </div>
      </div>
      <!-- année banque - fin -->
    </div>
    <div class="btnForm">
      <div>
        <button type="button" class="btnPrev">Précédent</button>
        <button type="button" class="btnNext">Suivant</button>
      </div>
    </div>
  </div>
</div>