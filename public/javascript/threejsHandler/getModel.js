import * as THREE from '/js/three/build/three.module.js';
import { OrbitControls } from '/js/three/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from '/js/three/examples/jsm/loaders/GLTFLoader.js';

let showModal = false;

let modal_trigger = document.querySelectorAll('.modal-trigger');
let close_modals = document.querySelectorAll('.btn-close');
//give all modal trigger eventlistener
[...modal_trigger].map((modal_link, index) => {
    modal_link.addEventListener('click', (e) => {
        showModal = true;
        const modal = document.querySelector(`#modal-detail-${index}`);
        const preview_canvas = modal_link.querySelector(`#preview-canvas-${index}`);


        const model_data = preview_canvas.dataset.model;
        const container = modal.querySelector(`#container-detail-animasi-${index}`);
        const canvas = modal.querySelector(`#detail-animasi-${index}`);

        const scene = new THREE.Scene();

        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

        const renderer = new THREE.WebGL1Renderer({
            antialias: true
        });
        renderer.gammaOutput = true;

        if (canvas.hasChildNodes()) {
            canvas.innerHTML = ''
        }

        canvas.appendChild(renderer.domElement);
        const control = new OrbitControls(camera, renderer.domElement);

        let mixer, clock;

        const loader = new GLTFLoader();
        clock = new THREE.Clock();

        camera.position.z = 4;
        camera.position.y = 2;
        camera.position.x = 5;
        camera.rotation.y = 1;


        function resize() {
            let canvas = renderer.domElement
            let width = container.clientWidth
            let height = container.clientHeight

            if (canvas.width !== width || canvas.height !== height) {
                renderer.setSize(width, height, false)
                camera.aspect = width / height
                camera.updateProjectionMatrix()
                console.log("berubah");
            }
        }

        // load gltf model
        let animation = loader.load(model_data, function (gltf) {

            mixer = new THREE.AnimationMixer(gltf.scene);
            const model1 = gltf.scene;

            model1.scale.set(1, 1, 1)
            scene.add(gltf.scene);
            return gltf
        }, undefined, function (error) {
            console.error(error);
        });
        // add light
        const light = new THREE.HemisphereLight(0xffffd4, 0x000000, 2);

        scene.add(light);

        // render it

        const loop = function () {
            if (showModal) {
                requestAnimationFrame(loop);
                resize();
                renderer.render(scene, camera);
                renderer.setClearColor(0xdefdef, 1);
                renderer.info.reset();
    
                console.log("run");
            }
        }

        loop()
    })
});

[...close_modals].map((close_button) => {
    close_button.addEventListener('click', ()=>{
        showModal = false
    })
});