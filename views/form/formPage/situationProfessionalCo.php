<div class="container text-center situation_pro tab subStepCoBorrower step" id="10-content">
  <div class="row" id="situationProfessionalCo">
    <div class="title">
      <h2 class="fw-light">
        Situation professionnelle co-emprunteur
      </h2>
    </div>
    <div class="row step1_1A_project conso_label">
      <!-- Secteur d'activité co-emprunteur -  debut -->
      <div class="col-md-12 col-sm-12">
        <label for="professionalSectorCo">Secteur d'activité co-emprunteur <span class="professionalSectorCo-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="professionalSectorCo" name="professionalSectorCo" class="selectListe">
            <option value="" >Sélectionner</option>
            <option value="publicSector">Secteur public</option>
            <option value="privateSector">Secteur privé</option>
            <option value="agriculturalSector">Secteur agricole</option>
            <option value="artisansCommercantSector">Secteur Artisans - commerçants</option>
            <option value="liberalPprofessionsSector">Professions libérales</option>
            <option value="RetiredOrothersSector">Retraité ou autres</option>
          </select>
        </div>
      </div>
      <!-- Secteur d'activité co-emprunteur -  fin -->
      <!-- Situation professionnelle co-emprunteur -  debut -->
      <div class="col-md-12 col-sm-12 consoHelp">
        <label for="professionalTypeCo">Situation professionnelle co-emprunteur <span class="professionalTypeCo-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="professionalTypeCo" name="professionalTypeCo" class="montantConso" class="selectListe">
            <option value="" >Sélectionner</option>
            <option value="student">Étudiant</option>
            <option value="retiredFromThePrivateSector">Retraité du secteur privé</option>
            <option value="retiredFromThePublicSector">Retraité du secteur public</option>
            <option value="jobseeker">Demandeur d'emploi</option>
            <option value="disabledAndPensioner">Invalide et pensionné</option>
            <option value="withoutProfessionWithoutEmployment">Sans profession - sans emploi</option>
            <option value="various">Various</option>
            <option value="vRPWithoutLandline">VRP sans fixe</option>
            <option value="nurseMiddleManagerMedicalSector">Infirmière - cadre moyen secteur médical</option>
            <option value="liberalMedicalAndParamedicalProfession">Profession libérale médicale et paramédicale</option>
            <option value="craftsmanTrader">Artisan / commerçant</option>
            <option value="agriculturalWorker">Salarié agricole</option>
            <option value="farmOwner">Propriétaire agricole</option>
            <option value="seniorManagerAndProfessor">Cadre supérieur et professeur</option>
            <option value="middleManagement">Cadre moyen</option>
            <option value="teacheNurseAndParamedicalProfession">Instituteur / infirmière et profession paramédicales</option>
            <option value="employeeAndAdministrativeAgent">Employé et agent administratif</option>
            <option value="serviceAgent">Agent de service</option>
            <option value="stateWorker">Ouvrier d’état</option>
            <option value="publicOfficial">Agent public</option>
            <option value="hospitalCaregiver">Aide soignant hospitalier</option>
            <option value="senior">Cadre supérieur</option>
            <option value="engineer">Ingénieur</option>
            <option value="technician">Technicien</option>
            <option value="foremanSupervisor">Contremaître - agent de maîtrise</option>
            <option value="securityAgent">Agent de sécurité</option>
            <option value="commercialEmployee">Employé de commerce</option>
            <option value="maternalAssistant">Assistante maternelle</option>
            <option value="domesticWorker">Employé de maison</option>
            <option value="clerk">Employé de bureau</option>
            <option value="salespersonStoreCashier">Vendeur - caissier de magasin</option>
            <option value="employeeRepresentative">Représentant salarié</option>
            <option value="driverAndDeliveryMan">Chauffeur et livreur</option>
            <option value="other">Autre</option>
          </select>
        </div>
      </div>
      <!-- Situation professionnelle co-emprunteur -  fin -->
      <!-- Contrat co-emprunteur -  debut -->
      <div class="col-md-12 col-sm-12">
        <label for="professionalContractTypeCo">Contrat co-emprunteur <span class="professionalContractTypeCo-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="professionalContractTypeCo" name="professionalContractTypeCo" class="selectListe">
            <option value="" >Sélectionner</option>
            <option value="CDITrialPeriodEnded">CDI période d'essai terminée</option>
            <option value="CDITrialPeriodNotEnded">CDI période d’essai non terminée</option>
            <option value="temporaryContract">CDD</option>
            <option value="TRAINEESHIP">Stages</option>
            <option value="INTERIM">INTERIM</option>
            <option value="other">Autre</option>
          </select>
        </div>
      </div>
      <!-- Contrat co-emprunteur -  fin -->
      <!-- Profession co-emprunteur -  debut -->
      <div class="col-md-12 col-sm-12">
        <div class="textInput professionCo">
          <label for="professionCo">Profession co-emprunteur <span class="professionCo-validation validation-error"></span></label>
          <input oninput="this.className = '' " type="text" id="professionCo" name="professionCo">
        </div>
      </div>
      <!-- Profession co-emprunteur -  fin -->
      <!-- date co -  debut -->
      <div class="col-md-12 col-sm-12">
        <div class="dateLabel">Depuis quelle date ?</div>
        <div class="dateInput">
          <div class="labelSelect">
            <select class="select_day" name="daySecteurCo">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_month" name="monthSecteurCo">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_year" name="yearSecteurCo">
            </select>
          </div>
        </div>
      </div>
      <!-- date co  -  fin -->
    </div>
    <div class="btnForm">
      <div>
        <button type="button" class="btnPrev">Précédent</button>
        <button type="button" class="btnNext">Suivant</button>
      </div>
    </div>
  </div>
</div>