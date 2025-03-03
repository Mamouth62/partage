function getRegions() {
    let url = 'https://geo.api.gouv.fr/regions';
    const browsers = document.getElementById('browsers')
    // Retourner la promesse créée par fetch
    return fetch(url)
    .then(response => {
    if (!response.ok) {
    throw new Error('Problème de réseau');
    }
    return response.json(); // Parser et retourner le corps de la réponse en JSON si tout va bien
    })
    .catch(error => {
    console.error('Fetch error:', error); // Afficher l'erreur dans la console
    throw error; // Relancer l'erreur pour la gestion d'erreur externe
    });
    }
    // Utiliser la fonction getRegions et traiter les données de manière asynchrone

  
        export{getRegions}
    



   