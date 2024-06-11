// 1- i need to get the current position of mouse every time it moves (x axis y axis)

// 2- i need to set those x and y values to the circular dispatchEvent

// 3- every time mouse moves we should get notified =using mouseMove listner
//     every time listner gets notifies, we need to get the values for x and y axis,
//     and then update it to circle




let circle = document.querySelector('#circle');
const button= document.querySelector('#button');
const svglem= document.querySelector('svg');


window.addEventListener('mousemove', function(details){
    let xValue = details.clientX;
    let yValue = details.clientY;

    this.setTimeout(function(){
        circle.style.top = yValue + 'px';
        circle.style.left = xValue + 'px';
    }, 100);

});



button.addEventListener('click',function(){
    t1.reverse();
    setTimeout(function(){
        svglem.classList.add('animate');
    },5000)
    setTimeout(function(){
        window.location.href='/project/mainpage/index.html ';
    },10000)

});






var t1 = gsap.timeline();

t1
.from('#wrapper',{
    duration:4,
    scale:.7,
    ease:'Expo.easeInOut',
    opacity:0
})

.from('#whitestrip',{
    duration:2,
    width:0,
    ease:'Expo.easeInOut',
},'-=2.7')

.from('#card',{
    duration:1.5,
    x:50,
    ease:'Expo.easeInOut',
    opacity:0
},'-=1.3')
.from('#linelem',{
    duration:1.5,
    x:50,
    ease:'Expo.easeInOut',
    opacity:0
},'-=1.3')
.from('#linelem .line',{
    duration:2,
    width:0,
    ease:'Expo.easeInOut',
    opacity:0
},'-=1')
.from('#card p',{
    duration:1.5,
    y:30,
    ease:'Expo.easeInOut',
    opacity:0
},'-=1')
.from('#sidelem',{
    duration:2,
    x:30,
    ease:'Expo.easeInOut',
    opacity:0
},'-=1.5')


