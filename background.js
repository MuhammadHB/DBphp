let colors = ["#2196f3", "#e91e63", "#ffeb3b", "#74ff1d"];//array value and save it in color vairebal
function createSquare() {
  // document mean the HTML file that u use it and querySelector select first section the u mention and run it 
  const section = document.querySelector("section");
  //createElement in the js don't  need to create it in html 
  const square = document.createElement("span");
  
  let size = Math.random() * 50; // math it's like library and the random it's fuction start with 1 and 0 and times * 50
  square.style.width = 20 + size + "px";//change the width by use style because we control width and height with style tag in html
  square.style.height = 20 + size + "px";//change the width by use style because we control width and height with style tag in html
  let bg = colors[Math.floor(Math.random() * colors.length)];// get a random value from colors array 
  square.style.background = bg;//take the background of html equal bg that we create it in js and run the js code 
  square.style.top = Math.random() * innerHeight + "px";//make the square moving to top (height)
  square.style.left = Math.random() * innerWidth + "px";//make the square become big (width)
  section.appendChild(square);// appendChild mean between the section open tag and section close tag put the square

  setTimeout(() => {//the time to disapper () => anynomus function without name
    square.remove();
  }, 5000);//5000 ml second = 5 seconds
}

setInterval(createSquare, 150);//making loop of the squares (again and again) setInterval(function, المدة الزمنية) repet again on 1.5 second


