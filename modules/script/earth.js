
var renderer = new THREE.WebGLRenderer( { alpha: true } );
renderer.setSize(300,300);
renderer.setClearColor( 0x000000, 0);
document.querySelector('.earthdiv').appendChild(renderer.domElement);

var scene = new THREE.Scene();

var camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 1000);

var controls = new THREE.OrbitControls( camera, renderer.domElement );



camera.position.set(0, 0, 10);
controls.update();
window.addEventListener('resize',function(){
  renderer.setSize(window.innerWidth,window.innerHeight);
  camera.aspect=window.innerWidth/window.innerHeight
})



var loader = new THREE.GLTFLoader();

loader.load('/public/landing-page/model/scene.glb', function( gltf ){
  scene.add( gltf.scene );

}, undefined, function ( error ) {
  console.error( error );
});

var light = new THREE.AmbientLight( 0xffffff );
scene.add(light);

function animate() {
  requestAnimationFrame(animate);
  controls.update();
  renderer.render(scene,camera);
}

animate();