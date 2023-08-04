<div class="container text-center situation_pro tab step" id="4-content">
  <div class="row" id="subStepProjectRevolvingCredit">
    <div class="title">
      <h2 class="fw-light">
        Mon crédit pour financer mon projet
      </h2>
    </div>
    <!-- crédit -->
    <div class="row mx-0 step1_1A_project conso_label">
      <!-- montant - debut -->
      <div class="col-md-12 col-sm-12 mb-4 consoHelp">
        <label for="amount" class="required">Montant de crédit souhaité <span class="amount-validation validation-error"></span></label>
        <div class="amountInput">
          <input type="number" min="0" id="amount" name="amount" class="montantConso">
          <span class="help-block">€</span>
        </div>
        <p class="helpConso">Veuillez indiquer un montant compris entre 0 € et 75000 €</p>
      </div>
      <!-- montant - fin -->
      <!-- durée - debut -->
      <div class="col-md-12 col-sm-12 mb-4">
        <label for="duration" class="required input-group">Durée de remboursement souhaitée (années) <span class="duree-validation validation-error"></label>
        <div class="yearInput">
          <input type="number" id="duration" name="duration" min="1" max="15">
          <span class="help-block">an(s)</span>
        </div>
      </div>
      <!-- durée- fin -->
      <!-- fond - debut -->
      <div class="col-md-12 col-sm-12">
        <label for="fundsDelay">Quand souhaitez-vous obtenir les fonds ? <span class="fundsDelay-validation validation-error"></label>
        <div class="labelSelect">
          <select id="fundsDelay" class="selectListe" name="fundsDelay">
            <option value="">Sélectionner</option>
            <option value="now">Immédiatement</option>
            <option value="1month">Dans un délai d'un mois</option>
            <option value="+1month">Dans un délai &gt; à un mois</option>
          </select>
        </div>
      </div>
      <!-- fond - fin -->
      <!-- connaissance - debut -->
      <div class="col-md-12 col-sm-12">
        <label for="level">Quel est votre niveau de connaissance dans le crédit ? <span class="level-validation validation-error"></label>
        <div class="labelSelect">
          <select id="level" class="selectListe" name="level">
            <option value="">Sélectionner</option>
            <option value="beginner">Débutant</option>
            <option value="intermediate">Intermédiaire</option>
            <option value="confirmate">Confirmé</option>
            <option value="expert">Expert</option>
          </select>
        </div>
      </div>
      <!-- connaissance - fin -->
      <!-- assurance - debut -->
      <div class="col-md-12 col-sm-12">
        <label for="assurance">Je choisis mon option d'assurance ? <span class="assurance-validation validation-error"></label>
        <div class="labelSelect">
          <select id="assurance" class="selectListe" name="assurance">
            <option value="">Sélectionner</option>
            <option value="OUI">Décès, invalidité, Arrêt de travail, Perte d'emploi</option>
            <option value="NON">Je refuse l'assurance proposé</option>
          </select>
        </div>
      </div>
      <!-- assurance - fin -->
    </div>
    <div class="btnForm">
      <div>
        <button type="button" class="btnPrev">Précédent</button>
        <button type="button" class="btnNext">Suivant</button>
      </div>
    </div>
  </div>
</div>
