import * as THREE from '/js/three/build/three.module.js';

import { OrbitControls } from '/js/three/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from '/js/three/examples/jsm/loaders/GLTFLoader.js';

const preview_container = document.querySelectorAll('.preview-container');
const preview_canvases = document.querySelectorAll('.preview');
const arr_prev_container = [...preview_container];
function init() {
  
  [...preview_canvases].map((preview_canvas, index) => {
    console.log(preview_canvas.dataset.model);
    console.log(arr_prev_container[index]);
  
    const previewContainer = arr_prev_container[index]
  
    const preview_scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const preview_renderer = new THREE.WebGL1Renderer({
      antialias: true
    });
    preview_renderer.gammaOutput = true;
  
    preview_canvas.appendChild(preview_renderer.domElement);
    // const control = new OrbitControls(camera, preview_renderer.domElement);
  
    let mixer, clock;
  
    const loader = new GLTFLoader();
    clock = new THREE.Clock();
  
    camera.position.z = 4;
    camera.position.y = 2;
    camera.position.x = 5;
    camera.rotation.y = 1;
    
    const light = new THREE.HemisphereLight(0xffffd4, 0x000000, 2);
    preview_scene.add(light);
  
    function resize() {
      const preview_canvas = preview_renderer.domElement
      const width = previewContainer.clientWidth
      const height = previewContainer.clientHeight
  
      if (preview_canvas.width !== width || preview_canvas.height !== height) {
        preview_renderer.setSize(width, height, false);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
        console.log("berubah");
      }
    }
  
    // load gltf model
    
    // add light
  
  
    function resizeRendererToDisplaySize() {
      const preview_canvas = preview_renderer.domElement;
      const width = preview_canvas.clientWidth;
      const height = preview_canvas.clientHeight;
      const needResize = preview_canvas.width !== width || preview_canvas.height !== height;
      if (needResize) {
        preview_renderer.setSize(width, height, false);
      }
      return needResize;
    }

    let renderOnce = true;
   
    loader.load(preview_canvas.dataset.model, function (gltf) {
      resize();
      
      gltf.scene.scale.set(1, 1, 1)
      preview_scene.add(gltf.scene);
      preview_renderer.setClearColor(0xdefdef, 1);
      preview_renderer.render(preview_scene, camera);
  
    }, undefined, function (error) {
      console.error(error);
    });
  })
}

init()