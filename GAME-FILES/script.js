class Timer {
  constructor(seconds) {
    this.seconds = seconds;
  }

  startTimer() {
    let infoBox = document.getElementsByClassName("InfoBox")[0];
    var timerId = setInterval(() => {
      if (this.seconds == -1) {
        clearTimeout(timerId);
        // doSomething();
        generateDisaster();
        console.log("Timer Complete");
      } else {
        // elem.innerHTML = timeLeft + ' seconds remaining';
        console.log("Current Remaining: " + this.seconds);
        infoBox.innerHTML = this.seconds;
        this.seconds--;
      }
    }, 1000);

  }

}

class Disasters {
  constructor(name, scenario, option1, score1, option2, score2) {
    this.name = name;
    this.scenario = scenario;
    this.option1 = option1;
    this.score1 = score1;
    this.option2 = option2;
    this.score2 = score2;
  }

  disasterShow() {
    //show all member variables inside html box.
    let domScenario = document.getElementsByClassName("scenario")[0];
    let domOption1 = document.getElementsByClassName("option_1")[0];
    let domOption2 = document.getElementsByClassName("option_2")[0];

    let domButton1 = document.getElementById("o1");
    let domButton2 = document.getElementById("o2");

    domScenario.innerHTML = this.scenario;
    domOption1.innerHTML = this.option1;
    domOption2.innerHTML = this.option2;


    domButton1.addEventListener("click", () => { health += this.score1; console.log("1"); alert("Environmenal Health: " + health); });
    domButton2.addEventListener("click", () => { health += this.score2; console.log("2"); alert("Environmenal Health: " + health); });
  }
}
const idList = [];
let disasterFlag = 0;
let currentDisasterButtonID = -1;
let disasterList_ground = [];
let disasterList_water = [];
let health = 20;
let eHealth = document.getElementById("eHealth");

function loadButtons() {
  var div = document.getElementsByClassName("categories-buttons")[0];

  var heightCalc = window.innerWidth;//get current inner width
  heightCalc = heightCalc / 20; //calc individual width and height
  heightCalc = (window.innerHeight / heightCalc) * 0.8; //calc row of btn



  for (var j = 0; j < heightCalc; j++) {
    let rowDiv = document.createElement('div');
    rowDiv.classList.add('rowDiv');
    for (var i = 0; i < 20; i++) {
      createButton(i, j, rowDiv);

    }
    div.append(rowDiv);
  }

}


function createButton(i, j, rowDiv) {
  var btn = document.createElement("button");
  btn.classList.add("gameSquare");//set button class "gameSquare"

  // forrest, water, city(future problem)
  const classes = ["forrest", "water"];
  let rand = Math.floor(Math.random() * 10) % 2;
  btn.classList.add(classes[rand]);


  idList.push(j * 10 + i);
  btn.id = j * 10 + i;

  btn.addEventListener("click", () => { console.log("Hello There") }); // do something later
  rowDiv.append(btn);
}


function generateDisaster() {
  let max = idList.length - 1;
  let index = Math.floor(Math.random() * (max - 0)) + 0;
  console.log(idList[index]);

  //initiate flashing - chachi
  let btnElement = document.getElementById(idList[index]);
  btnElement.classList.add("inDisaster");



  currentDisasterButtonID = idList[index];
  disasterFlag = 1;


  btnElement.addEventListener("click", function abortDisaster(event) {
    disasterFlag = 0;
    //stop flashing - chachi
    let btnElement = document.getElementById(idList[index]);
    btnElement.classList.remove("inDisaster");

    //initiate question prompt here
    //choose random disaster THIS WILL NOT WORK, FIX LATER
    let randomDisaster = disasterList_ground[Math.floor(Math.random() * disasterList_ground.length)]; //contains the object for disaster
    console.log(randomDisaster);
    randomDisaster.disasterShow();
  });
}

function makeDisaster() {
  disasterList_ground.push(new Disasters(
    "ForestFire",
    "An alverez fir forest was struck by sudden lightning and burned down.What do you do?",
    "Replant with Bur Chervils",
    -5,
    "Do not replant with anything",
    -1
  ));

  disasterList_ground.push(new Disasters(
    "ForestFire",
    "An alverez fir forest was struck by sudden lightning and burned down. What do you do?",
    "Replant with alverez fir",
    +9,
    "change the forest to farmland",
    -5
  ));

  disasterList_ground.push(new Disasters(
    "ForestFire",
    "An alverez fir forest was struck by sudden lightning. Everything is on fire! What do you do?",
    "Replant with Western Red Cedar",
    +10,
    "Replant with Prunus mume",
    -3
  ));

  disasterList_ground.push(new Disasters(
    "Animal population change",
    "The fish population in a BC lake is under steady decline. What can we do to help?",
    "Stock the lake with warmouth",
    -6,
    "Stock the lake with northern pike",
    +7
  ));

  disasterList_ground.push(new Disasters(
    "Animal population change",
    "The fish population in a BC lake is under steady decline. What can we do to help?",
    "Stock the lake with white cloud mountain minnow",
    -6,
    "Stock the lake with arctic grayling",
    +7
  ));

  disasterList_ground.push(new Disasters(
    "Animal population change",
    "The fish population in a BC lake is under steady decline. What can we do to help?",
    "Stock the lake with rock bass",
    -6,
    "Stock the lake with brown trout",
    +7
  ));

  disasterList_ground.push(new Disasters(
    "Animal population change",
    "The fish population in a BC lake is under steady decline. What can we do to help?",
    "Stock the lake with muskellunge",
    -6,
    "Stock the lake with dolly varden",
    +7
  ));


  disasterList_ground.push(new Disasters(
    "Animal population change",
    "The fish population in a BC lake is under steady decline. What can we do to help?",
    "Stock the lake with spottail shiner",
    -6,
    "Stock the lake with bulltrout",
    +7
  ));

  disasterList_ground.push(new Disasters(
    "Animal population change",
    "The fish population in a BC lake is under steady decline. What can we do to help?",
    "Stock the lake with bitterling",
    -6,
    "Stock the lake with black crappie",
    +7
  ));


  disasterList_ground.push(new Disasters(
    "Animal population change",
    "Rabbit population is growing. Cute little rabbits are everywhere! What do you do?",
    "Plant some dandelion as their food",
    -8,
    "Introduce Wolves to the forest.",
    +3
  ));

  disasterList_ground.push(new Disasters(
    "Animal population change",
    "Black swift is found. This cute bird hasn't been seen for many years! What do you do?",
    "Capture it and send to the zoo",
    -20,
    "Protect it.",
    +3
  ));



  disasterList_water.push(new Disasters(
    "Animal population change",
    "The natural fish population in a BC lake is declining. How should you improve the situation?",
    "Stock the lake with white sturgeon",
    +8,
    "stock the fish with black carp",
    -10
  ));

  disasterList_water.push(new Disasters(
    "Animal population change",
    "The natural fish population in a BC lake is declining. How should you improve the situation?",
    "Stock the lake with white sturgeon",
    +8,
    "stock the fish with black carp",
    -10
  ));




}


// NEED TO IMPLEMENT GENERAL GAME LOOP
function gameLoop() {
  makeDisaster();
  let infoBox = document.getElementsByClassName("InfoBox")[0];


  while (true) {
    // we can make the events happen faster as the game progresses.
    let timer = new Timer(3);
    timer.startTimer();



    break;
  }
}