// sirge joon
function sirgeJoon()
{
    const tahvel = document.getElementById('tahvel');
    if (!tahvel.getContext) return;
    let t = tahvel.getContext('2d'); // anname tahvlinimi on t
    // joon
    t.beginPath();
    t.strokeStyle = "black";
    t.lineWidth = 1;
    t.moveTo(51, 0); // alguspunkt
    t.lineTo(51, 150) // lأµpp-punkt
    t.stroke();
    t.moveTo(150, 0); // alguspunkt
    t.lineTo(150, 50) // lأµpp-punkt
    t.stroke();
    t.moveTo(249, 0); // alguspunkt
    t.lineTo(249, 150) // lأµpp-punkt
    t.stroke();
}

function kolmnurk()
{
    const tahvel = document.getElementById('tahvel');
    if (!tahvel.getContext) return;
    let t = tahvel.getContext('2d');
    //kolmurk
    t.beginPath();
    t.strokeStyle = "black";
    t.fillStyle = "black";
    t.lineWidth = 1;
    t.moveTo(50, 150);
    t.lineTo(150, 50);
    t.lineTo(250, 150);
    t.lineTo(50, 150);
    t.stroke();
    t.fill();
}

function puhasta()
{
    const tahvel = document.getElementById('tahvel');
    if (!tahvel.getContext) return;
    let t = tahvel.getContext('2d');
    t.clearRect(0, 0, 400, 350) // puhastan terve ekraani
}

function ring()
{
    const tahvel = document.getElementById('tahvel');
    let r = document.getElementById('raadius').value;

    if (!tahvel.getContext) return;
    let t = tahvel.getContext('2d');
    // أ¼mberjoon
    t.beginPath();
    t.strokeStyle = "white";
    t.fillStyle = "white";
    t.arc(150, (120), r, 0, 2*Math.PI, false) // x, y, R
    t.stroke();
    // tأ¤ida ring
    t.fill();
}

function ristkulik()
{
    const tahvel = document.getElementById('tahvel');
    let a = document.getElementById('laius');
    let b = document.getElementById('korgus');
    if (!tahvel.getContext) return;
    let t = tahvel.getContext('2d');
    t.fillStyle = "black";
    t.fillRect(50, 150, a.value, b.value)
}

function pilt()
{
    const tahvel = document.getElementById('tahvel');
    if (!tahvel.getContext) return;
    let t = tahvel.getContext('2d');

    const fail = new Image();
    fail.src = "https://picsum.photos/200/300?random=1";
    fail.onload = function () {
        t.drawImage(fail, 0, 0, 300,250);
    }

}