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
            link: "for.html"
        },
        {
            clave: "para",
            tema: "For-JAVA",
            link: "forj.html"
        },
        {
            clave: "for",
            tema: "For-C++",
            link: "for.html"
        },
        {
            clave: "for",
            tema: "For-JAVA",
            link: "forj.html"
        },
        {
            clave: "mientras",
            tema: "While-C++",
            link: "while.html"
        },
        {
            clave: "mientras",
            tema: "While-JAVA",
            link: "whilej.html"
        },
        {
            clave: "while",
            tema: "While-C++",
            link: "while.html"
        },
        {
            clave: "while",
            tema: "While-JAVA",
            link: "whilej.html"
        },
        {
            clave: "haz",
            tema: "DoWhile-C++",
            link: "dowhile.html"
        },
        {
            clave: "haz",
            tema: "DoWhile-JAVA",
            link: "dowhilej.html"
        },
        {
            clave: "dowhile",
            tema: "DoWhile-C++",
            link: "dowhile.html"
        },
        {
            clave: "dowhile",
            tema: "DoWhile-JAVA",
            link: "dowhilej.html"
        },
        {
            clave: "clases",
            tema: "Clases-JAVA",
            link: "clasesJ.html"
        },
        {
            clave: "encapsulación",
            tema: "Encapsulación-JAVA",
            link: "encapsulacionJ.html"
        },
        {
            clave: "herencia",
            tema: "Herencia-JAVA",
            link: "herenciaJ.html"
        },
        {
            clave: "objeto",
            tema: "Objeto-JAVA",
            link: "objetoJ.html"
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
                var icon = document.createElement("i");
                icon.setAttribute('class', 'fas fa-book-open');
                newLink.setAttribute('class', 'resultado snip1434 size');
                newLink.setAttribute('href', preguntas[indice].link);
                var textnode = document.createTextNode(preguntas[indice].tema);
                newLink.appendChild(textnode);
                newLink.appendChild(icon);
                node.appendChild(newLink);
                document.getElementById("demo").appendChild(node);
            }
        }
    }
}