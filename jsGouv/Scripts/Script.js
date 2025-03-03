import { getRegions } from "./api/Regions.js";
import {getDepartement} from "./api/getDepartements.js"
import {getCommune} from "./api/getCommunes.js"


getRegions().then(lesRegions => {
    console.log(lesRegions);
    lesRegions.sort((a, b) => {
        return a.nom.localeCompare(b.nom, 'fr', { sensitivity: 'base' });
    });
    lesRegions.forEach(region => {
        console.log(`Code: ${region.code}, Nom: ${region.nom}`);
        const selectElement = document.getElementById('regionsSelect');
        selectElement.addEventListener("change", RegionSelectChange)
            const option = document.createElement('option');
            option.value = region.code;
            option.textContent = region.nom;
            selectElement.appendChild(option);
          
    });
}).catch(error => {
    // Gérer ou rapporter une erreur si la promesse de getRegions échoue
    console.error('Erreur lors de la récupération des régions:', error);
});



function RegionSelectChange() {
    console.log(this.value);
   
    if (document.getElementById("departementSelect") == null) {
        const departementSelect = document.createElement('select');
        departementSelect.id = "departementSelect"
        document.body.appendChild(departementSelect);
    } else { 
        document.getElementById('departementSelect').innerHTML = ""
    }
    
    getDepartement(this.value).then(lesDepartement => {
        console.log(lesDepartement);
        lesDepartement.forEach(departement => { 
            const option = document.createElement('option'); 
            option.value = departement.code; 
            option.textContent = departement.nom; 
            departementSelect.appendChild(option);
        })
       
    }).catch(error => {
        // Gérer ou rapporter une erreur si la promesse de getRegions échoue
        console.error('Erreur lors de la récupération des régions:', error);
    });
    
    
}

/*function DepartementSelectChange() {
    console.log(this.value);
   
    if (document.getElementById("communeSelect") == null) {
        const communeSelect = document.createElement('select');
        communeSelect.id = "communeSelect"
        document.body.appendChild(communeSelect);
    } else { 
        document.getElementById('communeSelect').innerHTML = ""
    }
    
    getCommune(this.value).then(lesCommunes => {
        console.log(lesCommunes);
        lesCommunes.forEach(commune => { 
            const option = document.createElement('option'); 
            option.value = commune.code; 
            option.textContent = commune.nom; 
            communeSelect.appendChild(option);
        }) 
       
    }).catch(error => {
        // Gérer ou rapporter une erreur si la promesse de getRegions échoue
        console.error('Erreur lors de la récupération des départements:', error);
    });
    
    
}*/