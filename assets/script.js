// Récupère tous les éléments de classe "step" qui sont des conteneurs d'étapes
const steps = document.querySelectorAll('.step');
// Récupère tous les boutons "suivant" et "précédent"
// const submitButtons = document.getElementById('btnSubmit');
const submitButtons = document.getElementById('submit-button');
const nextButtons = document.querySelectorAll('.btnNext');
const prevButtons = document.querySelectorAll('.btnPrev');
// Récupère tous les boutons radio de la première étape
const radios = document.querySelectorAll('.btnRadioStart');
// Créer un tableau pour stocker les étapes précédentes entre 1 et 3
const previousSteps = [];
// Récupère tous les éléments de classe "coborrower"
const coborrower = document.getElementsByClassName('subStepCoBorrower');
const elt = document.getElementById('maritalStatus');
//Element formulaire
const regForm = document.getElementById('regForm');
//loader
const loader = document.getElementById("loader");
//formulaire
const form = document.getElementById("myform");


//***************************************************************//
//***************************************************************//
// Cache toutes les étapes sauf la première
steps.forEach((step, index) => {
    if (index !== 0) {
        step.style.display = 'none';
    }
});
//***************************************************************//
// Ajoute un gestionnaire d'événements "click" sur chaque bouton radio
radios.forEach((radio, index) => {
    radio.addEventListener('click', () => {
        // Masque toutes les étapes
        steps.forEach(step => {
            step.style.display = 'none';
        });
        // Affiche l'étape correspondant au bouton radio sélectionné
        steps[index + 1].style.display = 'block';
    });
});
//***************************************************************//
loader.style.display = "none";
submitButtons.style.display = "block";

  
submitButtons.onclick = function(e) {
    loader.style.display = "block";
    submitButtons.style.display = "none";

    if (validate('15-content')) {

        form.addEventListener("submit", function(event) {
        event.preventDefault();

        setTimeout(function() {
            const formData = new FormData(form);
            const data = new URLSearchParams();
        
            for (const [key, value] of formData.entries()) {
                data.append(key, value);
            }
            
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "controller.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    loader.style.display = "none";
                    // alert("Form submitted successfully!");
                }
            };
            xhr.send(data);
        }, 2000);
        });
    } else {
        // if validation fails, display an error message
        alert("Veuillez remplir tous les champs obligatoires");
        e.preventDefault();
        loader.style.display = "none";
        submitButtons.style.display = "block";
    }
  };



//***************************************************************//
//***************************************************************//
// Ajoute un gestionnaire d'événements "click" sur chaque bouton "suivant"
nextButtons.forEach(nextButton => {
    nextButton.addEventListener('click', (event) => {
        // Récupère l'étape courante
        const currentStep = document.querySelector('.step:not([style*="display: none"])');
        // Récupère l'index de l'étape courante
        const currentIndex = Array.from(steps).indexOf(currentStep);
        console.log(currentStep.id);
        // Prevent the default action of the button (e.g. submitting the form)
        event.preventDefault();
        if (validate(currentStep.id)) {
            currentStep.style.display = 'none';
            //  condition si l'étape courante est la première
            if (currentIndex > 0 && currentIndex < 4) {
                //Ajoute l'index de l'étape courante au tableau previousSteps
                previousSteps.push(currentIndex);
                // affiche la quatreieme étape
                return steps[4].style.display = 'block';
            }

            if (currentIndex == 9 && (elt.value == 'maried' || elt.value == 'civilPartnership'  || elt.value == 'unmarried')) {
                console.log(steps[currentIndex]);
                
                // Passer à l'étape suivante
                steps[currentIndex + 1].classList.remove('hide');
               //return  steps[currentIndex + 1].style.display = 'block!important';
               return  steps[currentIndex + 1].style.cssText = ';display:block !important;'
              } else if(currentIndex == 9 && (elt.value !== 'maried' || elt.value !== 'civilPartnership'  || elt.value !== 'unmarried' || elt.value !== "widow")) {
                // Cacher les étapes du formulaire avec un co-emprunteur
                console.log('test2');
               
                steps[10].style.display = 'none';
                steps[11].style.display = 'block';
                // Passer à l'étape suivante
               return steps[currentIndex + 1].style.display = 'block';
              } else if (currentIndex == 13 && (elt.value == 'maried' || elt.value == 'civilPartnership'  || elt.value == 'unmarried')) {
                console.log('test3');
               
                // Afficher les étapes du formulaire avec un co-emprunteur
               steps[14].style.display = 'block';
                // Passer à l'étape suivante
               return  steps[currentIndex + 1].style.display = 'block';
            }else if(currentIndex == 13 && (elt.value !== 'maried' || elt.value !== 'civilPartnership'  || elt.value !== 'unmarried' || elt.value !== "widow")) {
                console.log('test4');
              
                // Cacher les étapes du formulaire avec un co-emprunteur
                steps[14].style.display = 'none';
                steps[15].style.display = 'block';
                // Passer à l'étape suivante
                return steps[currentIndex + 1].style.display = 'block';
            }
          return steps[currentIndex + 1].style.display = 'block';
          }
    });
});
//***************************************************************//
// Ajoute un gestionnaire d'événements "click" sur chaque bouton "précédent"
prevButtons.forEach(prevButton => {
    prevButton.addEventListener('click', function (event) {
        // annule l'action par défaut du bouton (par exemple, soumettre le formulaire)
        event.preventDefault();
        // Récupère l'étape courante
        const currentStep = document.querySelector('.step:not([style*="display: none"])');
        // Récupère l'index de l'étape courante
        const currentIndex = Array.from(steps).indexOf(currentStep);
        // condition si l'étape courante est entre 0 et 4
        if (previousSteps.length > 0 && currentIndex < 4) {
            // Supprime le premier élément du tableau previousSteps
            previousSteps.splice(0, previousSteps.length);
        }

        if (currentIndex <= 3) {
            currentStep.style.display = 'none';
            steps[0].style.display = 'block';
        } else if (currentIndex == 4 && previousSteps.length > 0) {
            currentStep.style.display = 'none';
            steps[previousSteps[0]].style.display = 'block';
        } else if (currentIndex == 4 && previousSteps.length == 0) {
            currentStep.style.display = 'none';
            steps[0].style.display = 'block';
        }else{
            currentStep.style.display = 'none';
            steps[currentIndex - 1].style.display = 'block';
        }


        if(currentStep.id == '10-content' && (elt.value !== 'maried' || elt.value !== 'civilPartnership'  || elt.value !== 'unmarried' || elt.value !== "widow")) {
            steps[11].style.display = 'none';
         }else if (currentStep.id == '14-content' && (elt.value !== 'maried' || elt.value !== 'civilPartnership'  || elt.value !== 'unmarried' || elt.value !== "widow")) {
           // Afficher les étapes du formulaire sans un co-emprunteur
           steps[15].style.display = 'none';
        }else if (currentStep.id == '11-content' && (elt.value !== 'maried' || elt.value !== 'civilPartnership'  || elt.value !== 'unmarried' || elt.value !== "widow")) {
            // Afficher les étapes du formulaire sans un co-emprunteur
            steps[9].style.display = 'block';
            // Afficher les étapes du formulaire sans un co-emprunteur
            steps[10].style.display = 'none';
        }
        
        if (currentStep.id == '11-content' && (elt.value == 'maried' || elt.value == 'civilPartnership'  || elt.value == 'unmarried')) {
            // Afficher les étapes du formulaire sans un co-emprunteur
            steps[9].style.display = 'none';
            // Afficher les étapes du formulaire sans un co-emprunteur
            steps[10].style.display = 'block';
        }
    });
});
//***************************************************************//
function selectMaritalStatus(select) {
    if ((select.value == 'maried' || select.value == 'civilPartnership')) {
        //all element html have class coborrower add hide 
        for (let i = 0; i < coborrower.length; i++) {
            coborrower[i].classList.remove('hide');
        }
        return document.getElementById('dateSelected').classList.remove("hide");
    }
    if (select.value == 'unmarried' && select.value == 'widow') {
        //all element html have class coborrower add hide 
        for (let i = 0; i < coborrower.length; i++) {
           coborrower[i].classList.remove('hide');
        }
    return document.getElementById('dateSelected').classList.add("hide");

    }
    //all element html have class coborrower remove hide
    for (let i = 0; i < coborrower.length; i++) {
        coborrower[i].classList.add('hide');
    }
    return document.getElementById('dateSelected').classList.add("hide");
}
//***************************************************************//