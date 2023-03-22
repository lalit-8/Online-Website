document.addEventListener("DOMContentLoaded", () => {
  const button = document.querySelector("button");
  const quote = document.querySelector("blockquote p");
  const cite = document.querySelector("blockquote cite");
  
  async function updateQuote() {
    const response = await fetch("https://api.quotable.io/random");
    const data = await response.json();
    if (response.ok) {
      quote.textContent = data.content;
      cite.textContent = data.author;
    } 
    else {
      quote.textContent = "An error occured";
      console.log(data);
    }
  }
  
  button.addEventListener("click", updateQuote);
  updateQuote();
});

function copyText() {
  let qtext = document.getElementById('qtext').innerText;
  let qcite = document.getElementById('qcite').innerText;
  let result = '"'+qtext+'"'.concat("\n","-",qcite);
  navigator.clipboard.writeText(result);
}