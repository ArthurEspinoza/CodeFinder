function autocompletado() {
    document.getElementById("demo").innerHTML = '';

    // var preguntas = [
    //     "ActionScript",
    //     "AppleScript",
    //     "Asp",
    //     "BASIC",
    //     "C",
    //     "C++",
    //     "Clojure",
    //     "COBOL",
    //     "ColdFusion",
    //     "Erlang",
    //     "Fortran",
    //     "Groovy",
    //     "Haskell",
    //     "Java",
    //     "JavaScript",
    //     "Lisp",
    //     "Perl",
    //     "PHP",
    //     "Python",
    //     "Ruby",
    //     "Scala",
    //     "Scheme"
    // ];
    var preguntas = [{
            clave: "para",
            tema: "For-C++",
            link: "index.html"
        },
        {
            clave: "para",
            tema: "For-JAVA",
            link: "index.html"
        },
        {
            clave: "for",
            tema: "For-C++",
            link: "index.html"
        },
        {
            clave: "for",
            tema: "For-JAVA",
            link: "index.html"
        },
        {
            clave: "si",
            tema: "If-C++",
            link: "index.html"
        },
        {
            clave: "si",
            tema: "If-JAVA",
            link: "index.html"
        },
        {
            clave: "if",
            tema: "If-C++",
            link: "index.html"
        },
        {
            clave: "if",
            tema: "If-JAVA",
            link: "index.html"
        }
    ];
    /*var pal = document.getElementById("buscar-pal").value;
    var tam = pal.length;
    for (indice in preguntas) {
        var nombre = preguntas[indice].clave;
        var str = nombre.substring(0, tam);
        if (pal.length <= nombre.length && pal.length != 0 && nombre.length != 0) {
            if (pal.toLowerCase() == str.toLowerCase()) {
                var node = document.createElement("LI");
                var newLink = document.createElement("a");
                newLink.setAttribute('class', 'resultado');
                newLink.setAttribute('href', preguntas[indice].link);
                var textnode = document.createTextNode(preguntas[indice].tema);
                newLink.appendChild(textnode);
                node.appendChild(newLink);
                document.getElementById("demo").appendChild(node);
            }
        }
    }*/
    var pal = document.getElementById("buscar-pal").value;
    console.log(pal);
    var tam = pal.length;
    for (indice in preguntas) {
        var nombre = preguntas[indice].clave;
        var str = nombre.substring(0, tam);
        if (pal.length <= nombre.length && pal.length != 0 && nombre.length != 0) {
            if (pal.toLowerCase() == str.toLowerCase()) {
                var node = document.createElement("LI");
                var newLink = document.createElement("a");
                newLink.setAttribute('class', 'resultado');
                newLink.setAttribute('href', preguntas[indice].link);
                var textnode = document.createTextNode(preguntas[indice].tema);
                newLink.appendChild(textnode);
                node.appendChild(newLink);
                document.getElementById("demo").appendChild(node);
            }
        }
    }
}