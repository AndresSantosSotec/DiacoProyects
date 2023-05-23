// Función para mostrar un mensaje en la consola
function logMessage(message) {
    console.log(message);
  }
  
  // Función para obtener la longitud de un arreglo
  function getArrayLength(arr) {
    return arr.length;
  }
  
  // Función para verificar si un número es par
  function isEven(num) {
    return num % 2 === 0;
  }
  
  // Función para generar un número aleatorio en un rango dado
  function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
  
  // Función para convertir una cadena a mayúsculas
  function convertToUpperCase(str) {
    return str.toUpperCase();
  }
  
  // Función para calcular el factorial de un número
  function calculateFactorial(num) {
    if (num === 0 || num === 1) {
      return 1;
    } else {
      return num * calculateFactorial(num - 1);
    }
  }
  
  // Función para verificar si un elemento existe en un arreglo
  function isInArray(element, arr) {
    return arr.includes(element);
  }
  
  // Función para redirigir a una URL específica
  function redirectTo(url) {
    window.location.href = url;
  }
  
  // Función para esperar un tiempo determinado en milisegundos
  function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
  
  // Función para validar si un valor es un número
  function isNumber(value) {
    return typeof value === 'number' && !isNaN(value);
  }
  