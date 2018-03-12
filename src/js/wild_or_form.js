// Function who return a new citation when the user submit a new one by the form
document.getElementById("form_wild").addEventListener("submit", function() {
    // get the pseudo and the corpus by the form
    var pseudo = document.getElementById("pseudo").value;
    var corpus = document.getElementsByTagName("textarea")[0].value;

    console.log(pseudo);
    // check if the values are not null or indefined
    if ( (! pseudo == "")  && (! corpus == "")) {

        // create a new citation to the wild_book
        var newElement = document.createElement("div");
        newElement.id= "New_citation";
        newElement.innerHTML = "<blockquote><p>" + corpus + "</p><small>by <cite>" + pseudo + "</cite></small></blockquote>";

        document.getElementById("citations").appendChild(newElement);

        // remove the form
        var form = document.getElementById("form_wild");
        for (i = form.childNodes.length - 1; i > 0;  i--){
            form.removeChild(form.childNodes[i]);
        }

        // creation of the citation object
        var citation = {
            pseudo: pseudo,
            corpus: corpus
        };

        citation = JSON.stringify(citation);
        localStorage.setItem("test", citation);
       
    }
    else {
        console.error("Error");
    }
        }) 
