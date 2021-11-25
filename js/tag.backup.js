'strict'

window.onload=setTagColor();

function setTagColor() {
    let tags = document.getElementsByClassName('cv__tag');
    // considering r21+g72+b07=218 and many tests, here are the extreme values
    let values = [
        { r: 255, g: 228, b: 4 },   // yellow
        { r: 255, g: 204, b: 251 }, // pink
        { r: 164, g: 254, b: 10 },  // green
        { r: 79,  g: 255, b: 254 }, // cyan
    ]
    for (let i = 0; i < tags.length; i++) {
        const element = tags[i];
        rndSeed = Math.floor(Math.random() * values.length);

        let r = values[rndSeed].r;
        let g = values[rndSeed].g;
        let b = values[rndSeed].b;

        element.style.backgroundColor = 'rgb('+r+','+g+','+b+')'
    }
}
