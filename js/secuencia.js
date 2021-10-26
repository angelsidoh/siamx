// var rtime = 0;
// var time = 0;
// var lapso = 0;
// var timeb = 0;
// async function task(i) { // 3
//     // ix = zfill(time , 2);

//     lapso = String(time).padStart(2, '0');
//     rtime = String(rtime).padStart(2, '0');
//     if (timeb <= 334) {
//         if (lapso == 100) {
//             time = 0;
//             rtime++;
//         } else {
//             var div = document.createElement("div"); // 
//             div.id = "sec1_0" + rtime + lapso;
//             div.className = "data"+ rtime + lapso;
//             document.contenedor-secuencia.appendChild(div);
//             imgx = "url(img/secuencia/SECUENCIA1/SECUENCIA1_0" + rtime + lapso + ".jpg)";
//             // $('#contenedor-secuencia').css({
//             //     "background-image": imgx,
//             //     "background-size": "contain",
//             //     "background-position": "center",
//             //     "background-repeat": "no-repeat"
//             // }
//             // );
//             console.log(imgx);
//         }
//     }
//     time++;
//     timeb++;



//     await timer(41.66);

// }

// async function main() {
//     for (let i = 0; i < 340; i += 10) {
//         for (let j = 0; j < 10; j++) { // 1

//             await task(i + j);

//         }
//     }
// }

// main();

// function timer(ms) { return new Promise(res => setTimeout(res, ms)); }

