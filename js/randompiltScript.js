function juhuslikPilt()
{
    // massiivi tegemine
    const pildid = [
        'images/chai.png',
        'images/konn.png',
        'images/paike.png',
        'images/teekann.png',
        'images/triangel.png'
    ];

    const randomPilt = document.getElementById('randompilt');
    // Math.random() - juhuslik arv
    // Math.floor() - vأµtab arvust tأ¤isosa
    // pildid.length - mitu pilti on massiivis
    const juhuslikArv = Math.floor(Math.random() * pildid.length);
    randomPilt.src = pildid[juhuslikArv];
    vordleVastust();
}

function vordleVastust()
{
    let randomPilt = document.getElementById('randompilt');

    let valik = document.getElementsByName('valik');

    let vastus = document.getElementById('vastus')

    vastus.innerHTML = 'VALE'
    vastus.style.backgroundColor = 'red';
    vastus.style.width = randomPilt.width + 'px';

    for (let i = 0; i<valik.length; i++)
    {

        if (valik[i].checked === false) continue;

        if (randomPilt.getAttribute('src') === valik[i].value)
        {
            vastus.innerHTML = "أ•IGE"
            vastus.style.backgroundColor = 'green';
            break;
        }
    }
    arvutaPildiHind();
}

function arvuta(kogus, hind)
{
    return (kogus*hind).toFixed(2)
    // toFixed - أ¼mardab arvu valitud komakohani
}
const chaiHind = 2;
const konnHind = 1;
const paikeHind = 1.50;
const teekannHind = 1.70
const triangelHind = 1.80


const hinnad = [
    chaiHind,
    konnHind,
    paikeHind,
    teekannHind,
    triangelHind
]
const radioVastused = [
    v1,
    v2,
    v3,
    v4,
    v5
]

function arvutaPildiHind()
{
    let kogus = document.getElementById('tk').value;
    let vastus2 = document.getElementById('vastus2');

    let v1 = document.getElementById('v1');
    let v2 = document.getElementById('v2');
    let v3 = document.getElementById('v3');
    let v4 = document.getElementById('v4');
    let v5 = document.getElementById('v5');

    const pildid = [
        'images/chai.png',
        'images/konn.png',
        'images/paike.png',
        'images/teekann.png',
        'images/triangel.png'
    ];

    const hinnad = [
        chaiHind,
        konnHind,
        paikeHind,
        teekannHind,
        triangelHind
    ]

    const radioVastused = [
        v1,
        v2,
        v3,
        v4,
        v5
    ]

    for (let i=0; i<radioVastused.length; i++)
    {
        if (radioVastused[i].checked === true)
        {
            vastus2.innerHTML = "Summa: " + arvuta(kogus, hinnad[i]) + " â‚¬"
        }
    }

    vastus2.innerHTML = "Summa: " + arvuta(kogus, hinnad[pildid.indexOf(valitudpilt)]) + " â‚¬"
}

function kuvaPilt()
{
    let valitudPilt = document.getElementById('valitudPilt');
    let v1 = document.getElementById('v1');
    let v2 = document.getElementById('v2');
    let v3 = document.getElementById('v3');
    let v4 = document.getElementById('v4');
    let v5 = document.getElementById('v5');

    const radioVastused = [
        v1,
        v2,
        v3,
        v4,
        v5
    ]

    const pildid = [
        'images/chai.png',
        'images/konn.png',
        'images/paike.png',
        'images/teekann.png',
        'images/triangel.png'
    ];


    for (let i=0; i<radioVastused.length; i++)
    {
        if (radioVastused[i].checked === true)
        {
            valitudPilt.src = pildid[i];
        }
    }
    //valitudPilt.src = pildid[pildid.indexOf(valitudpilt)];
    // arvutaPildiHind();
}
