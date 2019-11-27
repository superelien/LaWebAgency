"use strict";

const $containerBtn = $('#myBtnContainer');
const $containerPl = $('.itemParentContainer');

// ['Tout', 'Tuto', 'Godot', 'Unity', '3D', 'gimp'].forEach(function (word) {
//   $("<button class='btn btn-info m-1'>"+word+"</button>").click(function (e) {
//     e.preventDefault();
//     $containerPl.each(function(){
//       $(this).css('display', word === 'Tout' || $(this).text().toLowerCase().includes(word.toLowerCase()) ? 'block' : 'none');
//     });
//   }).appendTo($containerBtn);
// });

document.getElementById("inputSearch").onchange = function() {myFunction()};

function myFunction() {
  const elements = document.querySelectorAll(".itemParentContainer");
  var x = document.getElementById("inputSearch");
  var valueX = x.value;
  elements.forEach((element) => {
    let verif =  element.textContent.toLowerCase().includes(valueX);
    if (verif == false){
      element.style.display = "none";
    }else{
      element.style.display = "block";
    }
  })
};

document.getElementById("inputSearchSelect").onchange = function() {myFunctionSelect()};

function myFunctionSelect() {
  const elements = document.querySelectorAll(".itemParentContainer");
  var x = document.getElementById("inputSearchSelect");
  var valueXs = x.value;
  console.log(valueXs);
  elements.forEach((element) => {
    let verif =  element.textContent.toLowerCase().includes(valueXs);
    console.log(verif);
    if (verif == false){
      element.style.display = "none";
    }else{
      element.style.display = "block";
    }
  })
};
