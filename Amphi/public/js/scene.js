//Declaring all variables except coordinates, models and textures.
var scene, camera, clock, renderer, fillLight, keyLight, backLight, mtlLoader, objLoader, texture, fogDensity,
    cameraZoomValue, objectsToRotate = [], width, weight, init, animate,

//Declaring all coordonates X Y Z
    rangX1, rangX2, rangX3, rangX4, rangX5, rangX6, rangX7, rangX8, rangX9, rangX10, rangX11, rangX12, rangX13, rangX14,
    rangX15, rangX16, rangX17, rangX18, rangX19,
    rangX20, rangX21, rangX22, rangX23, rangX24, rangX25, rangX26, rangX27, rangX28, rangX29, rangX30, rangX31, rangX32,
    rangX33, rangX34, rangX35, rangX36, rangX37, rangX38,
    rangY1, rangY2, rangY3, rangY4, rangY5, rangY6, rangY7, rangY8, rangY9, rangY10, rangY11, rangY12,
    rangZ1, rangZ2, rangZ3, rangZ4, rangZ5, rangZ6, rangZ7, rangZ8, rangZ9, rangZ10, rangZ11, rangZ12,

//Declaring model and texture variables
    PNGFile, OBJAmphi, MTLAmphi, OBJConcrete, MTLConcrete, OBJPlastic, MTLPlastic, OBJredChaires, MTLredChaires,
    OBJredGround, MTLredGround, OBJIndBl, MTLIndBl, OBJIndJa,
    MTLIndJa, OBJIndRo, MTLIndRo, OBJIndVe, MTLIndVe, OBJIndVi, MTLIndVi, OBJIndFromArray, MTLIndFromArray,
    rang_xFromArray, col_yFromArray, col_zFromArray;






//Setting up scene and viewport size and parameters.
scene = new THREE.Scene();
camera = new THREE.PerspectiveCamera( 45, window.innerWidth/window.innerHeight, 0.1, 1000 );

renderer = new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth, window.innerHeight );

document.getElementById('webgl').appendChild(renderer.domElement);

clock = new THREE.Clock;



//Setting up camera controls and its options.
controls = new THREE.OrbitControls( camera, renderer.domElement );
controls.enableDamping = false;
controls.dampingFactor = 0.25;
controls.enableRotate = false;
controls.screenSpacePanning = true;
controls.maxDistance = 100;
controls.minDistance = 40;
controls.enableZoom = true;
controls.maxPolarAngle = Math.PI / 2;

camera.position.z = 30;
camera.rotation.set( 0, 0, 0 );





//Setting up lights for the scene.

renderer.physicallyCorrectLights = true;

keyLight = new THREE.DirectionalLight(new THREE.Color('hsl(30, 100%, 75%)'), 2);
fillLight = new THREE.DirectionalLight(new THREE.Color('hsl(240, 100%, 75%)'), 1);
backLight = new THREE.DirectionalLight(0xffffff, 2);
const ambientLight = new THREE.HemisphereLight( 0xddeeff, 0x202020, 2);





//Importing OBL and MTL to build models

mtlLoader = new THREE.MTLLoader();

function objBuilder(objFile, mtlFile, posiX, posiY, posiZ, animated = true, textured = false) {

    mtlLoader.load( mtlFile, function( material ) {

        material.preload();
        material.receiveShadow = true;

        objLoader = new THREE.OBJLoader();
        objLoader.setMaterials( material );
        objLoader.load( objFile, function ( object ) {

            object.scale.x = object.scale.y = object.scale.z = 0.02;

            object.position.x = posiX;
            object.position.y = posiY;
            object.position.z = posiZ;
            object.rotateX( Math.PI / 3 );

            object.receiveShadow = true;
            object.castShadow = true;

            if (animated != false){

                object.matrixAutoUpdate  = true;
                objectsToRotate.push(object);

            }

            if (textured != false){

                texture = new THREE.TextureLoader().load(textured);
                object.traverse(function (child) {   // aka setTexture

                    if (child instanceof THREE.Mesh) {
                        child.material.map = texture;

                    }

                });

            }

            scene.add( object );

        } );

    } );

}







function fogDensityControl() {

    cameraZoomValue = camera.position.z;
    fogDensity = cameraZoomValue * 0.0002;
    scene.fog = new THREE.FogExp2( 0xcccccc, fogDensity );

}



//Teleporting the camera when reaching set boundaries.
function cameraEdgeTeleportControl() {

    if(controls.target.x > 90){
        controls.target.x = -395;
        camera.position.x = -395;

    }

    if(controls.target.x < -395){
        controls.target.x = 90;
        camera.position.x = 90;
    }

    if(controls.target.y > 90){
        controls.target.y = -150;
        camera.position.y = -150;
    }

    if(controls.target.y < -150){
        controls.target.y = 90;
        camera.position.y = 90;
    }

}



function buildLights() {

    //Spawning lights
    scene.add( ambientLight );

    scene.add( keyLight );
    keyLight.position.set(-100, 0, 100);

    scene.add( fillLight );
    fillLight.position.set(100, 0, 100);

    scene.add( backLight );
    backLight.position.set(100, 0, -100).normalize();

}


function listenToWindowsSize() {

    //Updating size on rotate (For mobile) and on resize.
    window.addEventListener('resize', function(){

        width = window.innerWidth;
        weight = window.innerHeight;
        renderer.setSize( width, weight );
        camera.aspect = width / weight;
        camera.updateProjectionMatrix();

    });

}



//Making tips rotating on themselves at set degree per second.
function tipsRotationControl() {

    for (let i = 0; i < objectsToRotate.length; i++) {

        objectsToRotate[i].rotation.x = clock.getElapsedTime() * 2;
        objectsToRotate[i].rotation.y = clock.getElapsedTime() * 4;
        objectsToRotate[i].rotation.z = clock.getElapsedTime() * 8;

    }

}

function BuildFromDB() {

//PHPtoJs is a json coming from IndiceController.indice() and containing the indice table from the database, put in a JS variable in the view.
    for (let i = 0; i < PHPtoJs.length; i++) {

        OBJIndFromArray = "OBJInd" + PHPtoJs[i].obj_text;
        MTLIndFromArray = "MTLInd" + PHPtoJs[i].obj_text;
        rang_xFromArray = "rangX"  + PHPtoJs[i].rang_x;
        col_yFromArray  = "rangY"  + PHPtoJs[i].col_yz;
        col_zFromArray  = "rangZ"  + PHPtoJs[i].col_yz;

        // console.log("objBuilder(" + OBJIndFromArray + "," + MTLIndFromArray + "," + rang_xFromArray + "," + col_yFromArray + "," +  col_zFromArray + ");");

        objBuilder(eval(OBJIndFromArray), eval(MTLIndFromArray), eval(rang_xFromArray), eval(col_yFromArray),  eval(col_zFromArray));

    }
}

function buildItems(){
// !! Arguments are : (".obj file", ".MTL file", "X", Y", "Z", "Animated" (Optional, default = true), "texture" (Optional, default = false, or put texture link)

//Spawning models
    objBuilder(OBJAmphi, MTLAmphi, 0,0,30, false, PNGFile);
//     objBuilder(OBJConcrete,   MTLConcrete,   0, 0, 30, false, PNGFile);
//     objBuilder(OBJPlastic,    MTLPlastic,    0, 0, 30, false, PNGFile);
//     objBuilder(OBJredChaires, MTLredChaires, 0, 0, 30, false, PNGFile);
//     objBuilder(OBJredGround,  MTLredGround,  0, 0, 30, false, PNGFile);

//Tips creation
    BuildFromDB();

}




//Building variable for easy tips placing.
rangY1 = -132;
rangY2 = -111.08;
rangY3 = -90.16;
rangY4 = -69.25;
rangY5 = -48.33;
rangY6 = -27.41;
rangY7 = -6.5;
rangY8 =  14.41;
rangY9 =  35.33;
rangY10 = 56.25;
rangY11 = 77.16;
rangY12 = 77.16;


rangZ1 =   1.3;
rangZ2 =  -0.4;
rangZ3 =  -1.7;
rangZ4 =  -3.0;
rangZ5 =  -4.3;
rangZ6 =  -5.6;
rangZ7 =  -6.8;
rangZ8 =  -8.1;
rangZ9 =  -9.4;
rangZ10 = -10.7;
rangZ11 = -12.0;
rangZ12 = -12.0;


rangX1 = -394.75;
rangX2 = -384.5;
rangX3 = -374.25;

rangX4 =  -338.5;
rangX5 =  -328.25;
rangX6 =  -318;
rangX7 =  -307.75;
rangX8 =  -297.5;
rangX9 =  -287.25;
rangX10 = -277;
rangX11 = -266.75;
rangX12 = -256.5;
rangX13 = -246.25;
rangX14 = -236;
rangX15 = -225.75;
rangX16 = -215.5;
rangX17 = -205.25;
rangX18 = -195;
rangX19 = -184.75;

rangX20 = -121.5;
rangX21 = -111.25;
rangX22 = -101;
rangX23 = -90.75;
rangX24 = -80.5;
rangX25 = -70.25;
rangX26 = -60;
rangX27 = -49.75;
rangX28 = -39.5;
rangX29 = -29.25;
rangX30 = -19;
rangX31 = -8.75;
rangX32 =  1.5;
rangX33 =  11.75;
rangX34 =  22;
rangX35 =  32.25;

rangX36 = 68.25;
rangX37 = 78.5;
rangX38 = 88.75;



//Loading .obj and .mtl in variables for further use.
PNGFile = 'img/noise.png';

OBJAmphi =      'models/slicedModels.obj';
MTLAmphi =      'models/slicedModels.mtl';
OBJConcrete =   'models/concreteParts.obj';
MTLConcrete =   'models/concreteParts.mtl';
OBJPlastic =    'models/plasticTables.obj';
MTLPlastic =    'models/plasticTables.mtl';
OBJredChaires = 'models/redChaires.obj';
MTLredChaires = 'models/redChaires.mtl';
OBJredGround =  'models/redGround.obj';
MTLredGround =  'models/redGround.mtl';


OBJIndBl = 'models/IndiceBleu.obj';
MTLIndBl = 'models/IndiceBleu.mtl';
OBJIndJa = 'models/IndiceJaune.obj';
MTLIndJa = 'models/IndiceJaune.mtl';
OBJIndRo = 'models/IndiceRouge.obj';
MTLIndRo = 'models/IndiceRouge.mtl';
OBJIndVe = 'models/IndiceVert.obj';
MTLIndVe = 'models/IndiceVert.mtl';
OBJIndVi = 'models/IndiceViolet.obj';
MTLIndVi = 'models/IndiceViolet.mtl';








//Add everything that needs to be loaded one time and renders it.
init = function(){

    buildLights();

    buildItems();

};

//Update before each frame and then renders it.
animate = function () {

    requestAnimationFrame( animate );

    listenToWindowsSize();

    cameraEdgeTeleportControl();

    tipsRotationControl();

    fogDensityControl();

    controls.update();
    renderer.render(scene, camera);

};

//The show must go on !
init();

animate();