const init = () => {
  const content = document.querySelector(".content-canvas");
  const s = {
    w: innerWidth,
    h: innerHeight
  };

  const gl = {
    renderer: new THREE.WebGLRenderer({ antialias: true }),
    camera: new THREE.PerspectiveCamera(75, s.w / s.h, 0.1, 100),
    scene: new THREE.Scene(),
    loader: new THREE.TextureLoader()
  };

  let time = 0;

  const addScene = () => {
    gl.camera.position.set(0, 0, 1);
    gl.scene.add(gl.camera);

    gl.renderer.setSize(s.w, s.h);
    gl.renderer.setPixelRatio(devicePixelRatio);
    content.appendChild(gl.renderer.domElement);

    mesh();
  };

  const uniforms = {
    time: { type: "f", value: 0 },
    resolution: {
      type: "v2",
      value: new THREE.Vector2(innerWidth, innerHeight)
    },
    mouse: { type: "v2", value: new THREE.Vector2(0, 0) },
    waveLength: { type: "f", value: 1.2 },
    texture1: {
      value: gl.loader.load("https://images.unsplash.com/photo-1513343041531-f73bffeed81b?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ")
    }
  };

  const getGeom = () => new THREE.PlaneGeometry(1, 1, 64, 64);

  const getMaterial = () => {
    return new THREE.ShaderMaterial({
      side: THREE.DoubleSide,
      uniforms: uniforms,
      vertexShader: document.querySelector("#vertex-shader").textContent,
      fragmentShader: document.querySelector("#fragment-shader").textContent
    });
  };

  const mesh = () => {
    gl.geometry = getGeom();
    gl.material = getMaterial();

    gl.mesh = new THREE.Mesh(gl.geometry, gl.material);

    gl.scene.add(gl.mesh);
  };

  const update = () => {
    time += 0.05;
    gl.material.uniforms.time.value = time;

    render();
    requestAnimationFrame(update);
  };

  const render = () => gl.renderer.render(gl.scene, gl.camera);

  const resize = () => {
    const w = innerWidth;
    const h = innerHeight;

    gl.camera.aspect = w / h;
    gl.renderer.setSize(w, h);

    const dist = gl.camera.position.z - gl.mesh.position.z;
    const height = 1;
    
    gl.camera.fov = 2 * (180 / Math.PI) * Math.atan(height / (2 * dist));

    if (w / h > 1) gl.mesh.scale.x = gl.mesh.scale.y = 1.05 * w / h;
    
    gl.camera.updateProjectionMatrix();
  };

  addScene();
  update();
  resize();
  window.addEventListener("resize", resize);
};

init();