import {default as ScrollHandler} from "./custom/scrolltracking.js";
import TypeIt from "typeit";  
                
// Add Scroll effect listener
document.addEventListener("scroll", ScrollHandler);

// Add handler for about entry
let anchor = document.getElementById('anchor') || false;
if(anchor !== false) {
  window.location.hash = anchor.value;
}

// Typing effect
// https://www.typeitjs.com/

const typewriter = new TypeIt("#introtext", {
  speed: 75,
  loop: false,
  lifeLike: true,
  cursorChar: "_",
  waitUntilVisible: true
});

// Initial prompt, open vim
typewriter.type("[khoelck0315@localdev portfolio]$&nbsp;", {instant:true, delay: 1000})
  .type("vim summary", { delay: 100})
  .delete("#introtext", {instant: true})
  .break()

// Render vim window
typewriter.exec(() => {
  document.getElementById("vim-footer").style.visibility = "visible";
})
let lines = 22
while (lines > 0) {
  typewriter.type('~', {instant: true}).break();
  lines--;
}

// Begin typing paragraph
typewriter.move(null, {instant: true})
  .delete()
  .type("H")
  .exec(() => document.getElementById("insert").style.visibility = "visible")
  .type("ello, my name is Kevin Hoelck and I am a network administrator", {delay: 500})
  .delete(21, {delay: 500})
  .type("security engineer", {delay:500})
  .delete(17, {delay: 800})
  .type("full stack web developer.", {delay: 800})
  .break()
  .type("Although I have had a few official titles, none of them have been in a development role.  ", {delay: 200})
  .type("However, I have been the primary backend and frontend web developer at my company for the past four years.", {delay: 200})
  .break()
  .type("Writing code is my passion, and I hope to soon land my first official development role.  Scroll down ", {delay: 200})
  .type("to learn more about my skills and how I can become an asset to your development team!", {delay: 800})


// Save, exit vim
typewriter.exec(async () => {
    document.getElementById("insert").innerHTML = "";
    const result = await new Promise((resolve, reject) => {
      const typer = new TypeIt("#insert", {
        speed: 75,
        loop: false,
        lifeLike: true,
      });
      typer.type(":wq!", {delay: 400}).delete(null, {instant:true}).flush(() => resolve())
      typer.destroy();
    })
    return result;
  })
  .move(null, {to: "END", instant: true})
  .delete(null, {instant: true})
  .type("[khoelck0315@localdev portfolio]$ vim aboutme.txt", {instant:true})
  .break()
  .type("[khoelck0315@localdev portfolio]$&nbsp;", {instant:true})

// cat from bash
typewriter.type("cat summary")
  .break()
  .type("Hello, my name is Kevin Hoelck and I am a full stack web developer.", {instant: true})
  .break()
  .type("Although I have had a few official titles, none of them have been in a development role.  ", {instant: true})
  .type("However, I have been the primary backend and frontend web developer at my company for the past four years.", {instant: true})
  .break()
  .type("Writing code is my passion, and I hope to soon land my first official development role.  Scroll down ", {instant: true})
  .type("to learn more about my skills and how I can become an asset to your development team!", {instant: true})
  .break()
  .type("[khoelck0315@localdev portfolio]$ ", {instant:true})

// Execute the above actions
typewriter.go();
