function fibonacci(n) {
  if (n < 0) return [];

  const serie = [0];          
  if (n === 0) return serie;

  serie.push(1);              

  for (let i = 2; i <= n; i++) {
    const next = serie[i - 1] + serie[i - 2];
    serie.push(next);         
  }

  return serie;
}

// Ejemplo:
console.log(fibonacci(5));  