import * as THREE from './node_modules/three/build/three.module.js';
import './getModel.js';
import {
    BoxGeometry,
    BufferGeometry,
    CircleGeometry,
    Color,
    ConeGeometry,
    Curve,
    CylinderGeometry,
    DodecahedronGeometry,
    DoubleSide,
    ExtrudeGeometry,
    Float32BufferAttribute,
    FontLoader,
    Group,
    IcosahedronGeometry,
    LatheGeometry,
    LineSegments,
    LineBasicMaterial,
    Mesh,
    MeshPhongMaterial,
    OctahedronGeometry,
    ParametricGeometry,
    PerspectiveCamera,
    PlaneGeometry,
    PointLight,
    RingGeometry,
    Scene,
    Shape,
    ShapeGeometry,
    SphereGeometry,
    TetrahedronGeometry,
    TextGeometry,
    TorusGeometry,
    TorusKnotGeometry,
    TubeGeometry,
    Vector2,
    Vector3,
    WireframeGeometry,
    WebGLRenderer,
} from './node_modules/three/build/three.module.js';
import { OrbitControls } from './node_modules/three/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from './node_modules/three/examples/jsm/loaders/GLTFLoader.js';

const canvas = document.querySelector('#canvas');
const pauseBtn = document.querySelector('#pause')
const playBtn = document.querySelector('#play')
const mainContainer = document.querySelector('#main-container')
const slider = document.querySelector('#timeline')


const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

const renderer = new THREE.WebGL1Renderer({
    antialias: true
});

canvas.appendChild( renderer.domElement );
const control = new OrbitControls(camera, renderer.domElement);

let mixer, clock;
let is_playing = false;
let slider_touched = false;

let highestDuration;
let lastSliderVal;
let difTimeSlider;

let defaultModel = './model/charizard.gltf';
let currentObject;

const loader = new GLTFLoader();
clock = new THREE.Clock();

camera.position.z = 50;
camera.position.y = 0;
camera.position.x = 0;

function resize() {
    let canvas = renderer.domElement
    let width = mainContainer.clientWidth
    let height = mainContainer.clientHeight

    if (canvas.width !== width || canvas.height !== height) {
        renderer.setSize(width, height, false)
        camera.aspect = width/height
        camera.updateProjectionMatrix()
        console.log("berubah");
    }
}

function togglePlay(mixer, animations_clip, status) {
    animations_clip.map((val) => {
        mixer.clipAction(val).paused = status;
        // val.paused = status
    });
}
// [change model when user click on preview div]
let previewContainers = document.querySelectorAll('.preview');
const dataModels = [...previewContainers].map(element => {
    return element.dataset.model;
});
[...previewContainers].map((element, index) => {
    element.addEventListener('click', (e)=>{
        e.target.dataset.model = dataModels[index]
        defaultModel = dataModels[index];


        loader.load( defaultModel, function ( gltf ) {
            scene.remove(currentObject);
            mixer = new THREE.AnimationMixer(gltf.scene);
        
            const model = gltf.scene;
            model.scale.set(5,5,5)
        
            const animations_clip = gltf.animations.map((val, index)=>{
                mixer.clipAction(val).play();
                return val;
            })
            const durations = animations_clip.map((val)=> val.duration);
            
            highestDuration = Math.max(...durations)
            console.log(highestDuration);
            // SLIDER (TIME CONTROLLER)
            slider.max = highestDuration
           
            // idle.play()

            currentObject = gltf.scene;
            scene.add( currentObject );
            return gltf
        }, undefined, function ( error ) {
        
            console.error( error );
        
        } );
    })
})
console.log(previewContainers);

// load gltf model
let curr_animation = loader.load( defaultModel, function ( gltf ) {

    mixer = new THREE.AnimationMixer(gltf.scene);

    const model = gltf.scene;
    model.scale.set(5,5,5)

    const animations_clip = gltf.animations.map((val, index)=>{
        mixer.clipAction(val).play();
        return val;
    })
    const durations = animations_clip.map((val)=> val.duration);
    
    highestDuration = Math.max(...durations)
    
    // SLIDER (TIME CONTROLLER)
    slider.max = highestDuration

    // slider.addEventListener('input', (e)=>{
    //     mixer.update(slider.value)
    //     slider_touched = true;
    // });

    // slider.addEventListener('change', (e)=>{
    //     slider_touched = false;
    //     difTimeSlider = lastSliderVal - slider.value;
    // })
    
    // // [BUG!] CAN'T UPDATE ANIMATION FRAME WHEN IT PAUSED
    // pauseBtn.addEventListener('click', (e)=>{
    //     if (is_playing) {
    //         is_playing = false
    //     }else {
    //         is_playing = true
    //     }
    // });
    currentObject = gltf.scene;
    // idle.play()
	scene.add( currentObject );
    return gltf
}, undefined, function ( error ) {

	console.error( error );

} );


    slider.addEventListener('input', (e)=>{
        mixer.update(slider.value)
        slider_touched = true;
    });

    slider.addEventListener('change', (e)=>{
        slider_touched = false;
        difTimeSlider = lastSliderVal - slider.value;
    })
    
    // [BUG!] CAN'T UPDATE ANIMATION FRAME WHEN IT PAUSED
    pauseBtn.addEventListener('click', (e)=>{
        if (is_playing) {
            is_playing = false
        }else {
            is_playing = true
        }
    });
// add light
const light =  new THREE.HemisphereLight( 0xffffd4, 0x000000, 2);

scene.add( light );

// render it
var oldTime = 0;

const loop = function() {
    requestAnimationFrame(loop);
    resize();
    
    var delta = clock.getDelta();
    
    
    if ( mixer && !slider_touched && !is_playing) {

        var newTime;
        newTime = mixer.time - (oldTime + difTimeSlider);

        if (newTime >= highestDuration) {
            console.log("newTime");
            oldTime += highestDuration;
        }

        mixer.update( delta );
        slider.value = newTime;
        lastSliderVal = slider.value;
        difTimeSlider = 0;
        // slider.innerHTML = mixer.time
    }
    // console.log(defaultModel);
    
    renderer.render(scene, camera);
    renderer.setClearColor(0xdefdef, 1);
    renderer.info.reset();
}

loop();