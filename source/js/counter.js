function myFunction() {
    document.getElementById("demo").innerHTML = `Clicks: ` + Number(sessionStorage.clickcount++);
}