// Create a array to conserve the comments
let citations = [] 

// Create a constructor for the comments
function comment(pseudo, corpus) {
    this.pseudo = pseudo
    this.corpus = corpus
}

// Write the first comments
let louisComment = new comment ('louis', 'Super formation, j\'ai eu la chance de former 22 noobs et de réussir avec succes mon CAPES développeur web!')

let lucasComment = new comment ('Lucas', 'Lorem ipsum, bro! Et merci à Toto, Tutu et Tata pour leurs conseils précieux')

let amandineComment = new comment ('Amandine', 'Enorme grace à cette formation j\'ai pu intégrer la maison Dior en tant que developpeur PHP, " JS is a useless language" ! Merci Gaetan !')

let julienComment = new comment ('Julien', 'Malgré une super ambiance j\'ai quitté la wild après le projet 1,(Conflit interne avec Ama....e) ! Et j\'ai ouvert un foodtruck à Byron bay en Australie. See you there mates. PS : -10% pour les wilders!')

// Insert the first comments inside the array citations
citations.push(louisComment)
citations.push(lucasComment)
citations.push(amandineComment)
citations.push(julienComment)
    
// Function to create a citation inside the wild_book
function citationHTML (pseudo, corpus) {
    let newElement = document.createElement('div')
    newElement.innerHTML = `<blockquote><p>${corpus}</p><small>by <cite>${pseudo}</cite</small></blockquote>`
    document.getElementById('citations').appendChild(newElement)
}

for (let i in citations ) {
    citationHTML(citations[i].pseudo, citations[i].corpus)
}

// Function who return a new citation when the user submit a new one by the form
document.getElementById('form_wild').addEventListener('submit', function() {
    // get the pseudo and the corpus by the form
    let pseudo = document.getElementById('pseudo').value
    let corpus = document.getElementsByTagName('textarea')[0].value

    console.log(pseudo)
    // check if the values are not null or indefined
    if ( (! pseudo == '')  && (! corpus == '')) {

        citationHTML(pseudo, corpus)

        // creation of the citation object
        newComment = new comment(pseudo, corpus)

        // add the new comment inside the citations
        citations.push(newComment)

        citation = JSON.stringify(newComment)
        localStorage.setItem('test', newComment)
       
    }
    else {
        console.error('Error')
    }
        }) 

