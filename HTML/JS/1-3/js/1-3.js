function trangle() {
    let id = document.getElementById('trangleNum').value;
    let squareANS = ""
    let rightTrangleAns = ""
    let trangleAns = ""

    for (i = 0; i < id; i++) {
        for (j = 1; j < id; j++) {
            squareANS = squareANS + '*';
        }
        squareANS = squareANS + '*' + "<br />";
    }
    document.getElementById('square').innerHTML = squareANS + "<br />";

    for (i = 0; i < id; i++) {
        for (j = 0; j < i; j++) {
            rightTrangleAns = rightTrangleAns + '*';
        }
        rightTrangleAns = rightTrangleAns + '*' + "<br />";
    }
    document.getElementById('rightTrangle').innerHTML = rightTrangleAns + "<br />";

    for (i = 0; i < id; i++) {
        for (j = 0; j < id - i; j++) {
            trangleAns = trangleAns + "&nbsp;"
        }
        for (k = 0; k <= i; k++) {
            trangleAns = trangleAns + "*";
        }
        trangleAns = trangleAns + "<br />";
    }
    document.getElementById("trangle").innerHTML = trangleAns + "<br />"
}
