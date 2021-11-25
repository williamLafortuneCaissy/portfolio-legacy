// tween tutorial
// https://www.youtube.com/watch?v=S18Wh9IELo0

// timeline 
// https://greensock.com/position-parameter 

console.log('dynamic.js ready');

var tlDynamic = new TimelineMax();

// ('element', time, {properties->normal}, delay based on the end of the timeline)
tlDynamic.from('#dynamic_item1', .5, {y:-50, opacity: 0} );
tlDynamic.from('#dynamic_item2', .5, {y:-50, opacity: 0}, '-=.25');
tlDynamic.from('#dynamic_item3', .5, {y:-50, opacity: 0}, '-=.25');

// init controller that control all scenes 
const controller  = new ScrollMagic.Controller();

// create a scene used to trigger our tween
const sceneDynamic = new ScrollMagic.Scene({
	triggerElement: '#dynamic_section',
	reverse: false
})
	.setTween(tlDynamic)
		.addTo(controller); // assign the scene to the controller