// Function to create a citation inside the wild_book
function citationHTML (pseudo, corpus) {
    let newElement = document.createElement('div')
    newElement.innerHTML = `<blockquote><p>${corpus}</p><small>by <cite>${pseudo}</cite</small></blockquote>`
    document.getElementById('citations').appendChild(newElement)
}

// Function to put a new comment inside a JSON object
function insertCommentToJSON ( objectJSON, comment) {
    objectJSON = JSON.parse(objectJSON)
    objectJSON.push(comment)
    objectJSON = JSON.stringify(objectJSON)
    return objectJSON
}

// Create a constructor for the comments
function comment(pseudo, corpus) {
    this.pseudo = pseudo
    this.corpus = corpus
}

// Create a array to conserve the comments
let citations = [] 
citations = JSON.stringify(citations)

// Write the first comments
let louisComment = new comment ('louis', 'Superbe formation, j\'ai eu la chance de former 22 noobs et de réussir avec succès mon CAPES développeur web!')

let lucasComment = new comment ('Lucas', 'Lorem ipsum, bro ! Et merci à Toto, Tutu et Tata pour leurs précieux conseils')

let amandineComment = new comment ('Amandine', 'Énorme grâce à cette formation j\'ai pu intégrer la maison Dior en tant que developpeur PHP. " JS is a useless language" ! Merci Gaëtan !')

let julienComment = new comment ('Julien', 'Malgré une super ambiance j\'ai quitté la wild après le projet 1, (conflit interne avec Ama....e) et j\'ai ouvert un foodtruck à Byron Bay en Australie. See you there mates! PS : -10% pour les wilders.')

// Insert the first comments inside the array citations
citations = insertCommentToJSON(citations, louisComment)
citations = insertCommentToJSON(citations, lucasComment)
citations = insertCommentToJSON(citations, amandineComment)
citations = insertCommentToJSON(citations, julienComment)

// Transform the citation into a Object
citations = JSON.parse(citations)

// Print the firsts comments
for (let i in citations ) {
    citationHTML(citations[i].pseudo, citations[i].corpus)
}

// Retransform the citation objet into a JSON object
citations = JSON.stringify(citations)


// Function who return a new citation when the user submit a new one by the form
document.getElementById('form_wild').addEventListener('submit', function() {

    // get the pseudo and the corpus by the form
    let pseudo = document.getElementById('pseudo').value
    let corpus = document.getElementsByTagName('textarea')[0].value

    // check if the values are not null or indefined
    if ( (! pseudo == '')  && (! corpus == '')) {

        // creation of the citation object
        newComment = new comment(pseudo, corpus)

        // Print the citation inside the web page
        citationHTML(newComment.pseudo, newComment.corpus)

        citations = insertCommentToJSON(citations, newComment)

    }
    else {
        console.error('Error')
    }
        }) 

