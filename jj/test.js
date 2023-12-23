const numStr1 = "123456789";
const numStr2 = "53657687691428890";
const numStr3 = "1981023568910";


function missingDigits(numStr) {
  const allDigits = "0123456789"; //กำหนดค่าไว้ก่อน
  const missingDigitsArray = []; //กูหาไม่เจอ

  [...allDigits].forEach(digit => {
    if (!numStr.includes(digit)) {
      missingDigitsArray.push(digit);
    }
  });

  if (missingDigitsArray.length === 0) {
    return `${numStr} has no missing digits.`;
  } else {
    const missingDigitsString = missingDigitsArray.join(', ');
    return `${numStr} has missing digits ${missingDigitsString}.`;
  }
}

console.log(missingDigits(numStr1));
console.log(missingDigits(numStr2));
console.log(missingDigits(numStr3));
