/**
 * To sort a long array with values between 0 and 10 efficiently,
 * solution : utilize the Counting Sort algorithm
 *  example :
 *  input : [10,1,1,5,10, 2,9 ,7 ,8, 10]
 *  output : [1, 1, 2, 5, 7, 8, 9, 10, 10, 10]
 */
function CountingSort(arr) {
    let countArray = [];
    let output = [];
    //array of size 11 initialized with zeros 
    for (let i = 0; i < 11; i++) {
        countArray[i] = 0;
    }
    // Step 1: Count the occurrences of each element
    for (ele of arr) {
        countArray[ele] += 1;
    }
    // in this loop i modifies the array by putting in each index from where in the 
    // main array insex should start
    for (let i = 1; i < 11; i++) {
        countArray[i] += countArray[i - 1];
    }
    // build the output array  
    for (let index = 0; index < arr.length; index++) {
        output[countArray[arr[index]] - 1] = arr[index];
        countArray[arr[index]] -= 1;
    }
    return output;
}
// call function
console.log(CountingSort([10, 1, 1, 5, 10, 2, 9, 7, 8, 10]))