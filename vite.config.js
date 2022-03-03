import { resolve } from "path";
import { unlinkSync, existsSync } from "fs";

const symfonyPlugin = {
  name: "symfony",
  configResolved(config) {
    if (config.env.DEV && config.build.manifest) {
      let buildDir = resolve(config.root, config.build.outDir, "manifest.json");
      existsSync(buildDir) && unlinkSync(buildDir);
    }
  },
  configureServer(devServer) {
    let { watcher, ws } = devServer;
    watcher.add(resolve("templates/**/*.twig"));
    watcher.on("change", function (path) {
      if (path.endsWith(".twig")) {
        ws.send({
          type: "full-reload",
        });
      }
    });
  },
};

export default {
  plugins: [symfonyPlugin],
  server: {
    watch: {
      disableGlobbing: false,
    },
  },
  root: "./",
  base: "/assets/",
  build: {
    manifest: true,
    emptyOutDir: true,
    assetsDir: "",
    outDir: "../public/assets/",
    rollupOptions: {
      input: ["./assets/app.js"],
    },
  },
};