//slider
let items = document.querySelectorAll('.slider .list  .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let thumbnails = document.querySelectorAll('.thumbnail .item');

//config param
let countItem = items.length;
let itemActive = 0;
//event next click
next.onclick = function(){
    itemActive = itemActive + 1;
    if(itemActive >= countItem){
        itemActive = 0;
    }
    showslider();
}
prev.onclick = function(){
    itemActive = itemActive - 1;
    if(itemActive < 0){
        itemActive = countItem - 1;
    }
    showslider();
}
//auto run slider
let refreshInterval = setInterval(() => {
    next.click();
}, 5000)
function showslider(){
    //removeitem actve old
    let itemActiveOld = document.querySelector('.slider .list .item.active');
    let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
    itemActiveOld.classList.remove('active');
    thumbnailActiveOld.classList.remove('active');
    //active new item
    items[itemActive].classList.add('active');
    thumbnails[itemActive].classList.add('active');
    //clear auto time slider
clearInterval(refreshInterval);
refreshInterval = setInterval(() => {
    next.click();
}, 5000)
}
//click thumbnails
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', ()=> {
        itemActive = index;
        showslider();
    })
})
//end slider