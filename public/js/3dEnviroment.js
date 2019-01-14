console.log("3D Works!!!...");

let width = document.getElementById('container').offsetWidth;
let height = document.getElementById('container').offsetHeight;

var scene = new THREE.Scene();

var camera = new THREE.PerspectiveCamera( 45, width / height, 3, 12 );
camera.position.z = 8;
camera.position.y = 1;

var renderer = new THREE.WebGLRenderer({canvas: container, alpha: true, antialias: true});
renderer.setSize( width, height );
renderer.setClearColor( 0x000000, 0 );

var light = new THREE.SpotLight( 0xf5f5f5, 0.5, 0, 0.8, 0.5, 1.2);
light.position.set( 10, 10, 10 ); 			//default; light shining from top
light.castShadow = true;            // default false
scene.add( light );

var geometry = new THREE.BoxGeometry( 1, 1, 1 );
var material = new THREE.MeshPhongMaterial( {color: 0x717171} );
var cube = new THREE.Mesh( geometry, material );
cube.castShadow = true; //default is false
cube.receiveShadow = true; //default
cube.position.set(0, 2, 0);
scene.add( cube );


function animate() {
	requestAnimationFrame( animate );
   renderer.render( scene, camera );
   cube.rotation.x += 0.01;
   cube.rotation.y += 0.01;
}

window.addEventListener('resize',
   function () {
      width = document.getElementById('container').offsetWidth;
      height = document.getElementById('container').offsetHeight;
      console.log(`Resized... W: ${width}, H: ${height}`);

      camera.aspect = width / height;
      camera.updateProjectionMatrix();
      renderer.setSize( width, height );
   // var centro = window.innerWidth/2;
   // document.getElementById('jk').style.left = (centro-30)+'px';
   }
);


window.addEventListener('load', function(){
  animate();
})