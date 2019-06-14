function activarJava() {
    test = document.getElementById("btnJava");
    test.addEventListener("mouseover", function(event) {
        test.className += "animated pulse slow";
        setTimeout(function() {
            test.className = "";
        }, 500);
    }, false);
}

function activarC() {
    test = document.getElementById("btnCplus");
    test.addEventListener("mouseover", function(event) {
        test.className += "animated pulse slow";
        setTimeout(function() {
            test.className = "";
        }, 500);
    }, false);
}