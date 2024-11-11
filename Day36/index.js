import { youtube, discord } from "./app.js";

(async () => {
  await youtube.initialize();
  await youtube.search("cara membuat API menggunakan Laravel 10");
  // await youtube.moveTo("dQw4w9WgXcQ");
})();
