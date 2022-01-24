'use strict';

// 1) ---------------------
// 
//  using the (findMax) function; return the maximum value in the provided array
//  without using build-in functions.
//  EX:
//  [12, 32, 22, 45, 78, 12, 50] ==> 78
//  
// ------------------------


const findMax = (arr)=>{
    let max=arr[0];
    for (let index = 0; index < arr.length; index++) {
        if(arr[index]>max) {
            max= arr[index];
        }
       
    }
   
    // write your code here
    return max;
}

// 2) ---------------------
// 
//  using the (sumNums) function; return the Sum value of the numeric values
//  inside the array (there could be strings inside), without using build-in functions
//  EX:
//  [20, '234', 'car', 41, 20, 'chair'] ==> 81
//  
// ------------------------

const sumNums = (arr)=>{
    var sum=0;
    for (let index = 0; index < arr.length; index++) {
if(typeof(arr[index])=='number'){
    sum=sum+arr[index];
}

        }
  
    
    return sum;
}

// 3) ---------------------
// 
//  using the (reverseArray) function; return provided array reversed
//  without using build-in functions
//  EX:
//  ['C#', 'JS', 'Ruby','Python' ] ==> ['Python','Ruby','JS','C#']
// 
// ------------------------
const reverseArray = (arr)=>{
    let NewArr=[];
    var NweIndex=arr.length-1;
   for (let index = 0; index < arr.length; index++) {
      NewArr[index]=arr[NweIndex];
      NweIndex--;
   }

return NewArr; }

module.exports = {findMax , sumNums, reverseArray};