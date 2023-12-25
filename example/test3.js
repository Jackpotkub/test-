const numStr1 = "123456789";
const numStr2 = "53657687691428890";
const numStr3 = "1981023568910";


function missingDigits(numStr) {
    
    // const allDigits = "0123456789"; //กำหนดค่าไว้ก่อน
    // const missingDigitsArray = []; //กูหาไม่เจอ

    [...allDigits].forEach(digit => {
      if (!numStr.includes(digit)) {
        missingDigitsArray.push(digit);
      }
    });

  for (let i = 0; i < prohibited.length; i++) {
     if (missingDigitsArray.length === 0) {

        

      return `${numStr} has no missing digits`;
    } else {

        
        

      return `${numStr}  Missing Digit ${missingDigitsString} `; 
    }
  }
}

// allDigits = "0123456789".filter(checker);
// console.log("0123456789");
// missingDigitsArray = [].filter(checker);
// console.log([]);
  


console.log(missingDigits(numStr1));
console.log(missingDigits(numStr2));
console.log(missingDigits(numStr3));

// function missingDigits(numStr) {
//     const allDigits = "0123456789"; //กำหนดค่าไว้ก่อน
//     const missingDigitsArray = []; //กูหาไม่เจอ
  
//     [...allDigits].forEach(digit => {
//       if (!numStr.includes(digit)) {
//         missingDigitsArray.push(digit);
//       }
//     });
  
//     if (missingDigitsArray.length === 0) {
//       return `${numStr} has no missing digits`;
//     } else {
//       const missingDigitsString = missingDigitsArray.join(', ');
//       return `${numStr}  Missing Digit ${missingDigitsString} `;
//     }
//   }