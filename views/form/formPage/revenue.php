<div class="container text-center situation_pro tab step" id="6-content">
  <div class="row" id="revenue">
    <div class="title">
      <h2 class="fw-light">
        Les revenus mensuels du foyer
      </h2>
    </div>
    <div class="step1_1A_project">
      <!-- revenus - debut -->
      <div class="col-md-12 col-sm-12 mb-4 revenu ">
        <label for="incomeBeforeTax" class="required">Vos revenus nets avant impôt <span class="incomeBeforeTax-validation validation-error"></span></label>
        <div class="amountInput">
          <input type="number" id="incomeBeforeTax" oninput="this.className = '' " name="incomeBeforeTax"  class="montantConso" >
          <span class="help-block">€</span>
        </div>
        <p class="helpConso">Tenez compte de votre 13eme mois &amp; des primes récurrentes.</p>
      </div>
      <!-- revenus - fin -->
      <!-- revenus co-emprunteur - debut -->
      <div class="subStepCoBorrower">
        <div class="col-md-12 col-sm-12 revenu">
          <label for="incomeBeforeTaxCo">Revenu nets avant impôt du co-emprunteur <span class="incomeBeforeTaxCo-validation validation-error"></span></label>
          <div class="amountInput">
            <input type="number" id="incomeBeforeTaxCo" oninput="this.className = '' " name="incomeBeforeTaxCo" class="montantConso" >
            <span class="help-block">€</span>
          </div>
          <p class="helpConso">Tenez compte de votre 13eme mois &amp; des primes récurrentes.</p>
        </div>
      </div>
      <!-- revenus co-emprunteur - fin -->
    </div>
    <div class="btnForm">
      <div>
        <button type="button" class="btnPrev">Précédent</button>
        <button type="button" class="btnNext" onclick="">Suivant</button>
      </div>
    </div>
  </div>
</div>