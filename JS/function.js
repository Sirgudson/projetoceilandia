document.querySelector(".compare #compare-ip").addEventListener("input",function(e){
  document.querySelector(".compare .before .after").style.width = (+e.target.value) + "px";
});

document.querySelector(".compare #compare-ip").addEventListener("change",function(e){
  document.querySelector(".compare .before .after").style.width = (+e.target.value) + "px";
});

const imgs = document.querySelector("#img");
const img = document.querySelectorAll("#img img");

var idx = 0;
function carrossel() {
    idx++;
    
    if (idx > img.length - 1) {
        idx = 0;
    }
    console.log(idx);
    imgs.style.transform = `translateX(${-idx * 1300}px)`;
}
setInterval(carrossel, 1800);