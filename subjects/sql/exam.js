
const formExercise = document.querySelector(".form-exercises")

let slideIndex = 1;

fetch('./exam.json').then(response => {
   return response.json()
}).then(data => {
   const exam = data.exam;

   for ( const item of exam) {

       const slideElement = document.createElement('div') // This is the parent Element Container
       const pElement = document.createElement('p')  // This is the Element for the question
       
       slideElement.className = "slide-container"; // This is the class name for the parent container
       pElement.innerHTML = item.id +". "+ item.question; // Add the question from the exam ex. 1. What is css?
       slideElement.style.textAlign = "left"
       slideElement.style.marginLeft = "100px"
       slideElement.style.marginRight = "100px"

       const divElement = document.createElement('div') // Create div container for the options
       

       // Loop for each option ex. ["option 1", "option 2", "option 3"]
       const choices = ["a", "b", "c"];
       
       let count = 0;

       for (const option of item.options) {
           // console.log(choices[count])
           // Create a input element with type radio for the option
           const innerContent = '<input type="radio" id="'+option+'" name="'+item.id+'" value='+choices[count]+'> <label for ="'+option+'">'+option+'</label><br>'
           const inputElement = document.createElement('div')
           inputElement.innerHTML = innerContent;
           
           inputElement.style.textAlign  = "left"

           // Insert input radio element inside the divElement
           divElement.append(inputElement);

           // Add style in the divElement
           divElement.style.margin = '12px 0px';
           count++;
       }
       slideElement.append(pElement);
       slideElement.append(divElement);

       formExercise.append(slideElement);
   }

   showSlides(slideIndex, true);
}).catch(error => {
   console.log('Error: ', error)
}) 

const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const submitButton = document.querySelector('.submit');

nextButton.addEventListener('click', event => {
   event.preventDefault();
   showSlides(slideIndex += 1, true)
})
prevButton.addEventListener('click', event => {
   event.preventDefault();
   showSlides(slideIndex -= 1, false)
})


function showSlides(index, isNext) {
   let slides = document.getElementsByClassName('slide-container');
   
   nextButton.style.display = "block"
   prevButton.style.display = "block"
   submitButton.style.display = "none"

   if (index > slides.length) {
       slideIndex = 1;
   }

   if (index === 1) {
       prevButton.style.display = "none"
   }

   if (index === slides.length) {
       nextButton.style.display = "none"
       submitButton.style.display = "block"
   }

   slides[slideIndex - 1].style.display = 'block';
   if (isNext) {
       slides[slideIndex - 2].style.display = 'none';
   } else {
       slides[slideIndex].style.display = 'none';
   }
}