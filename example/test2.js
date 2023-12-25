


function createQuote(quote, callback) {
    let myQuote = "Like I always say, " + quote;
    callback(myQuote);
}

function logQuote(quote) {
    console.log(quote + 'Yes...');
}

createQuote(" You will getting better!", logQuote);


var arr = ['banana', 'monkey banana', 'apple', 'kiwi', 'orange'];

function checker(value) {
  var prohibited = ['banana', 'apple'];

  for (var i = 0; i < prohibited.length; i++) {
    if (value.indexOf(prohibited[i]) == -1) {
      return true;
    } else {
      return false;
    }
  }
}

arr = arr.filter(checker);
console.log(arr);