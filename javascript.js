// Simple Program To Test Execution Time of JavaScript
const startTime = performance.now();

const numbers = Array.from({ length: 10000000 }, (_, index) => index + 1);

let sum = 0;

for (const number of numbers) {
    sum += number;
}

const endTime = performance.now();

const executionTime = endTime - startTime;

console.log(`Javascript => Execution Time: ${executionTime} milliseconds`);