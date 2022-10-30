function star() {
    let id = document.getElementById('starNum').value;
    let answer = ""
    for (i = 0; i < id; i++) {
        answer = answer + '*'
    }
    document.getElementById('starAns').innerHTML = answer + "<br />";
}