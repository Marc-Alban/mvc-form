<div class="container text-center situation_pro tab step" id="9-content">
  <div class="row" id="situationProfessional">
    <div class="title">
      <h2 class="fw-light">
        Votre situation professionnelle
      </h2>
    </div>
    <div class="row step1_1A_project conso_label">
      <!-- secteur activité - debut -->
      <div class="col-md-12 col-sm-12">
        <label for="professionalSector">Secteur d'activité <span class="professionalSector-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="professionalSector" name="professionalSector" class="selectListe">
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
      <!-- secteur activité - fin -->
      <!-- secteur professionnelle - debut -->
      <div class="col-md-12 col-sm-12">
        <label for="professionalType">Situation professionnelle <span class="professionalType-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="professionalType" name="professionalType" class="selectListe">
            <option value="" >Sélectionner</option>
            <option value="01">	Propriétaire agricole</option>
            <option value="02">	Ouvrier agricole</option>
            <option value="10">	Commerçant</option>
            <option value="15">	Artisan</option>
            <option value="19">	Forain</option>
            <option value="20">	Profession libérale </option>
            <option value="21">	Rentiers immobilier</option>
            <option value="25">	VRP sans fixe</option>
            <option value="28">	Cadre moyen médical</option>
            <option value="29">	Profession libérale médicale et paramédicale</option>
            <option value="30">	Cadre supérieur privé</option>
            <option value="31">	Cadre moyen secteur privé</option>
            <option value="40">	Cadre supérieur public et professeur</option>
            <option value="41">	Cadre moyen public – instituteur</option>
            <option value="48">	Infirmière et profession paramédicale</option>
            <option value="50">	Technicien</option>
            <option value="51">	Contremaître secteur privé – agent de maîtrise</option>
            <option value="55">	Ingénieur</option>
            <option value="60">	Employé de bureau</option>
            <option value="63">	Représentant salarié</option>
            <option value="64">	Vendeur – caissier de magasin</option>
            <option value="66">	Employé de commerce</option>
            <option value="68">	Employé de garage - apporteurs</option>
            <option value="70">	Employé et agent administratif</option>
            <option value="71">	Aide soignant hospitalier</option>
            <option value="72">	Agent de service public</option>
            <option value="73">	Ouvrier d’état</option>
            <option value="74">	Agent Public</option>
            <option value="80">	Ouvrier</option>
            <option value="81">	Chauffeur et livreur</option>
            <option value="85">	Agent de sécurité</option>
            <option value="86">	Assistante maternelle – employé de maison</option>
            <option value="89">	Étudiant</option>
            <option value="90">	Retraité secteur privé</option>
            <option value="91">	Retraité secteur public</option>
            <option value="92">	Demandeur d’emploi</option>
            <option value="93">	Intérimaire + 12 mois</option>
            <option value="94">	Invalide - Pensionné</option>
            <option value="95">	Divers</option>
            <option value="96">	Temporaire et Intérimaire</option>
            <option value="97">	Dirigeant de société</option>
            <option value="98">	Inactif - Sans profession – sans emploi</option>
            <option value="99">	Indéterminé</option>
          </select>
        </div>
      </div>
      <!-- secteur professionnelle - fin -->
      <!-- Contrat - debut -->
      <div class="col-md-12 col-sm-12">
        <label for="professionalContractType">Contrat <span class="professionalContractType-validation validation-error"></span></label>
        <div class="labelSelect">
          <select id="professionalContractType" name="professionalContractType" class="selectListe">
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
      <!-- Contrat - fin -->
      <!-- Profession - debut -->
      <div class="col-md-12 col-sm-12">
        <div class="textInput profession">
          <label for="profession" class="required">Profession <span class="profession-validation validation-error"></span></label>
          <input oninput="this.className = '' " type="text" id="profession" name="profession">
        </div>
      </div>
      <!-- Profession - fin -->
      <!-- date - debut -->
      <div class="col-md-12 col-sm-12">
        <div class="dateLabel">Depuis quelle date ?</div>
        <div class="dateInput">
          <div class="labelSelect">
            <select class="select_day" name="daySecteur">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_month" name="monthSecteur">
            </select>
          </div>
          <div class="labelSelect">
            <select class="select_year" name="yearSecteur">
            </select>
          </div>
        </div>
      </div>
      <!-- date - fin -->
    </div>
    <div class="btnForm">
      <div>
        <button type="button" class="btnPrev">Précédent</button>
        <button type="button" class="btnNext">Suivant</button>
      </div>
    </div>
  </div>
  <!-- Profesionnel - fin -->
</div>