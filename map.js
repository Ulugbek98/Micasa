ymaps.ready(function () {
   
    var myMap = new ymaps.Map('map', {
        center: [41.29892216957555, 69.27835438621737],
        controls: ['fullscreenControl'],
        zoom: 17
    });
    myMap.controls.add('zoomControl', {
        size: "small",
    });
    myMap.behaviors.disable('scrollZoom');
    myMap.geoObjects
        .add(new ymaps.Placemark([41.29885216957555, 69.27835438621737], {
            iconCaption: 'MICASA'
        }, {
            preset: 'islands#dotIcon',
            iconColor: '#141414',
        }))
});


