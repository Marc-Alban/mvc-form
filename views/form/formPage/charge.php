<div class="container text-center situation_pro tab step" id="8-content">
  <div class="row" id="charge">
    <div class="title">
      <h2 class="fw-light">
        Les charges du foyer
      </h2>
    </div>
    <div class="step1_1A_project conso_label row">
      <!-- mensualite conso - debut -->
      <div class="col-md-12 col-sm-12 revenu">
        <label for="totalMensualitesCreditConso" class="required">Total mensualités crédit conso <span class="totalMensualitesCreditConso-validation validation-error"></span></label>
        <div class="amountInput">
          <input oninput="this.className = '' " type="number" id="totalMensualitesCreditConso" name="totalMensualitesCreditConso" class="montantConso">
          <span class="help-block">€</span>
        </div>
        <p class="helpConso">Indiquez le total de toutes vos mensualités conso y compris pour vos crédits renouvelables.</p>
      </div>
      <!-- mensualite conso - fin -->
      <!-- mensualite immo - debut -->
      <div class="col-md-12 col-sm-12 revenu">
        <label for="totalImmoCreditConso" class="required">Total mensualités crédit immobilier <span class="totalImmoCreditConso-validation validation-error"></span></label>
        <div class="amountInput">
          <input oninput="this.className = '' " type="number" id="totalImmoCreditConso" name="totalImmoCreditConso" class="montantConso">
          <span class="help-block">€</span>
        </div>
        <p class="helpConso">Total des mensualités immobilier y compris Prêt à taux zéro.</p>
      </div>
      <!-- mensualite immo - fin -->
      <!-- loyer - debut -->
      <div class="col-md-12 col-sm-12 revenu">
        <label for="rent" class="required">Loyer <span class="rent-validation validation-error"></span></label>
        <div class="amountInput">
          <input oninput="this.className = '' " type="number" id="rent" name="rent" class="montantConso">
          <span class="help-block">€</span>
        </div>
        <p class="helpConso">Saisir le montant de vos loyers.</p>
      </div>
      <!-- loyer - fin -->
    </div>
    <div class="btnForm">
      <div>
        <button type="button" class="btnPrev">Précédent</button>
        <button type="button" class="btnNext">Suivant</button>
      </div>
    </div>
  </div>
</div>