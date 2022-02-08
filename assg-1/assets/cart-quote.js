function writeRandomQuote() {
    var quotes = new Array();
    quotes[0] = "Happiness is not in money, but in shopping.";
    quotes[1] = "For some, shopping is an art; for others, it's a sport";
    quotes[2] = "Whoever said money can't buy happiness simply didn't know where to go shopping.";
    quotes[3] = "Show your confidence. Show you're not afraid. Go shopping.";
    var rand = Math.floor(Math.random()*quotes.length);
  	document.querySelector(".otro-blockquote").innerHTML = quotes[rand];
}

writeRandomQuote();
